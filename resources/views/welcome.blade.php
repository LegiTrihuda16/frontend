<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP YPI Al-Huda Tasikmalaya</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            overflow: hidden;
        }
        .container {
            text-align: center;
            animation: fadeIn 2s, fadeOut 2s 5s; /* Adjust timing as needed */
        }
        .container img {
            max-width: 100%;
            height: auto;
            animation: zoomIn 2s, zoomOut 2s 5s; /* Adjust timing as needed */
        }
        .container h1 {
            font-family: Arial, sans-serif;
            margin-top: 20px;
            animation: slideIn 2s, slideOut 2s 5s; /* Adjust timing as needed */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        @keyframes zoomIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }
        @keyframes zoomOut {
            from { transform: scale(1); }
            to { transform: scale(0); }
        }
        @keyframes slideIn {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }
        @keyframes slideOut {
            from { transform: translateY(0); }
            to { transform: translateY(100%); }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('/img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
        <h1>SMP YPI AL-HUDA</h1>
        <h1>TASIKMALAYA</h1>
    </div>
</body>
</html>
