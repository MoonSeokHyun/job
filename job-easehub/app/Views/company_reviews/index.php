<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기업 리뷰 - 잡허브</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f5f7fa;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .review-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }

        .review-card:hover {
            transform: translateY(-5px);
        }

        .review-card h3 {
            margin-top: 0;
            font-size: 20px;
            color: #0073e6;
        }

        .review-card p {
            margin: 10px 0;
            color: #444;
        }

        .ad-box {
            margin: 30px 0;
            text-align: center;
        }

        @media (max-width: 600px) {
            .review-card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php include APPPATH . 'Views/includes/header.php'; ?>

    <div class="container">
        <h1>기업 리뷰 목록</h1>

        <section class="info-section">
        <div class="ad-box">
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-6686738239613464"
                data-ad-slot="1204098626"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        </section>
        <!-- 리뷰 목록 출력 -->
        <?php if (!empty($reviews)): ?>
            <?php foreach ($reviews as $review): ?>
                <div class="review-card">
                    <h3><?= esc($review['Company Name (Korean)']) ?> (<?= esc($review['Company Name (English)']) ?>)</h3>
                    <p><strong>리뷰:</strong> <?= esc($review['review']) ?></p>
                    <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>리뷰가 아직 없습니다.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
