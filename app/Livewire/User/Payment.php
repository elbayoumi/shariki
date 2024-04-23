<?php

namespace App\Livewire\User;

use App\Models\CouponCode;
use App\Models\Payment as PaymentModel;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentMethod;
use Livewire\Component;
use Stripe\Exception\CardException;
use Stripe\Stripe;
class Payment extends Component
{
    public $coupon_code;
    public $amount = 2000;
    public $cardNumber;
    public $expiryDate;
    public $cardCVC;

    protected $rules = [
        'cardNumber' => 'required|regex:/^[45]\d{15}$/',
        'expiryDate' => 'required|date_format:m/y',
        'cardCVC' => 'required|numeric|digits:3',
    ];

    protected $messages = [
        'cardNumber.required' => 'رقم البطاقة مطلوب.',
        'cardNumber.regex' => 'رقم البطاقة يجب أن يكون صالحاً ومكون من 16 رقماً.',
        'expiryDate.required' => 'حقل تاريخ الانتهاء مطلوب.',
        'expiryDate.date_format' => 'يجب أن يكون تاريخ الانتهاء بشكل صحيح.',
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

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $paymentMethod = $this->makeStripePayment();

            auth()->user()->charge($this->amount * 100, $paymentMethod->id, [
                'currency' => 'AED',
                'description' => "تفعيل حساب " . auth()->user()->email,
                'receipt_email' => auth()->user()->email,
                'return_url' => 'http://localhost:8000/dashboard'
            ]);

            auth()->user()->payments()->create(
                [
                    'amount' => $this->amount,
                    'status' => 'paid',
                    'stripe_payment_id' => $paymentMethod->id,
                ]
            );

            Session::put('stripe_payment_id',$paymentMethod->id, 7 * 24 * 60);

            return redirect()->route('dashboard.match.personal');

        } catch (CardException $e) {
            $errorMessage = $e->getError()->message;
            session()->flash('payment-error', $errorMessage);
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('payment-error', 'حدثت مشكلة أثناء الدفع. الرجاء المحاولة مرة في وقت لاحق.');
            return redirect()->back();
        }
    }

    private function makeStripePayment()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        [$expMonth, $expYear] = explode('/', $this->expiryDate);

        $paymentMethod = PaymentMethod::create([
            'type' => 'card',
            'card' => [
                'number' => $this->cardNumber,
                'exp_month' => $expMonth,
                'exp_year' => $expYear,
                'cvc' => $this->cardCVC,
            ],
        ]);

        return $paymentMethod;
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
        return view('livewire.user.payment');
    }
}
