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
    <title>shariki</title>
</head>

<body class="bg-gray-100 flex justify-center items-center">
    <div class="container bg-white shadow-lg rounded-lg">
        <h1 class="text-9xl" >
            429
        </h1>
        <p class="text-gray-600">عذرًا، قمت بعمل طلبات كثيرة جدًا. يرجى المحاولة مرة أخرى لاحقًا</p>
        <hr class="w-64 h-1 bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="toggle-container">
            <a href="{{ route('home') }}" class="overlay-btn block mx-auto mt-2">
                <button class="overlay-btn block mx-auto mt-2">الصفحة الرئيسية</button>
            </a>
        </div>
    </div>


    <script src="./js/regAndLogin.js"></script>
</body>

</html>
