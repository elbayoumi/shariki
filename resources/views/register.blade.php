<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/regAndLogin.css">
    <link href="/img/SHARIKI_LOGO-removebg-preview.png" rel="icon">
    <title>shariki</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="/termsAndConditions.html" >
                <a href="index.html">
                    <img src="./img/SHARIKI_LOGO-removebg-preview.png" width="50px" alt="" srcset="">
                </a>
                <h1>
                    مرحبا بك

                </h1>
                <input type="text" placeholder="اسمك">
                <input type="email" placeholder="البريد الالكتروني">
                <input type="password" placeholder="كلمة السر">
                <button type="submit">تسجيل دخول</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/termsAndConditions.html"  >
                <h1>دخول</h1>
                <input type="email" placeholder="البريد الالكتروني">
                <input type="password" placeholder="كلمة السر">
                <a href="#">→ نسيت كلمة السر ←</a>
                <button type="submit"> دخول</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left bg-main">
                    <h1>اهلا بعودتك</h1>
                    <p>تفضل بالدخول لمعرفة إشعاراتك </p>
                    <button  class="hidden overlay-btn" id="login">دخول</button>
                </div>
                <div class="toggle-panel toggle-right bg-main ">

                    <h1>مرحبا بك </h1>

                    <!-- <h1>مرحبا بك </h1> -->
                    <p>ليس لديك حساب في منصة شريكي </p>
                    <button class="hidden overlay-btn" id="register">سجل دخولك</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/regAndLogin.js"></script>
</body>

</html>
