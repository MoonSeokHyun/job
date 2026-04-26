<?= view('includes/header', ['company' => $company]) ?>

<main class="container">
    <!-- Top Ad -->
    <div class="ad-container">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6686738239613464"
             data-ad-slot="1204098626"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>

    <div class="detail-layout">
        <div class="main-content">
            <!-- Company Header Card -->
            <section class="info-card header-card">
                <div class="company-badge"><?= esc($company['Industry Classification']) ?></div>
                <h1><?= esc($company['Company Name (Korean)']) ?></h1>
                <p class="one-liner"><?= esc($company['One-liner Description']) ?></p>
                
                <div class="meta-grid">
                    <div class="meta-item">
                        <span class="label">🏢 영문명</span>
                        <span class="value"><?= esc($company['Company Name (English)'] ?? '-') ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">📍 본사 위치</span>
                        <span class="value"><?= esc($company['Office Address'] ?? '-') ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">🔗 웹사이트</span>
                        <span class="value"><a href="<?= esc($company['Website URL'] ?? '#') ?>" target="_blank" class="text-link"><?= esc($company['Website URL'] ?? '정보 없음') ?> <i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                    </div>
                </div>
            </section>

            <!-- Naver Blog News Section -->
            <?php if (!empty($blog['items'])): ?>
            <section class="section-block">
                <h2 class="section-title"><i class="fa-solid fa-rss"></i> 최신 관련 소식</h2>
                <div class="blog-list">
                    <?php foreach (array_slice($blog['items'], 0, 3) as $post): ?>
                    <a href="<?= $post['link'] ?>" target="_blank" class="blog-card">
                        <h3><?= $post['title'] ?></h3>
                        <p><?= strip_tags($post['description']) ?></p>
                        <div class="blog-meta">
                            <span><?= esc($post['bloggername']) ?></span>
                            <span><?= date('Y.m.d', strtotime($post['postdate'])) ?></span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <!-- Reviews Section -->
            <section class="section-block">
                <h2 class="section-title"><i class="fa-solid fa-comments"></i> 기업 리뷰</h2>
                <div class="review-container">
                    <?php if (empty($companyReviews)): ?>
                        <div class="empty-state">아직 작성된 리뷰가 없습니다. 첫 리뷰를 작성해보세요!</div>
                    <?php else: ?>
                        <?php foreach ($companyReviews as $rev): ?>
                        <div class="review-item">
                            <div class="review-header">
                                <span class="rating">⭐ <?= number_format($rev['rating'], 1) ?></span>
                                <span class="date"><?= date('Y-m-d', strtotime($rev['created_at'])) ?></span>
                            </div>
                            <p class="review-text"><?= nl2br(esc($rev['review'])) ?></p>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Middle Ad -->
            <div class="ad-container">
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6686738239613464"
                     data-ad-slot="1204098626"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-card">
                <h3>✍️ 리뷰 작성하기</h3>
                <p>여러분의 경험이 누군가에게는 큰 도움이 됩니다.</p>
                <div class="action-buttons">
                    <button onclick="document.getElementById('review-form').scrollIntoView({behavior: 'smooth'})" class="btn btn-primary">기업 리뷰 쓰기</button>
                </div>
            </div>

            <!-- Sidebar Ad -->
            <div class="sidebar-ad">
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6686738239613464"
                     data-ad-slot="1204098626"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </aside>
    </div>

    <!-- Review Form Section -->
    <section id="review-form" class="section-block form-section">
        <h2 class="section-title">리뷰 남기기</h2>
        <form action="<?= site_url('company/'.$company['id'].'/addCompanyReview') ?>" method="post" class="modern-form">
            <div class="form-group">
                <label>평점</label>
                <select name="rating" class="form-control">
                    <option value="5">⭐⭐⭐⭐⭐ (최고)</option>
                    <option value="4">⭐⭐⭐⭐ (좋음)</option>
                    <option value="3">⭐⭐⭐ (보통)</option>
                    <option value="2">⭐⭐ (별로)</option>
                    <option value="1">⭐ (나쁨)</option>
                </select>
            </div>
            <div class="form-group">
                <label>상세 리뷰</label>
                <textarea name="review" class="form-control" rows="5" placeholder="기업의 장단점, 분위기 등을 자유롭게 남겨주세요."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">리뷰 등록하기</button>
        </form>
    </section>
