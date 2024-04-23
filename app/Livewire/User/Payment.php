<?php

namespace App\Livewire\User;

use App\Models\CouponCode;
use App\Models\Payment as PaymentModel;
use Laravel\Cashier\Coupon;
use Stripe\PaymentMethod;
use Livewire\Component;
use Stripe\Stripe;

class Payment extends Component
{
    public $coupon_code;
    public $amount = 2000;
    public $cardNumber;
    public $cardExpiryMonth;
    public $cardExpiryYear;
    public $cardCVC;


    protected $rules = [
        'cardNumber' => 'required|regex:/^[45]\d{15}$/',
        'cardExpiryMonth' => 'required|numeric|between:1,12',
        'cardExpiryYear' => 'required|numeric|digits:4',
        'cardCVC' => 'required|numeric|digits:3',
    ];

    protected $messages = [
        'cardNumber.required' => 'رقم البطاقة مطلوب.',
        'cardNumber.regex' => 'رقم البطاقة يجب أن يكون صالحاً ومكون من 16 رقماً.',
        'cardExpiryMonth.required' => 'حقل شهر الانتهاء مطلوب.',
        'cardExpiryMonth.numeric' => 'يجب أن يكون شهر الانتهاء رقماً.',
        'cardExpiryMonth.between' => 'شهر الانتهاء يجب أن يكون بين :min و :max.',
        'cardExpiryYear.required' => 'حقل سنة الانتهاء مطلوب.',
        'cardExpiryYear.numeric' => 'يجب أن تكون سنة الانتهاء رقماً.',
        'cardExpiryYear.digits' => 'سنة الانتهاء يجب أن تتكون من :digits أرقام.',
        'cardCVC.required' => 'حقل رمز الحماية مطلوب.',
        'cardCVC.numeric' => 'يجب أن يكون رمز الحماية رقماً.',
        'cardCVC.digits' => 'رمز الحماية يجب أن يتكون من :digits أرقام.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function makePayment()
    {
        $this->validate();

        $paymentMethod = $this->makeStripePayment();

        $payment = PaymentModel::create([
            'user_id' => auth()->id(),
            'amount' => $this->amount,
            'stripe_payment_id' =>$paymentMethod,
            'status' => 'pending',
        ]);

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            auth()->user()->charge($this->amount * 100, $paymentMethod, [
                'currency' => 'AED',
                'description' => "تفعيل حساب " . auth()->user()->email,
                'receipt_email' => auth()->user()->email,
                'return_url' => 'http://localhost:8000/dashboard'
            ]);

            auth()->user()->paid = 1;
            auth()->user()->save();

            $payment->status = 'paid';
            $payment->save();

            return redirect()->route('success')->with('success', 'شكرا لك على إيداعك. تم تفعيل حسابك بنجاح');
        } catch (\Stripe\Exception\CardException $e) {

            $payment->status = 'failed';
            $payment->save();

            session()->flash('payment-error', 'حدثت مشكلة أثناء الدفع.<br>'.$e->getError()->message);
            return redirect()->back();
        }
    }



    private function makeStripePayment()
    {
        Stripe::setApiKey(env('stripe_secret'));

        $paymentMethod = PaymentMethod::create([
            'type' => 'card',
            'card' => [
                'number' => $this->cardNumber,
                'exp_month' => $this->cardExpiryMonth,
                'exp_year' => $this->cardExpiryYear,
                'cvc' => $this->cardCVC,
            ],
        ]);

        return $paymentMethod->id;
    }


    public function CouponCode()
    {

        if ($this->coupon_code)
        {
            $coupon_code = CouponCode::where('code', $this->coupon_code)->first();


            if ($coupon_code) {
                $this->amount = 2000 - (2000 * $coupon_code->percent / 100);
                session()->flash('coupon-success', 'تم تطبيق الكوبون بنجاح');
            }
            else
            {
                $this->amount = 2000;
                session()->flash('coupon-error', 'الكوبون غير صالح');
            }
        }
        else
        {
            session()->flash('coupon-error', 'لم يتم إدخال كوبون خصم');
        }


    }

    public function render()
    {
        return view('livewire.user.payment')->layout('User.layouts.app');
    }
}
