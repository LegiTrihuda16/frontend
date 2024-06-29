<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
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
            /* justify-content: space-around; */
            align-items: center;
            border-radius: 10px 10px 0 0;
            
        }
        .header img {
            max-height: 50px;
        }
        /* /* .header {
            font-size: 24px;
            font-weight: bold;
            text-align :center;
            align-items:center;
            position: center; 
        } */
        .header .title{
            margin-left: 35%;
            font-size: 24px;
            font-weight: bold;
            text-align :center;
            align-items:center;
            position: center;
        }
        .header .profile {
            font-size: 24px;
        }
        
        .biodata-container {
            margin: 50px;
        }
        .biodata-container img {
            width: 150px;
            height: 200px;
            background-color: red;
        }
        .biodata-container .data-row {
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
            <div class="title">SMP YPI AL-HUDA</div>
            
            
        </div>
    <div class="biodata-container">
        <h4>Biodata</h4>
        <div>
        <img src="{{ asset('img/Legi.JPG') }}" alt="SMP YPI Al-Huda Tasikmalaya">
        </div>
        <div class="data-row">
            <strong>Nama: Legi trihuda Mustaqim </strong>
        </div>
        <div class="data-row">
            <strong>NPM: 2103010098 </strong>
        </div>
        <div class="data-row">
            <strong>Alamat: Jl.Babakan Selakaso </strong>
        </div>
        <div class="data-row">
            <strong>Agama: Islam </strong>
        </div>
        <div class="data-row">
            <strong>No HP: 089638466848 </strong>
        </div>
        <div class="data-row">
            <strong>Status: Aktif </strong>
        </div>
        <button onclick="window.history.back()" class="btn btn-primary">Kembali</button>
    </div>
</body>
</html>
