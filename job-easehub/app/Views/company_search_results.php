<?= view('includes/header', ['searchQuery' => $searchQuery]) ?>

<main class="container">
    <div class="search-results-header">
        <h1>"<?= esc($searchQuery) ?>" 검색 결과</h1>
        <p>총 <strong><?= count($companies) ?></strong>건의 기업이 검색되었습니다.</p>
    </div>

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

    <?php if (empty($companies)): ?>
        <div class="empty-results section-block">
            <i class="fa-solid fa-face-frown"></i>
            <h3>검색 결과가 없습니다.</h3>
            <p>검색어를 확인하거나 다른 키워드로 다시 검색해 보세요.</p>
            <a href="<?= site_url('/') ?>" class="btn btn-primary">홈으로 돌아가기</a>
        </div>
    <?php else: ?>
        <div class="company-grid">
            <?php foreach ($companies as $company): ?>
            <a href="<?= site_url('company/' . $company['id']) ?>" class="company-card">
                <div class="company-info">
                    <div class="company-badge"><?= esc($company['Industry Classification']) ?></div>
                    <div class="company-name"><?= esc($company['Company Name (Korean)']) ?></div>
                    <p class="company-desc"><?= esc($company['One-liner Description']) ?></p>
                </div>
                <div class="company-footer">
                    <span>📍 <?= esc($company['Headquarters Location']) ?></span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Bottom Ad -->
    <div class="ad-container" style="margin-top: 4rem;">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6686738239613464"
             data-ad-slot="1204098626"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
</main>

<style>
    .container { max-width: 1200px; margin: 0 auto; padding: 2rem 1.5rem; }
    
    .search-results-header { margin-bottom: 2.5rem; border-left: 5px solid var(--primary); padding-left: 1.5rem; }
    .search-results-header h1 { font-size: 1.75rem; font-weight: 800; margin-bottom: 0.5rem; }
    .search-results-header p { color: var(--muted); font-size: 1rem; }

    .company-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem; }
    .company-card { 
        background: white; border: 1px solid var(--border); border-radius: var(--radius); 
        padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between;
        transition: 0.3s;
    }
    .company-card:hover { transform: translateY(-5px); box-shadow: var(--shadow); border-color: var(--primary); }
    
    .company-badge { display: inline-block; padding: 0.2rem 0.6rem; background: #f0fdf4; color: var(--primary); border-radius: 4px; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.75rem; }
    .company-name { font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text); }
    .company-desc { font-size: 0.9rem; color: var(--muted); line-height: 1.5; margin-bottom: 1.5rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    
    .company-footer { border-top: 1px solid var(--border); padding-top: 1rem; font-size: 0.8rem; color: var(--muted); font-weight: 600; }

    .empty-results { text-align: center; padding: 5rem 2rem; }
    .empty-results i { font-size: 3rem; color: var(--border); margin-bottom: 1.5rem; }
    .empty-results h3 { font-size: 1.5rem; margin-bottom: 0.75rem; }
    .empty-results p { color: var(--muted); margin-bottom: 2rem; }

    .ad-container { text-align: center; margin: 2rem 0; }
</style>

<?= view('includes/footer') ?>
