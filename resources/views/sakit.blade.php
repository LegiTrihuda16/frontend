<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakit</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #A9A9A9;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #228B22;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .sakit-button {
            padding: 15px 30px;
            background-color: #228B22;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px;
        }
        .footer {
            text-align: right;
            padding: 20px;
        }
        .text-area {
            width: 80%;
            height: 100px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div>
            <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
            <h2>SMP YPI AL-HUDA</h2>
            <p>Legi Trihuda Mustaqim<br>2103010098</p>
        </div>
        <div>
            <p>26 Mar 2024<br>16:30:29 PM</p>
        </div>
    </div>
    <div class="content">
        <button class="sakit-button">sakit</button>
        <textarea class="text-area" placeholder="Keterangan sakit :"></textarea>
    </div>
    <div class="footer">
        <button class="sakit-button">Selesai</button>
    </div>
</body>
</html>