</main>

<style>
    .container { max-width: 1200px; margin: 0 auto; padding: 2rem 1.5rem; }
    .detail-layout { display: grid; grid-template-columns: 1fr 320px; gap: 2.5rem; align-items: start; }

    .section-block { background: white; border: 1px solid var(--border); border-radius: var(--radius); padding: 2rem; margin-bottom: 2rem; }
    .section-title { font-size: 1.25rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; }
    .section-title i { color: var(--primary); }

    .info-card { background: white; border: 1px solid var(--border); border-radius: var(--radius); padding: 2.5rem; margin-bottom: 2rem; }
    .header-card h1 { font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem; }
    .company-badge { display: inline-block; padding: 0.25rem 0.75rem; background: #f0fdf4; color: var(--primary); border-radius: 999px; font-size: 0.875rem; font-weight: 700; margin-bottom: 1rem; }
    .one-liner { font-size: 1.125rem; color: var(--muted); margin-bottom: 2rem; }

    .meta-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border); }
    .meta-item .label { display: block; font-size: 0.8125rem; color: var(--muted); font-weight: 600; margin-bottom: 0.25rem; }
    .meta-item .value { font-size: 1rem; font-weight: 700; }
    .text-link { color: var(--primary); border-bottom: 1px solid transparent; }
    .text-link:hover { border-bottom-color: var(--primary); }

    /* Blog List */
    .blog-list { display: flex; flex-direction: column; gap: 1rem; }
    .blog-card { display: block; padding: 1.25rem; border: 1px solid var(--border); border-radius: 0.75rem; transition: 0.2s; }
    .blog-card:hover { border-color: var(--primary); background: #f8fafc; }
    .blog-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text); }
    .blog-card p { font-size: 0.9rem; color: var(--muted); margin-bottom: 0.75rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .blog-meta { display: flex; gap: 1rem; font-size: 0.8rem; color: var(--muted); font-weight: 600; }

    /* Reviews */
    .review-item { padding: 1.5rem 0; border-bottom: 1px solid var(--border); }
    .review-item:last-child { border-bottom: 0; }
    .review-header { display: flex; justify-content: space-between; margin-bottom: 0.75rem; }
    .rating { font-weight: 800; color: #f59e0b; }
    .review-text { font-size: 0.95rem; color: var(--text); line-height: 1.6; }

    /* Form */
    .form-group { margin-bottom: 1.5rem; }
    .form-group label { display: block; font-weight: 700; margin-bottom: 0.5rem; font-size: 0.9rem; }
    .form-control { width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 0.5rem; font-family: inherit; font-size: 1rem; transition: 0.2s; }
    .form-control:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 4px rgba(0, 177, 93, 0.1); }
    .btn { display: inline-block; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 700; cursor: pointer; border: none; transition: 0.2s; text-align: center; }
    .btn-primary { background: var(--primary); color: white; }
    .btn-primary:hover { background: var(--primary-dark); }
    .btn-block { width: 100%; display: block; }

    /* Sidebar */
    .sidebar-card { background: #1e293b; color: white; padding: 1.5rem; border-radius: var(--radius); margin-bottom: 1.5rem; }
    .sidebar-card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }
    .sidebar-card p { font-size: 0.875rem; opacity: 0.8; margin-bottom: 1.25rem; }

    .ad-container { text-align: center; margin: 2rem 0; }

    @media (max-width: 1024px) {
        .detail-layout { grid-template-columns: 1fr; }
        .header-card h1 { font-size: 1.75rem; }
    }
</style>

<?= view('includes/footer') ?>
