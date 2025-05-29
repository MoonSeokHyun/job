<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전체 면접 리뷰 - 잡허브</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Header -->
    <?php include APPPATH . 'Views/includes/header.php'; ?>

    <div class="container">
        <h1>전체 면접 리뷰 목록</h1>
        <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

        <!-- 전체 면접 리뷰 목록 출력 -->
        <?php if (!empty($interviewReviews)): ?>
            <?php foreach ($interviewReviews as $review): ?>
                <div class="review-card">
                    <h3><?= esc($review['Company Name (Korean)']) ?> (<?= esc($review['Company Name (English)']) ?>)</h3>
                    <p><strong>리뷰:</strong> <?= esc($review['review']) ?></p>
                    <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>면접에 대한 리뷰가 아직 없습니다.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
