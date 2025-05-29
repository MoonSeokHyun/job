<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>잡허브 - 검색 결과</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            color: #333;
        }

        .hero {
            background-color: #283593;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
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
            justify-items: center; /* 중앙 정렬 */
        }

        .review-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 320px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            margin: 0 auto;
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
            color: #283593;
            cursor: pointer;
        }

        .review-card p {
            font-size: 1em;
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .review-card a {
            text-decoration: none;
        }

        .no-results {
            font-size: 1.2em;
            color: #999;
            padding: 20px;
            border-radius: 8px;
            background-color: #f1f1f1;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2em;
            }

            .reviews {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

    <div class="hero">
        <h2>검색 결과</h2>
        <p>검색어: <strong><?= esc($searchQuery) ?></strong></p>
    </div>
    <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

    <div class="container">
        <h2>검색된 기업들</h2>
        <div class="reviews">
            <?php if (!empty($companies)): ?>
                <?php foreach ($companies as $company): ?>
                    <div class="review-card">
                        <div style="display: flex; align-items: center;">
                            <img src="https://via.placeholder.com/60" alt="Company Logo">
                            <a href="/company/<?= esc($company['id']) ?>"><h3><?= esc($company['Company Name (Korean)']) ?></h3></a>
                        </div>
                        <p><?= esc($company['One-liner Description']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-results">
                    <p>검색된 기업이 없습니다.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
