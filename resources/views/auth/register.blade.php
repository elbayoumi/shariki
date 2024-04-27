<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('./css/regAndLogin.css')}}">
    <link href="/img/SHARIKI_LOGO-removebg-preview.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/regAndLogin.css') }}" rel="stylesheet">
    <title>شريكي - تسجيل حساب جديد</title>
</head>

<body class="bg-gray-100 flex justify-center items-center">
    <div class="container bg-white shadow-lg rounded-lg">
        <form method="POST" action="" class="max-w-sm mx-auto">
            @csrf
            <h1 class="text-center text-2xl mb-4">مرحبا بك</h1>
            @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-3 py-2 rounded text-sm text-right mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @session('success')
            <div class="bg-green-50 border border-green-200 text-green-700 px-3 py-2 rounded text-sm text-right mb-4" role="alert">
                <ul>
                    <li>{{ session('success') }}</li>
                </ul>
            </div>
            @endsession

            <input type="name" placeholder="البريد الالكتروني" name="email" value="{{ old('email') }}" class="w-full mb-4 px-4 py-2 rounded-md border @error('email') border border-red-300 @enderror focus:outline-none focus:border-indigo-500 text-right">
            <input type="password" placeholder="كلمة السر" name="password" class="w-full mb-4 px-4 py-2 rounded-md border @error('password') border border-red-300 @enderror focus:outline-none focus:border-indigo-500 text-right">
            <select name="gender" class="w-full mb-4 px-4 py-2 rounded-md border @error('gender') border border-red-300 @enderror focus:outline-none focus:border-indigo-500 text-right">
                <option value="">اختر الجنس</option>
                <option value="male" @if(old('gender') == 'male') selected @endif class="text-right">ذكر</option>
                <option value="female" @if(old('gender') == 'female') selected @endif class="text-right">أنثى</option>
            </select>
            <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md focus:outline-none focus:bg-indigo-600"> تسجيل</button>
        </form>
        <hr class="w-64 h-1 bg-gradient-to-r from-transparent via-black/40 to-transparent mt-6" />
        <div class="toggle-container mt-4">
            <p class="text-center"> لديك حساب في منصة شريكي</p>
            <a href="{{ route('login') }}"><button class="overlay-btn block mx-auto mt-2">تسجيل الدخول</button></a>
        </div>
    </div>

    <script src="./js/regAndLogin.js"></script>
</body>

</html>
