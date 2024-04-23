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
        h2,h1 {
            color: #333333;
            text-align: center;
        }
        p {
            color: #666666;
            text-align: center;
            margin-bottom: 20px;
        }
        .otp {
            font-size: 24px;
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
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
        <p>لإعادة تعيين كلمة المرور الخاصة بك، يرجى النقر على الرابط التالي:</p>
        <button class="otp">
            <a href="{{ route('password.reset', $token) }}" style="text-decoration: none; color: #ffffff; background-color: #007bff; padding: 10px 20px; border-radius: 5px;">إعادة تعيين كلمة المرور</a>
        </button>
        <p class="footer">تم إرسال هذا البريد الإلكتروني إليك كجزء من عملية إعادة تعيين كلمة المرور. إذا لم تطلب هذا، يمكنك تجاهل هذا البريد الإلكتروني.</p>
    </div>
</body>
</html>
