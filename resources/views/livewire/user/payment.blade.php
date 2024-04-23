@section('title','تسجيل طلب جديد')
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
        <div class="text-center mb-1">
            <h2 class="text-xl font-bold text-gray-800">ما يجب دفعه</h2>
            <p class="text-3xl font-semibold text-blue-500">{{ $amount }}</p>
            <p class="text-sm text-gray-500">د.إ</p>
        </div>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="row p-2">
            <div class="col-12 col-md-6 offset-md-3 mt-2 text-center">
                <h2 class="text-lg text-white mb-3 font-semibold">يجب عليك الدفع قبل مواصلة الطلب لضمان جدية الطلب</h2>
                <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden relative p-4">
                    <div class="p-4 mt-4">
                        <hr class="h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />


                        <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
                            <form wire:submit.prevent="CouponCode">
                                @if (session()->has('coupon-success'))
                                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                        <p>{{ session('coupon-success') }}</p>
                                    </div>
                                @endif

                                @if (session()->has('coupon-error'))
                                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                                        <p>{{ session('coupon-error') }}</p>
                                    </div>
                                @endif
                                <div class="mb-4">
                                    <label for="coupon_code" class="block text-gray-700 font-bold mb-2">كود الخصم</label>
                                    <input wire:model="coupon_code" type="text" id="coupon_code" name="coupon_code" class="form-input w-full px-4 py-2 border text-center rounded-md focus:outline-none focus:border-blue-500" placeholder="">
                                </div>

                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-200" wire:loading.remove wire:target='CouponCode'>
                                    تطبيق كود الخصم
                                </button>
                                <img src="{{ asset('img/loading.gif') }}" width="50" wire:loading wire:target='CouponCode'>
                            </form>
                        </div>

    <hr class="my-6">


    <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
        <form wire:submit.prevent="makePayment">
            @if (session()->has('payment-error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <p>{!! session('payment-error') !!}</p>
                </div>
            @endif

            <div class="mb-4">
                <label for="cardNumber" class="block text-gray-700 font-bold mb-2">رقم البطاقة</label>
                <input wire:model="cardNumber" type="text" id="cardNumber" name="cardNumber" class="form-input w-full px-4 py-2 border text-left rounded-md focus:outline-none focus:border-blue-500" placeholder="XXXX XXXX XXXX XXXX">
                @error('cardNumber')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="expiryDate" class="block text-gray-700 font-bold mb-2">تاريخ الانتهاء (MM/YY)</label>
                    <input wire:model="expiryDate" type="text" id="expiryDate" name="expiryDate" class="form-input w-full px-4 py-2 border text-center rounded-md focus:outline-none focus:border-blue-500" placeholder="MM/YY">
                    @error('expiryDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="cardCVC" class="block text-gray-700 font-bold mb-2">رمز التحقق (CVV)</label>
                    <input wire:model="cardCVC" type="password" id="cardCVC" name="cardCVC" class="form-input w-full px-4 py-2 border text-center rounded-md focus:outline-none focus:border-blue-500" placeholder="CVV">
                    @error('cardCVC')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-200"  wire:loading.remove wire:target='makePayment'>
                دفع
            </button>
            <img src="{{ asset('img/loading.gif') }}" width="50" wire:loading wire:target='makePayment'>
        </form>

    </div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/imask"></script>
<script>
    IMask(document.getElementById('cardNumber'), {
        mask: '0000000000000000'
    });

    IMask(document.getElementById('expiryDate'), {
        mask: '00/00'
    });

    IMask(document.getElementById('cardCVC'), {
        mask: '000'
    });
</script>
