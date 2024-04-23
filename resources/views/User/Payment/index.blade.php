@extends('User.layouts.app')

@section('content')

<header class="header">
    <h1 class="header__title title">الدفع</h1>
</header>

<div class="content mini_title">
    <div class="content__inner mini-title">
        <div class="container overflow-hidden">
            <div class="multisteps-form title">
                <div class="row">
                    <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                        <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">تطبيق كود الخصم</button>
                            <button class="multisteps-form__progress-btn" type="button" title="User Info">عملية الدفع</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form id="payment-form" class="multisteps-form__form" action="/payment" method="post">
                            @csrf
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                                <h3 class="multisteps-form__title title text-center">تطبيق كود الخصم</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mx-auto">
                                            <input class="multisteps-form__input form-control" name="coupon_code" type="text" placeholder="كود الخصم">
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col text-center">
                                            <button class="btn js-btn-next title" type="button" title="Next">التالي</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title title text-center">عملية الدفع</h3>
                                <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6 mx-auto">
                                            <div id="card-element"></div>
                                            <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col text-center">
                                            <button id="card-button" class="btn js-btn-next title" type="button" title="Pay">دفع</button>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <div class="alert alert-success mt-3" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger mt-3" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const cardButton = document.getElementById('card-button');
    const paymentForm = document.getElementById('payment-form');

    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();

        const { paymentMethod, error } = await stripe.createPaymentMethod('card', cardElement);

        if (error) {
            const cardErrors = document.getElementById('card-errors');
            cardErrors.textContent = error.message;
        } else {
            const tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'stripeToken');
            tokenInput.setAttribute('value', paymentMethod.id);
            paymentForm.appendChild(tokenInput);

            // Submit the form
            paymentForm.submit();
        }
    });
</script>

@endsection
