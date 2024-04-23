<div class="container mt-3 mb-3  text-center">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card p-4">
                <h2 class="text-center mb-4">عملية الدفع</h2>

                @if (session()->has('coupon-success'))
                    <div class="alert alert-success text-center">
                        {{ session('coupon-success') }}
                    </div>
                @elseif(session()->has('coupon-error'))
                    <div class="alert alert-danger text-center">
                        {{ session('coupon-error') }}<br>
                    </div>
                @endif


                المطلوب دفعه اليوم: {{ $amount }} د.إ
                <form wire:submit.prevent="CouponCode">
                    <div class="form-group">
                        <label for="coupon_code">كود الخصم</label>
                        <input type="text" wire:model="coupon_code" class="form-control">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-black btn-lg px-5"> تطبيق كود الخصم</button>
                    </div>

                    <div wire:loading  wire:target="CouponCode">
                        <div class="text-center mt-1">
                            <svg
                                width="50px"
                                height="50px"
                                viewBox="0 0 100 100"
                                preserveAspectRatio="xMidYMid"
                                >
                                <circle
                                    cx="50"
                                    cy="50"
                                    fill="none"
                                    stroke="#007bff"
                                    stroke-width="10"
                                    r="35"
                                    stroke-dasharray="164.93361431346415 56.97787143782138"
                                    transform="rotate(126 50 50)"
                                >
                                    <animateTransform
                                    attributeName="transform"
                                    type="rotate"
                                    repeatCount="indefinite"
                                    dur="1s"
                                    keyTimes="0;1"
                                    values="0 50 50;360 50 50"
                                    ></animateTransform>
                                </circle>
                            </svg>

                        </div>
                    </div>
                </form>


                <form wire:submit.prevent="makePayment">

                    <hr style="width:50%;margin-left:25%">
                    <h2 class="text-center">بيانات البطاقة</h2>

                @if (session()->has('payment-success'))
                    <div class="alert alert-success text-center">
                        {{ session('coupon-success') }}
                    </div>
                @elseif(session()->has('payment-error'))
                    <div class="alert alert-danger text-center">
                        {!! session('payment-error') !!}<br>
                        <a href="../"><button class="btn-sm btn-danger mt-2">إلغاء عملية الدفع</button></a>
                    </div>
                @endif



                    <div class="form-group">
                        <label for="cardNumber">رقم البطاقة</label>
                        <input type="text" wire:model="cardNumber" class="form-control {{ $errors->has('cardNumber') ? 'is-invalid' : '' }}" id="cardNumber" placeholder="">
                        {!!  $errors->has('cardNumber') ? "<span class='text-danger'>{$errors->first('cardNumber')}</span>" : ''  !!}
                    </div>


                    <div class="form-group">
                        <label for="cardExpiry">تاريخ الإنتهاء</label>
                        <div class="input-group">
                            <div class="col-md-6 mb-2">
                                <select wire:model="cardExpiryMonth" class="form-control{{ $errors->has('cardExpiryMonth') ? ' is-invalid' : '' }}" id="cardExpiryMonth">
                                    <option value="" selected>شهر</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                {!!  $errors->has('cardExpiryMonth') ? "<span class='text-danger'>{$errors->first('cardExpiryMonth')}</span>" : ''  !!}
                            </div>
                            <div class="col-md-6">
                                <select wire:model="cardExpiryYear" class="form-control {{ $errors->has('cardExpiryYear') ? ' is-invalid' : '' }}" id="cardExpiryYear">
                                    <option value="" selected>سنة</option>
                                    @php
                                        $currentYear = date('Y');
                                        $futureYears = 10;
                                    @endphp
                                    @for ($i = 0; $i <= $futureYears; $i++)
                                        <option value="{{ $currentYear + $i }}">{{ $currentYear + $i }}</option>
                                    @endfor
                                </select>
                                {!!  $errors->has('cardExpiryYear') ? "<span class='text-danger'>{$errors->first('cardExpiryYear')}</span>" : ''  !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cardCVC">رمز الحماية</label>
                        <input type="text" wire:model="cardCVC" class="form-control {{ $errors->has('cardCVC') ? 'is-invalid' : '' }}" id="cardCVC">
                        {!!  $errors->has('cardCVC') ? "<span class='text-danger'>{$errors->first('cardCVC')}</span>" : ''  !!}
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-black btn-lg px-5">ادفع الآن</button>
                    </div>

                </form>

                <div wire:loading  wire:target="makePayment">
                    <div class="text-center mt-1">
                        <svg
                            width="50px"
                            height="50px"
                            viewBox="0 0 100 100"
                            preserveAspectRatio="xMidYMid"
                            >
                            <circle
                                cx="50"
                                cy="50"
                                fill="none"
                                stroke="#007bff"
                                stroke-width="10"
                                r="35"
                                stroke-dasharray="164.93361431346415 56.97787143782138"
                                transform="rotate(126 50 50)"
                            >
                                <animateTransform
                                attributeName="transform"
                                type="rotate"
                                repeatCount="indefinite"
                                dur="1s"
                                keyTimes="0;1"
                                values="0 50 50;360 50 50"
                                ></animateTransform>
                            </circle>
                        </svg>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
