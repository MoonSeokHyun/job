<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($company['Company Name (Korean)']) ?> - 잡허브</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* 기본 스타일 */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fb;
            color: #333;
        }

        header {
            background-color: #2196F3;
            color: white;
            padding: 30px 20px;
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* 컨테이너 */
        .container {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        /* 섹션 제목 */
        .section-title {
            font-size: 2em;
            font-weight: bold;
            color: #2196F3;
            margin-bottom: 30px;
            text-align: center;
        }

        /* 기업 정보 카드 */
        .company-info {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .company-name {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 15px;
        }

        .info-section {
            margin-bottom: 20px;
        }

        .info-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #2196F3;
        }

        .info-section p {
            font-size: 1.1em;
            margin: 8px 0;
            color: #555;
        }

        .info-section a {
            color: #2196F3;
            text-decoration: none;
        }

        .info-section a:hover {
            text-decoration: underline;
        }

        /* 리뷰 탭 */
        .tabs {
            display: flex;
            margin-bottom: 30px;
            justify-content: center;
        }

        .tabs div {
            padding: 12px 30px;
            background-color: #f4f7fb;
            border-radius: 5px 5px 0 0;
            font-size: 1.2em;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .tabs div:hover, .tabs .active {
            background-color: #2196F3;
            color: white;
        }

        /* 리뷰 카드 */
        .reviews {
            display: none;
        }

        .reviews.active {
            display: block;
        }

        .review-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .review-card h3 {
            font-size: 1.5em;
            color: #2196F3;
            margin-bottom: 15px;
        }

        .review-card p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #666;
        }

        /* 별점 */
        .star-rating {
            display: flex;
            justify-content: center;
            font-size: 2em;
            color: #ddd;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .star-rating .fa-star {
            transition: color 0.2s ease;
        }

        .star-rating .fa-star:hover,
        .star-rating .fa-star.selected {
            color: #2196F3;
        }

        /* 폼 */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        form textarea,
        form input[type="number"],
        form select,
        form button {
            width: 100%;
            padding: 15px;
            margin: 12px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1.1em;
        }

        form button {
            background-color: #2196F3;
            color: white;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #1976D2;
        }

        footer {
            background-color: #2196F3;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 1.1em;
            margin-top: 40px;
        }

        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .company-info {
                padding: 15px;
            }

            .company-name {
                font-size: 2em;
            }

            .info-title {
                font-size: 1.3em;
            }

            .info-section p {
                font-size: 1em;
            }

            .review-card {
                padding: 15px;
            }

            .tabs div {
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php include APPPATH . 'Views/includes/header.php'; ?>

    <div class="container">
        <!-- Company Info Section -->
        <div class="company-info">
            <h2 class="company-name"><?= esc($company['Company Name (Korean)']) ?> - <?= esc($company['Company Name (English)']) ?></h2>

            <div class="info-section">
                <h3 class="info-title">기업 정보</h3>
                <p><strong>설립일:</strong> <?= esc($company['Establishment Date']) ?></p>
                <p><strong>업종:</strong> <?= esc($company['Industry Classification']) ?></p>
                <p><strong>직원 수:</strong> <?= esc($company['Number of Employees']) ?>명</p>
                <p><strong>설명:</strong> <?= esc($company['One-liner Description']) ?></p>
                <p><strong>상세 설명:</strong> <?= esc($company['Detailed Company Description']) ?></p>
            </div>

            <div class="info-section">
                <h3 class="info-title">연락처 및 링크</h3>
                <p><strong>웹사이트:</strong> <a href="<?= esc($company['Website URL']) ?>" target="_blank"><?= esc($company['Website URL']) ?></a></p>
                <p><strong>소셜 미디어:</strong> <a href="<?= esc($company['Social Media URL']) ?>" target="_blank"><?= esc($company['Social Media URL']) ?></a></p>
                <p><strong>사무실 주소:</strong> <?= esc($company['Office Address']) ?></p>
            </div>
        </div>

        <!-- Tabs for Reviews -->
        <div class="tabs">
            <div class="tab-link active" id="company-tab">기업 리뷰</div>
            <div class="tab-link" id="interview-tab">면접 리뷰</div>
        </div>

        <!-- Company Review Form and Display -->
        <div class="reviews active" id="company-review">
            <h2>기업 리뷰 작성</h2>
            <form action="/company/<?= esc($company['id']) ?>/addCompanyReview" method="POST">
                <textarea name="review" placeholder="리뷰를 작성해 주세요..." rows="4" required></textarea><br>
                <label for="rating">별점 (1~5): </label>
                <div class="star-rating">
                    <i class="fa fa-star" data-rating="1"></i>
                    <i class="fa fa-star" data-rating="2"></i>
                    <i class="fa fa-star" data-rating="3"></i>
                    <i class="fa fa-star" data-rating="4"></i>
                    <i class="fa fa-star" data-rating="5"></i>
                </div>
                <input type="hidden" name="rating" id="rating-input" required><br>
                <button type="submit">리뷰 작성</button>
            </form>

            <h2>기업 리뷰</h2>
            <?php foreach ($companyReviews as $review): ?>
                <div class="review-card">
                    <h3>리뷰</h3>
                    <p><?= esc($review['review']) ?></p>
                    <p class="rating"><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Interview Review Form and Display -->
        <div class="reviews" id="interview-review">
            <h2>면접 리뷰 작성</h2>
            <form action="/company/<?= esc($company['id']) ?>/addInterviewReview" method="POST">
                <textarea name="review" placeholder="리뷰를 작성해 주세요..." rows="4" required></textarea><br>
                <label for="rating">별점 (1~5): </label>
                <div class="star-rating">
                    <i class="fa fa-star" data-rating="1"></i>
                    <i class="fa fa-star" data-rating="2"></i>
                    <i class="fa fa-star" data-rating="3"></i>
                    <i class="fa fa-star" data-rating="4"></i>
                    <i class="fa fa-star" data-rating="5"></i>
                </div>
                <input type="hidden" name="rating" id="interview-rating-input" required><br>

                <label for="review_type">리뷰 유형:</label>
                <select name="review_type" required>
                    <option value="interview">면접</option>
                    <option value="employee">직원</option>
                </select><br>
                <button type="submit">리뷰 작성</button>
            </form>

            <h2>면접 리뷰</h2>
            <?php foreach ($interviewReviews as $review): ?>
                <div class="review-card">
                    <h3><?= esc($review['review_type'] == 'interview' ? '면접 리뷰' : '직원 리뷰') ?></h3>
                    <p><?= esc($review['review']) ?></p>
                    <p class="rating"><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script>
        const stars = document.querySelectorAll('.star-rating .fa-star');
        const ratingInput = document.getElementById('rating-input');
        const interviewRatingInput = document.getElementById('interview-rating-input');

        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                const rating = star.getAttribute('data-rating');
                updateStars(rating);
            });

            star.addEventListener('mouseout', () => {
                const rating = ratingInput.value || interviewRatingInput.value;
                updateStars(rating);
            });

            star.addEventListener('click', () => {
                const rating = star.getAttribute('data-rating');
                ratingInput.value = rating;
                interviewRatingInput.value = rating;
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                const starRating = star.getAttribute('data-rating');
                if (starRating <= rating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }

        // Tab Switching Logic
        const companyTab = document.getElementById('company-tab');
        const interviewTab = document.getElementById('interview-tab');
        const companyReview = document.getElementById('company-review');
        const interviewReview = document.getElementById('interview-review');

        companyTab.addEventListener('click', () => {
            companyTab.classList.add('active');
            interviewTab.classList.remove('active');
            companyReview.classList.add('active');
            interviewReview.classList.remove('active');
        });

        interviewTab.addEventListener('click', () => {
            interviewTab.classList.add('active');
            companyTab.classList.remove('active');
            interviewReview.classList.add('active');
            companyReview.classList.remove('active');
        });
    </script>
    <?php include APPPATH . 'Views/includes/footer.php'; ?>
</body>
</html>
