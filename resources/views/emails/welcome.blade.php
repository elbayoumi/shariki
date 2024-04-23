<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحقق من الرمز السري المؤقت</title>
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
        <h1>مرحبا بك</h1>
        <p>الرجاء استخدام الرمز السري المؤقت التالي للتحقق من عنوان بريدك الإلكتروني:</p>
        <p class="otp">{{ $otp_code }}</p>
        <p class="footer">تم إرسال هذا البريد الإلكتروني إليك كجزء من عملية التحقق من الرمز السري المؤقت. إذا لم تطلب هذا، يمكنك تجاهل هذا البريد الإلكتروني.</p>
    </div>
</body>
</html>
