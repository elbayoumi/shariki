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
            <form wire:submit.prevent="submitForm" class="text-right">
                <!-- Question 1 -->
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 row">
                    <div class="text-gray-700 mt-2 text-sm col-8">أنا أبحث عن</div>
                    <div class="flex gap-4 col-4">
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="green">
                                <input wire:model='gender' type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-green-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-green-500 checked:before:bg-green-500 hover:before:opacity-10"
                                    id="green" value="male"/>
                                <span
                                    class="absolute text-green-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <span class="ml-2">شريكة حياتي</span>
                        </div>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="green">
                                <input wire:model='gender' type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-green-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-green-500 checked:before:bg-green-500 hover:before:opacity-10"
                                    id="green" value="female"/>
                                <span
                                    class="absolute text-green-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <span class="ml-2">شريك حياتي</span>
                        </div>
                    </div>
                </div>
                @if ($gender == 'male')
                <div class="flex items-center border-b border-teal-500 py-2 mb-1 justify-center">
                    <div>
                        <select wire:model="wife" class="block col-12 rounded-full border border-blue-gray-200 transition-all">
                            <option value="first">الزوجة الأولي</option>
                            <option value="second">الزوجة الثانية</option>
                            <option value="third">الزوجة الثالثة</option>
                            <option value="fourth">الزوجة الرابعة</option>
                        </select>
                    </div>
                </div>
                @endif
                <!-- Submit Button -->
                <div class="flex justify-center mt-2">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-200 mx-2"  wire:loading.remove>
                        التالي
                    </button>
                </div>
            </form>


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
