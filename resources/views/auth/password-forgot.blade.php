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
    <title>شريكي - نسيت كلمة المرور</title>
</head>

<body class="bg-gray-100 flex justify-center items-center">
    <div class="container bg-white shadow-lg rounded-lg">
        <form method="POST" action="" class="max-w-sm mx-auto">
            @csrf
            <h1 class="text-center text-2xl mb-4"> نسيت كلمة المرور</h1>
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
            <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md focus:outline-none focus:bg-indigo-600"> دخول</button>
            <a href="{{ route('login') }}" class="block text-center mb-4">→ تسجيل الدخول ←</a>
        </form>
    </div>


    <script src="./js/regAndLogin.js"></script>
</body>

</html>
