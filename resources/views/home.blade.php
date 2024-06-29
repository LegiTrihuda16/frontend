<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SMP YPI Al-Huda Tasikmalaya</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width:100%;
            height:95%;
            max-width: 1200px;
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
        }
        .header {
            background-color: #2e7d32;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px 10px 0 0;
        }
        .header img {
            max-height: 50px;
        }
        .header .title {
            font-size: 24px;
            font-weight: bold;
        }
        .header .profile {
            font-size: 24px;
        }
        .content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .content .section {
            background-color: #2e7d32;
            color: white;
            padding: 20px;
            border-radius: 10px;
            flex: 1;
            margin: 100px 50px  10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .footer .button {
            background-color: #2e7d32;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 25%;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer .button:hover {
            background-color: #1b5e20;
        }
    </style>
    <script>
        function checkIn() {
            const now = new Date();
            const timeString = now.toTimeString().split(' ')[0];
            document.getElementById('absenMasuk').innerText = timeString;
            document.getElementById('absenMasukButton').disabled = true;

            fetch('/checkin', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ checkInTime: timeString })
            }).then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
        }

        function checkOut() {
            const now = new Date();
            const timeString = now.toTimeString().split(' ')[0];
            document.getElementById('absenPulang').innerText = timeString;
            document.getElementById('absenPulangButton').disabled = true;

            fetch('/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ checkOutTime: timeString })
            }).then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
            <div class="title">SMP YPI AL-HUDA</div>
            <button><a href="biodata"><div>👤</div></a></button>
        </div>
        <div class="content">
            <div class="section">
                <div>⏰ 07.00</div>
                <div>📅 26-03-2024</div>
            </div>
            <div class="section">
                <div>Absen Masuk</div>
                <div id="absenMasuk">Belum Absen</div>
            </div>
            <div class="section">
                <div>Absen Pulang</div>
                <div id="absenPulang">Belum Absen</div>
            </div>
        </div>
        <div class="footer">
            <div class="button" id="absenMasukButton" onclick="checkIn()">Absen Masuk</div>
            <div class="button" id="absenPulangButton" onclick="checkOut()">Absen Pulang</div>
            <div class="button">😊 Sakit</div>
            <div class="button">🙋 Izin</div>
        </div>
    </div>
</body>
</html>
