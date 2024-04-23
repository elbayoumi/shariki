<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 150px;
            margin: 0 auto 20px;
            display: block;
        }
        h1, h2 {
            color: #333333;
            text-align: center;
        }
        p {
            color: #666666;
            text-align: center;
            margin-bottom: 20px;
        }
        .otp-button {
            text-align: center;
        }
        .otp-button a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .otp-button a:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            color: #999999;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/SHARIKI_LOGO-removebg-preview.png') }}" alt="الشعار" class="logo">
        <h1>إعادة تعيين كلمة المرور</h1>
        <p>الرجاء استخدام الرابط التالي لإعادة تعيين كلمة المرور:</p>
        <div class="otp-button">
            <a href="{{ route('password.reset.token', $token) }}">إعادة تعيين كلمة المرور</a>
        </div>
        <p class="footer">تم إرسال هذا البريد الإلكتروني إليك كجزء من عملية إعادة تعيين كلمة المرور. إذا لم تطلب هذا، يمكنك تجاهل هذا البريد الإلكتروني.</p>
    </div>
</body>
</html>
