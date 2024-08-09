<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuesioner</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{ asset('QuizAssets/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            background: url("{{ asset('QuizAssets/images/bg.png') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Oswald', sans-serif;
            color: #333;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .result-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            position: relative;
        }
        .result-card img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .result-card h1 {
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .result-card p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .result-card .recommendation {
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            text-align: left;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .result-card .btn {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 50px;
            color: white;
            background-color: #007bff;
            border: none;
            text-transform: uppercase;
        }
        .result-card .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff6b6b;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="result-card">
            <button class="close-btn">&times;</button>
            <img src="{{ asset('QuizAssets/images/bg_1.png') }}" alt="Gambar Hasil">
            <h1>Hasil Kuesioner Anda</h1>
            <p>Total Skor Anda: <strong>{{ session('totalScore', 'Belum ada skor') }}</strong></p>
            
            <!-- Conditional recommendations based on score -->
            <div class="recommendation">
            @php
                $score = session('totalScore', 0);
                $recommendation = '';

                if ($score >= 0 && $score <= 4) {
                    $recommendation = 'Gejala depresi minimal atau tidak ada. Anda tampaknya tidak mengalami gejala depresi signifikan pada saat ini.';
                } elseif ($score >= 5 && $score <= 9) {
                    $recommendation = 'Gejala depresi ringan. Anda mungkin mengalami beberapa gejala depresi. Pertimbangkan untuk berbicara dengan seorang profesional untuk dukungan lebih lanjut.';
                } elseif ($score >= 10 && $score <= 14) {
                    $recommendation = 'Gejala depresi sedang. Gejala depresi Anda lebih jelas. Konsultasikan dengan profesional kesehatan mental untuk mendapatkan bantuan yang lebih intensif.';
                } elseif ($score >= 15 && $score <= 19) {
                    $recommendation = 'Gejala depresi berat. Anda mungkin mengalami gejala depresi yang signifikan. Segera hubungi seorang profesional untuk mendapatkan dukungan yang diperlukan.';
                } elseif ($score >= 20 && $score <= 27) {
                    $recommendation = 'Gejala depresi sangat berat. Anda mungkin mengalami gejala depresi yang sangat parah. Segera cari bantuan dari seorang profesional untuk dukungan dan perawatan yang mendalam.';
                }
            @endphp
                <p>{{ $recommendation }}</p>
            </div>

            <a href="{{ url('/') }}" class="btn">Kembali ke Beranda</a>
        </div>
    </div>

    <!-- jQuery-js include -->
    <script src="{{ asset('QuizAssets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('QuizAssets/js/bootstrap.min.js') }}"></script>
</body>
</html>
