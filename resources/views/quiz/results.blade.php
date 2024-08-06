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
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('QuizAssets/css/style.css') }}">
    <!-- Custom CSS -->
    <style>
        .result-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .result-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .result-container p {
            font-size: 18px;
            color: #333;
        }
        .result-container .btn {
            margin-top: 20px;
        }
        .recommendation {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: left;
        }
    </style>
</head>
<body class="boxed-version">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="result-container">
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

                    <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery-js include -->
    <script src="{{ asset('QuizAssets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('QuizAssets/js/bootstrap.min.js') }}"></script>
</body>
</html>
