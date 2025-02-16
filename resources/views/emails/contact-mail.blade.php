<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ново запитване</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: linear-gradient(to bottom, #b01e45, #000);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            background: white;
            color: #333;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #b01e45;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #ddd;
        }

        .footer a {
            color: #b01e45;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="logo">
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/7PVvCwp/logo.png" alt="logo" border="0"></a>
        </div>

        <div class="content">
            <h2>Ново запитване от контактната форма</h2>
            <p><strong>Име:</strong> {{ $data['name'] }}</p>
            <p><strong>Имейл:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
            <p><strong>Телефон:</strong> <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></p>
            <p><strong>Съобщение:</strong></p>
            <p style="background: #f4f4f4; padding: 10px; border-left: 4px solid #b01e45; color: #333;">
                {{ $data['message'] }}
            </p>
        </div>

        <div class="footer">
            <p>PromoCars BG © {{ date('Y') }}</p>
            <p><a href="{{ url('/') }}">Посетете нашия сайт</a></p>
        </div>
    </div>

</body>

</html>
