@extends('User.layouts.app')
@section('title', 'الصفحة الرئيسية')

@section('content')
<div class="row p-2">
    @if ($request)
    <div class="col-12 col-md-6 offset-md-3 mt-2 text-center">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden relative p-4">
            <div class="absolute mt-2 top-0 left-1/2 transform -translate-x-1/2 bg-yellow-500 w-8 h-8 rounded-full border-2 border-white flex items-center justify-center">
                <div class="bg-white w-6 h-6 rounded-full">
                    <i class='bx bxs-hourglass mt-1 text-yellow-500'></i>
                </div>
            </div>
            <div class="p-4 mt-4">
                <h2 class="text-lg font-semibold">الطلب رقم {{ "M-".$request->id }}</h2>
                <small class="text-gray-600">تم الإنشاء منذ {{ $request->created_at->diffforhumans() }}</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 offset-md-3 mt-4 text-center">
        <a href="">
        <button class="bg-yellow-500 text-white px-6 py-3 rounded-full hover:bg-yellow-600 transition-colors">عرض المعلومات الكاملة</button>
        </a>
    </div>
    @else
    <div class="col-12 col-md-6 offset-md-3 mt-2 text-center">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden relative p-4">
            <div class="absolute mt-2 top-0 left-1/2 transform -translate-x-1/2 bg-rose-400 w-8 h-8 rounded-full border-2 border-white flex items-center justify-center">
                <div class="bg-white w-6 h-6 rounded-full">
                    <i class="bx bx-x text-rose-400 mt-1"></i>
                </div>
            </div>
            <div class="p-4 mt-4">
                <h2 class="text-lg font-semibold">لم يتم إنشاء طلب بعد</h2>
                <small class="text-gray-600">يمكنك إنشاء طلب جديد من خلال الضغط على الزر أدناه</small>
            </div>
        </div>
        <a href="">
            <button class="border border-yellow-500 text-white px-6 py-3 mt-3 rounded-full hover:bg-yellow-500 transition-colors">إنشاء طلب جديد</button>
        </a>
    @endif
</div>




@endsection
