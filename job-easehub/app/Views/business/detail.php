<?php
$business = $business ?? [];
$facilityName = esc($business['business_name'] ?? '사업장명');
$zipCode = esc($business['zip_code'] ?? '-');
$landLotAddress = esc($business['landlot_address'] ?? '-');
$streetAddress = esc($business['street_address'] ?? '-');
$businessType = esc($business['business_type'] ?? '-');
$owners = esc($business['number_of_owners'] ?? '0');

$blog = $blog ?? ['items' => []];
$images = $images ?? ['items' => []];

preg_match('/([가-힣]+구|[가-힣]+읍|[가-힣]+면)/', $landLotAddress, $m);
$district = $m[0] ?? '지역';

$seoTitle = "{$facilityName} 상세정보 – {$district} 사업장 정보 | JobHub";
$seoDescription = "{$facilityName} 사업장의 상세 주소, 업종, 사업자 수 등 상세 정보를 JobHub에서 확인하세요.";
$seoKeywords = "{$facilityName}, {$district}, {$businessType}, 사업장정보, JobHub";

echo view('includes/header', [
    'business' => $business,
    'seoTitle' => $seoTitle,
    'seoDescription' => $seoDescription,
    'seoKeywords' => $seoKeywords
]);
?>

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
            <!-- Business Header Card -->
            <section class="info-card header-card">
                <div class="company-badge"><?= $businessType ?></div>
                <h1><?= $facilityName ?></h1>
                <div style="font-size:.9rem; color:var(--muted); margin-bottom:1.5rem;">
                    <a href="<?= site_url() ?>" style="color:var(--primary);">홈</a> &gt;
                    <a href="<?= site_url('business') ?>" style="color:var(--primary);">사업장 목록</a> &gt;
                    상세정보
                </div>
                
                <div class="meta-grid">
                    <div class="meta-item">
                        <span class="label">📍 지번 주소</span>
                        <span class="value"><?= $landLotAddress ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">🏢 도로명 주소</span>
                        <span class="value"><?= $streetAddress ?: '-' ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">📮 우편번호</span>
                        <span class="value"><?= $zipCode ?></span>
                    </div>
                    <div class="meta-item">
                        <span class="label">👥 사업자 수</span>
                        <span class="value"><?= $owners ?>명</span>
                    </div>
                </div>
            </section>

            <!-- Naver Blog News Section -->
            <?php if (!empty($blog['items'])): ?>
            <section class="section-block">
                <h2 class="section-title"><i class="fa-solid fa-rss"></i> 관련 소식</h2>
                <div class="blog-list">
                    <?php foreach (array_slice($blog['items'], 0, 3) as $post): ?>
                    <a href="<?= $post['link'] ?>" target="_blank" class="blog-card">
                        <h3><?= strip_tags($post['title']) ?></h3>
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

            <!-- Image Search Results -->
            <?php if (!empty($images['items'])): ?>
            <section class="section-block">
                <h2 class="section-title"><i class="fa-solid fa-image"></i> 관련 이미지</h2>
                <div class="image-grid">
                    <?php foreach (array_slice($images['items'], 0, 8) as $img): ?>
                    <a href="<?= esc($img['link']) ?>" target="_blank" class="image-card">
                        <img src="<?= esc($img['thumbnail']) ?>" alt="<?= esc($img['title']) ?>">
                    </a>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-card">
                <h3>📢 서비스 안내</h3>
                <p>JobHub는 전국 사업장 및 기업 데이터를 투명하게 제공합니다.</p>
                <a href="<?= site_url('business') ?>" class="btn btn-primary btn-block">다른 사업장 검색</a>
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
    .container { max-width: 1200px; margin: 0 auto; padding: 2rem 1.5rem; }
    .detail-layout { display: grid; grid-template-columns: 1fr 320px; gap: 2.5rem; align-items: start; }

    .section-block { background: white; border: 1px solid var(--border); border-radius: var(--radius); padding: 2rem; margin-bottom: 2rem; }
    .section-title { font-size: 1.25rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; }
    .section-title i { color: var(--primary); }

    .info-card { background: white; border: 1px solid var(--border); border-radius: var(--radius); padding: 2.5rem; margin-bottom: 2rem; }
    .header-card h1 { font-size: 2.25rem; font-weight: 800; margin-bottom: 0.5rem; }
    .company-badge { display: inline-block; padding: 0.25rem 0.75rem; background: #f0fdf4; color: var(--primary); border-radius: 999px; font-size: 0.875rem; font-weight: 700; margin-bottom: 1rem; }

    .meta-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border); }
    .meta-item .label { display: block; font-size: 0.8125rem; color: var(--muted); font-weight: 600; margin-bottom: 0.25rem; }
    .meta-item .value { font-size: 1rem; font-weight: 700; }

    /* Blog List */
    .blog-list { display: flex; flex-direction: column; gap: 1rem; }
    .blog-card { display: block; padding: 1.25rem; border: 1px solid var(--border); border-radius: 0.75rem; transition: 0.2s; }
    .blog-card:hover { border-color: var(--primary); background: #f8fafc; }
    .blog-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text); }
    .blog-card p { font-size: 0.9rem; color: var(--muted); margin-bottom: 0.75rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .blog-meta { display: flex; gap: 1rem; font-size: 0.8rem; color: var(--muted); font-weight: 600; }

    /* Image Grid */
    .image-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); gap: 0.75rem; }
    .image-card { border-radius: 0.5rem; overflow: hidden; border: 1px solid var(--border); }
    .image-card img { width: 100%; height: 100px; object-fit: cover; }

    /* Sidebar */
    .sidebar-card { background: #1e293b; color: white; padding: 1.5rem; border-radius: var(--radius); margin-bottom: 1.5rem; }
    .sidebar-card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }
    .sidebar-card p { font-size: 0.875rem; opacity: 0.8; margin-bottom: 1.25rem; }

    .btn { display: inline-block; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 700; cursor: pointer; border: none; transition: 0.2s; text-align: center; }
    .btn-primary { background: var(--primary); color: white; }
    .btn-primary:hover { background: var(--primary-dark); }
    .btn-block { width: 100%; display: block; }

    .ad-container { text-align: center; margin: 2rem 0; }

    @media (max-width: 1024px) {
        .detail-layout { grid-template-columns: 1fr; }
        .header-card h1 { font-size: 1.75rem; }
    }
</style>

<?= view('includes/footer') ?>
