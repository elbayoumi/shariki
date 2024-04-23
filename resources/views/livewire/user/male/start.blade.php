@section('title','البيانات الشخصية')
<div class="w-full px-6 py-6 mx-auto">
    <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-3">
        <div class="text-center mb-1">
            <h2 class="text-xl font-bold text-gray-800">البيانات الشخصية</h2>
            </h2>
        </div>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="row p-2">
            <div class="col-12 col-md-6 offset-md-3 mt-2 text-center">
                <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden relative p-4">
                    <div class="p-4 mt-4">
                        <hr class="h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
            @if ($step == 1)
            <!-- Question 1 -->
            <form wire:submit.prevent="submitName">
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4">
                        <div class="inline-flex items-center text-center">
                            <input type="text" wire:model="first_name" class="rounded-full border w-full border-blue-gray-200 @error('first_name') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="الإسم الأول">
                            <input type="text" wire:model="father_name" class="rounded-full border w-full border-blue-gray-200 @error('father_name') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="اسم الأب">
                            <input type="text" wire:model="grandfather_name" class="rounded-full border w-full border-blue-gray-200 @error('grandfather_name') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="اسم الجد">
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4">
                        <div class="inline-flex items-center text-center">
                            <input type="text" wire:model="tribe" class="rounded-full border w-full border-blue-gray-200 @error('tribe') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="القبيـلة">
                        </div>
                    </div>
                </div>
                <div class="inline-flex items-center mt-3">
                    <button type="submit" class="flex items-center justify-center w-8 h-8 rounded-full border border-green-500 text-green-500 hover:bg-green-100 focus:outline-none">
                        <span class="bx bx-check"></span>
                    </button>
                </div>
            </form>
            @endif

            @if ($step == 2)
            <!-- Question 2 -->
            <form wire:submit.prevent="submitMobile">
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4">
                        <div class="inline-flex items-center text-center">
                            <input type="number" wire:model="mobile" class="rounded-full border w-full border-blue-gray-200 @error('phone') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="رقم الهاتف">
                            </div>
                    </div>
                </div>
                <div class="inline-flex items-center mt-3">
                    <button type="submit" class="flex items-center justify-center w-8 h-8 rounded-full border border-green-500 text-green-500 hover:bg-green-100 focus:outline-none">
                        <span class="bx bx-check"></span>
                    </button>
                </div>
            </form>
            @endif

            @if ($step == 3)
            <!-- Question 3 -->
            <form wire:submit.prevent="submitBilling">
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4 justify-center w-full">
                        <div class="inline-flex items-center text-center">
                            <p class="text-blue-gray-500 text-sm">تاريخ الميلاد</p>
                            <input type="date" wire:model="dob" class="rounded-full border border-blue-gray-200 @error('dob') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="تاريخ الميلاد">
                        </div>
                    </div>
                </div>
                <div class="flex text-right border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4 justify-center w-full">
                        <div class="inline-flex items-center text-right">
                            <input type="text" wire:model="pob_country" class="rounded-full border border-blue-gray-200 @error('pob_country') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="دولة الميلاد">
                        </div>
                    </div>
                </div>
                <div class="flex text-right border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4 justify-center w-full">
                        <div class="inline-flex items-center text-right">
                            <input type="text" wire:model="pob_city" class="rounded-full border border-blue-gray-200 @error('pob_city') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="ولاية\مدينة الميلاد">
                        </div>
                    </div>
                </div>
                <div class="flex text-right border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4 justify-center w-full">
                        <div class="inline-flex items-center text-right">
                            <input type="text" wire:model="address_country" class="rounded-full border border-blue-gray-200 @error('address_country') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="دولة الإقامة">
                        </div>
                    </div>
                </div>
                <div class="flex text-right border-b border-teal-500 py-2 mb-1 row">
                    <div class="flex gap-4 justify-center w-full">
                        <div class="inline-flex items-center text-right">
                            <input type="text" wire:model="address_city" class="rounded-full border border-blue-gray-200 @error('address_city') border-rose-400 @enderror transition-all focus:outline-none focus:border-blue-500 px-3 py-1 w-32" placeholder="ولاية\مدينة الإقامة">
                        </div>
                    </div>
                </div>
                <div class="inline-flex items-center mt-3">
                    <button type="submit" class="flex items-center justify-center w-8 h-8 rounded-full border border-green-500 text-green-500 hover:bg-green-100 focus:outline-none">
                        <span class="bx bx-check"></span>
                    </button>
                </div>
            </form>
            @endif
                <!-- Submit Button -->
                {{-- <div class="flex justify-center mt-3">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-200 mx-2"  wire:loading.remove>
                        التالي
                    </button>
                </div> --}}

            <img src="{{ asset('img/loading.gif') }}" width="50" wire:loading>
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
