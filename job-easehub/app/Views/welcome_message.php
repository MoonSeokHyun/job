<?= view('includes/header') ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>당신의 다음 커리어,<br><span class="highlight">JobHub</span>에서 시작하세요</h1>
            <p>국내 기업 정보부터 실시간 면접 후기까지, 투명한 취업 시장을 만듭니다.</p>
        </div>
    </section>

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

    <!-- Main Content -->
    <div class="container main-layout">
        <div class="content-area">
            <div class="section-header">
                <h2>🏢 최근 등록된 기업</h2>
                <a href="<?= site_url('business') ?>" class="view-all">전체보기 <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="company-grid">
                <?php foreach ($companies as $company): ?>
                <a href="<?= site_url('company/' . $company['id']) ?>" class="company-card">
                    <div class="company-info">
                        <div class="company-name"><?= esc($company['Company Name (Korean)']) ?></div>
                        <div class="company-industry"><?= esc($company['Industry Classification']) ?></div>
                        <p class="company-desc"><?= esc($company['One-liner Description']) ?></p>
                    </div>
                    <div class="company-footer">
                        <span>정보 상세보기 <i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- Middle Ad -->
            <div class="ad-container" style="margin-top: 3rem;">
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
        <aside class="sidebar-area">
            <div class="sidebar-widget">
                <h3>📢 주요 서비스</h3>
                <div class="service-links">
                    <a href="<?= site_url('company_reviews/index') ?>" class="s-link">
                        <i class="fa-solid fa-comments"></i> 실시간 기업리뷰
                    </a>
                    <a href="<?= site_url('interview_reviews/index') ?>" class="s-link">
                        <i class="fa-solid fa-user-tie"></i> 생생한 면접후기
                    </a>
                    <a href="<?= site_url('business') ?>" class="s-link">
                        <i class="fa-solid fa-magnifying-glass-chart"></i> 기업 데이터 조회
                    </a>
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
</main>

<style>
    .hero {
        background: linear-gradient(135deg, #00b15d 0%, #008a46 100%);
        color: white;
        padding: 5rem 1.5rem;
        text-align: center;
        margin-bottom: 3rem;
    }
    .hero h1 { font-size: 3rem; font-weight: 800; line-height: 1.2; margin-bottom: 1.5rem; }
    .hero .highlight { color: #ccff00; }
    .hero p { font-size: 1.25rem; opacity: 0.9; max-width: 600px; margin: 0 auto; }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
    .main-layout { display: grid; grid-template-columns: 1fr 320px; gap: 3rem; }

    .section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
    .section-header h2 { font-size: 1.5rem; font-weight: 800; }
    .view-all { font-size: 0.9rem; font-weight: 600; color: var(--primary); }

    .company-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; }
    .company-card { 
        background: white; border: 1px solid var(--border); border-radius: var(--radius); 
        padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between;
        transition: 0.3s;
    }
    .company-card:hover { transform: translateY(-5px); box-shadow: var(--shadow); border-color: var(--primary); }
    .company-name { font-size: 1.2rem; font-weight: 700; margin-bottom: 0.25rem; color: var(--text); }
    .company-industry { font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem; }
    .company-desc { font-size: 0.9rem; color: var(--muted); line-height: 1.5; margin-bottom: 1.5rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .company-footer { border-top: 1px solid var(--border); padding-top: 1rem; font-size: 0.85rem; font-weight: 600; color: var(--muted); }

    .sidebar-widget { background: white; border: 1px solid var(--border); border-radius: var(--radius); padding: 1.5rem; margin-bottom: 2rem; }
    .sidebar-widget h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 1.25rem; }
    .service-links { display: flex; flex-direction: column; gap: 0.75rem; }
    .s-link { 
        display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; 
        background: #f8fafc; border-radius: 0.5rem; font-size: 0.9rem; font-weight: 600;
    }
    .s-link i { color: var(--primary); width: 20px; }
    .s-link:hover { background: #f0fdf4; color: var(--primary); }

    .ad-container { text-align: center; margin: 2rem 0; }

    @media (max-width: 1024px) {
        .main-layout { grid-template-columns: 1fr; }
        .hero h1 { font-size: 2.25rem; }
    }
</style>

<?= view('includes/footer') ?>
