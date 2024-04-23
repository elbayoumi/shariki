@extends('User.layouts.app')
@section('title', 'الصفحة الرئيسية')

@section('content')
<div class="row">
    <div class="col-4 mt-2">
        <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden relative ml-4">
            <div class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-green-500 w-6 h-6 rounded-full"></div>
            <div class="p-4">
                <h2 class="text-lg font-semibold">Card Title</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>

@endsection
