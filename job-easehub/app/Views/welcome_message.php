<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기업 리뷰 사이트</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            font-size: 2.5em;
            margin: 0;
        }
        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?business,technology');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero h2 {
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
        .container {
            padding: 40px 20px;
            text-align: center;
        }
        .reviews {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .review-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            padding: 20px;
            text-align: left;
            transition: transform 0.3s ease;
        }
        .review-card:hover {
            transform: scale(1.05);
        }
        .review-card img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: cover;
        }
        .review-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .review-card p {
            font-size: 1em;
            color: #666;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>기업 리뷰 사이트</h1>
    </header>

    <div class="hero">
        <h2>당신이 원하는 기업 정보를 한 곳에서</h2>
    </div>

    <div class="container">
        <h2>기업 리뷰</h2>
        <p>각 기업에 대한 리뷰를 확인하고, 여러분의 의견을 나누어 보세요.</p>

        <div class="reviews">
            <div class="review-card">
                <img src="https://via.placeholder.com/60" alt="Reviewer 1">
                <h3>기업 A</h3>
                <p>"매우 유연한 근무 환경과 직원 복지가 뛰어난 기업입니다."</p>
            </div>
            <div class="review-card">
                <img src="https://via.placeholder.com/60" alt="Reviewer 2">
                <h3>기업 B</h3>
                <p>"업무는 까다롭지만 성장할 수 있는 기회가 많습니다."</p>
            </div>
            <div class="review-card">
                <img src="https://via.placeholder.com/60" alt="Reviewer 3">
                <h3>기업 C</h3>
                <p>"팀워크가 뛰어난 기업이며 직원들의 의견을 존중합니다."</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 기업 리뷰 사이트 | All Rights Reserved</p>
    </footer>

</body>
</html>
