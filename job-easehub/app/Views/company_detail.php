<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= esc($company['Company Name (Korean)']) ?> 기업 후기 면접 후기 기업정보는 - 잡허브</title>

    <!-- 메타 태그 최적화 -->
    <meta name="description" content="<?= esc($company['One-liner Description']) ?>" />
    <meta name="keywords" content="<?= esc($company['Company Name (Korean)']) ?>, 기업 리뷰, <?= esc($company['Industry Classification']) ?>, 잡허브" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?= esc($company['Company Name (Korean)']) ?> - 잡허브" />
    <meta property="og:description" content="<?= esc($company['One-liner Description']) ?>" />
    <meta property="og:url" content="<?= current_url() ?>" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= esc($company['Company Name (Korean)']) ?> - 잡허브" />
    <meta name="twitter:description" content="<?= esc($company['One-liner Description']) ?>" />
    <meta name="twitter:url" content="<?= current_url() ?>" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- 광고 스크립트 -->
    <script
      async
      src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464"
      crossorigin="anonymous"
    ></script>

    <!-- 스타일 -->
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
            color: #212121;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h2, h3 {
            color: #1a237e;
            margin-top: 0;
        }

        .company-name {
            font-size: 2.4rem;
            margin-bottom: 1rem;
            color: #0d47a1;
        }

        .info-section {
            margin-top: 2rem;
        }

        .info-title {
            font-size: 1.4rem;
            font-weight: bold;
            border-bottom: 2px solid #1a237e;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }

        .industry-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .industry-tag {
            background-color: #3949ab;
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.95rem;
        }

        .description p,
        .detailed-description p,
        .social-links p {
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin: 30px 0;
            gap: 20px;
        }

        .tabs .tab-link {
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 10px;
            background-color: #e3f2fd;
            color: #0d47a1;
            font-weight: bold;
            user-select: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .tabs .tab-link.active {
            background-color: #0d47a1;
            color: white;
        }

        .reviews {
            display: none;
        }

        .reviews.active {
            display: block;
        }

        .review-card {
            border: 1px solid #c5cae9;
            border-radius: 12px;
            padding: 20px;
            margin: 15px 0;
            background-color: #f5f5f5;
        }

        form {
            background-color: #e8eaf6;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        form textarea,
        form input,
        form select,
        form button {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #b0bec5;
            box-sizing: border-box;
        }

        form button {
            background-color: #1a237e;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0d47a1;
        }

        /* 반응형 */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                margin: 20px auto;
            }

            .tabs {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include APPPATH . 'Views/includes/header.php'; ?>

    <div class="container">
        <h2 class="company-name">
            <?= esc($company['Company Name (Korean)']) ?> - <?= esc($company['Company Name (English)']) ?>
        </h2>
        <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

        <section class="info-section">
            <h3 class="info-title">기업 정보</h3>
            <p><strong>설립일:</strong> <?= esc($company['Establishment Date']) ?></p>
            <p><strong>직원 수:</strong> <?= esc($company['Number of Employees']) ?>명</p>
            <div class="industry-tags">
                <?php foreach (explode('||', $company['Industry Classification']) as $industry): ?>
                    <span class="industry-tag"><?= esc(trim($industry)) ?></span>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="info-section">
            <h3 class="info-title">설명</h3>
            <div class="description">
                <?php foreach (explode('▦▦', $company['One-liner Description']) as $part): ?>
                    <p><?= esc(trim($part)) ?></p>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="info-section">
            <h3 class="info-title">상세 설명</h3>
            <div class="detailed-description">
                <?php foreach (explode('▦▦', $company['Detailed Company Description']) as $part): ?>
                    <p><?= esc(trim($part)) ?></p>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="info-section">
            <h3 class="info-title">사무실 주소</h3>
            <p><?= esc($company['Office Address']) ?></p>
        </section>

        <section class="info-section">
            <h3 class="info-title">연락처 및 링크</h3>
            <div class="social-links">
                <?php
                $social_links = explode('|', $company['Social Media URL']);
                foreach ($social_links as $link):
                    $link = esc(trim($link));
                    if ($link):
                ?>
                    <p><a href="<?= $link ?>" target="_blank" rel="noopener noreferrer"><?= $link ?></a></p>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </section>
        <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

        <div class="tabs" role="tablist" aria-label="리뷰 탭">
            <div class="tab-link active" id="company-tab" role="tab" tabindex="0" aria-selected="true" aria-controls="company-review">기업 리뷰</div>
            <div class="tab-link" id="interview-tab" role="tab" tabindex="-1" aria-selected="false" aria-controls="interview-review">면접 리뷰</div>
        </div>

        <section class="reviews active" id="company-review" role="tabpanel" aria-labelledby="company-tab">
            <form action="/company/<?= esc($company['id']) ?>/addCompanyReview" method="POST" aria-label="기업 리뷰 작성 폼">
                <textarea name="review" placeholder="리뷰를 작성해 주세요..." required aria-required="true"></textarea>
                <input type="number" name="rating" placeholder="별점 (1~5)" min="1" max="5" required aria-required="true" />
                <button type="submit">리뷰 작성</button>
            </form>

            <?php foreach ($companyReviews as $review): ?>
                <article class="review-card">
                    <h4>리뷰</h4>
                    <p><?= esc($review['review']) ?></p>
                    <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </article>
            <?php endforeach; ?>
        </section>

        <section class="reviews" id="interview-review" role="tabpanel" aria-labelledby="interview-tab" hidden>
            <form action="/company/<?= esc($company['id']) ?>/addInterviewReview" method="POST" aria-label="면접 리뷰 작성 폼">
                <textarea name="review" placeholder="리뷰를 작성해 주세요..." required aria-required="true"></textarea>
                <input type="number" name="rating" placeholder="별점 (1~5)" min="1" max="5" required aria-required="true" />
                <select name="review_type" required aria-required="true">
                    <option value="interview">면접</option>
                    <option value="employee">직원</option>
                </select>
                <button type="submit">리뷰 작성</button>
            </form>

            <?php foreach ($interviewReviews as $review): ?>
                <article class="review-card">
                    <h4><?= esc($review['review_type'] == 'interview' ? '면접 리뷰' : '직원 리뷰') ?></h4>
                    <p><?= esc($review['review']) ?></p>
                    <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
                </article>
            <?php endforeach; ?>
        </section>
        <div class="ad-box">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-6686738239613464"
           data-ad-slot="1204098626"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
    </div>

    </div>

    <script>
        const companyTab = document.getElementById('company-tab');
        const interviewTab = document.getElementById('interview-tab');
        const companyReview = document.getElementById('company-review');
        const interviewReview = document.getElementById('interview-review');

        function switchTab(selectedTab) {
            if (selectedTab === 'company') {
                companyTab.classList.add('active');
                companyTab.setAttribute('aria-selected', 'true');
                companyTab.setAttribute('tabindex', '0');
                interviewTab.classList.remove('active');
                interviewTab.setAttribute('aria-selected', 'false');
                interviewTab.setAttribute('tabindex', '-1');

                companyReview.classList.add('active');
                companyReview.removeAttribute('hidden');
                interviewReview.classList.remove('active');
                interviewReview.setAttribute('hidden', '');
            } else {
                interviewTab.classList.add('active');
                interviewTab.setAttribute('aria-selected', 'true');
                interviewTab.setAttribute('tabindex', '0');
                companyTab.classList.remove('active');
                companyTab.setAttribute('aria-selected', 'false');
                companyTab.setAttribute('tabindex', '-1');

                interviewReview.classList.add('active');
                interviewReview.removeAttribute('hidden');
                companyReview.classList.remove('active');
                companyReview.setAttribute('hidden', '');
            }
        }

        companyTab.addEventListener('click', () => switchTab('company'));
        interviewTab.addEventListener('click', () => switchTab('interview'));

        // 키보드 접근성 처리 (Tab 키 조작 등)
        companyTab.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                switchTab('company');
            }
        });
        interviewTab.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                switchTab('interview');
            }
        });
    </script>

    <?php include APPPATH . 'Views/includes/footer.php'; ?>
</body>
</html>
