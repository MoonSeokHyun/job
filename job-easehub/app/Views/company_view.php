<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>잡허브 - 기업 리뷰 사이트</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --theme-color: #FADB5F; /* 파스텔 노랑 */
            --theme-text: #333;
            --card-bg: #FFFBEA;
            --hover-bg: #FFF3C4;
            --font: 'Segoe UI', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font);
            background-color: #fffef7;
            color: var(--theme-text);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .hero {
            background-color: #62D491;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .search-bar {
            margin-top: 20px;
            padding: 10px;
            width: 80%;
            max-width: 400px;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar:focus {
            outline: none;
            border: 2px solid #3e8e41;
        }

        .container {
            padding: 40px 20px;
            text-align: center;
        }

        .reviews {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 30px;
            justify-items: center; /* 카드 중앙 정렬 */
        }

        .review-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            max-width: 320px; /* 카드 크기 제한 */
        }

        .review-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .review-card img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
        }

        .review-card h3 {
            font-size: 1.3em;
            margin: 10px 0;
            color: #3e8e41;
        }

        .review-card p {
            font-size: 1em;
            color: #666;
            line-height: 1.5;
        }

        /* Flexbox for the '활용 대상' section */
        .utilization-section {
            padding: 2rem 1rem;
            background-color: #f8fafc;
        }

        .utilization-card {
            flex: 1 1 200px;
            background: #fff;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            text-align: center;
        }

        .utilization-card div {
            font-size: 1.5rem;
        }

        .utilization-card .title {
            margin-top: 8px;
            font-weight: bold;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2em;
            }

            .reviews {
                grid-template-columns: 1fr; /* 작은 화면에서는 한 열로 표시 */
                gap: 15px;
            }

            .review-card {
                max-width: 100%; /* 모바일에서 카드 크기 가변적 */
                padding: 15px;
            }
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 1.8em;
            }

            .search-bar {
                width: 90%;
                max-width: 350px;
            }

            .utilization-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

<?php include '/Users/munseoghyeon/Desktop/park/job/job-easehub/app/Views/includes/header.php'; ?>

    <div class="hero">
        <h2>당신이 원하는 스타트업 정보를 한 곳에서</h2>
        <form action="/search" method="get">
            <input type="text" name="search_query" class="search-bar" placeholder="기업 이름을 검색해보세요!" id="searchInput">
            <button type="submit" style="display: none;">Search</button> <!-- Hidden submit button for form -->
        </form>
    </div>

    <div class="container">
        <h2>스타트업 및 대기업 리뷰</h2>
        <p>각 기업에 대한 리뷰를 확인하고, 여러분의 의견을 나누어 보세요.</p>

        <div class="reviews" id="reviewsContainer" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
    <!-- Sample Review Cards -->
    <div class="review-card" style="max-width: 320px;">
        <div style="display: flex; align-items: center;">
            <h3>기업 A</h3>
        </div>
        <p>"매우 유연한 근무 환경과 직원 복지가 뛰어난 기업입니다."</p>
    </div>
    <div class="review-card" style="max-width: 320px;">
        <div style="display: flex; align-items: center;">
            <h3>기업 B</h3>
        </div>
        <p>"업무는 까다롭지만 성장할 수 있는 기회가 많습니다."</p>
    </div>
    <div class="review-card" style="max-width: 320px;">
        <div style="display: flex; align-items: center;">
            <h3>기업 C</h3>
        </div>
        <p>"팀워크가 뛰어난 기업이며 직원들의 의견을 존중합니다."</p>
    </div>
</div>

        <!-- 활용 대상 Section -->
        <section class="utilization-section">
            <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">👥 활용 대상</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center;">
                <div class="utilization-card">
                    <div>🇰🇷</div>
                    <div class="title">대한민국 국민 누구나!</div>
                </div>
                <div class="utilization-card">
                    <div>🏛️</div>
                    <div class="title">공공기관은 정책 자료로</div>
                </div>
                <div class="utilization-card">
                    <div>📊</div>
                    <div class="title">기업은 입지 선정 및 분석에</div>
                </div>
                <div class="utilization-card">
                    <div>🙋</div>
                    <div class="title">시민은 정보 검색에 활용</div>
                </div>
            </div>
        </section>
    </div>

<?php include '/Users/munseoghyeon/Desktop/park/job/job-easehub/app/Views/includes/footer.php'; ?>

<script>
    // Example search functionality
    document.getElementById('searchInput').addEventListener('input', function(event) {
        let query = event.target.value.toLowerCase();
        let reviews = document.querySelectorAll('.review-card');
        
        reviews.forEach(function(card) {
            let companyName = card.querySelector('h3').textContent.toLowerCase();
            if (companyName.includes(query)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>
