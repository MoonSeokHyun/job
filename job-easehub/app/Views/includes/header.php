<?php
if (!empty($company)) {
    $companyName = esc($company['Company Name (Korean)']);
    $companyDesc = esc($company['One-liner Description']);
    $companyIndustry = esc($company['Industry Classification']);
    $seoTitle = "{$companyName} 기업정보 및 리뷰 | JobHub";
    $seoDescription = $companyDesc ?: "{$companyName}의 기업 정보, 면접 후기, 평점 등을 JobHub에서 확인하세요.";
    $seoKeywords = "{$companyName}, {$companyIndustry}, 기업 리뷰, 면접 후기, JobHub, 잡허브";
} elseif (!empty($business)) {
    $facilityName = esc($business['business_name'] ?? '사업장명');
    $landLotAddress = esc($business['landlot_address'] ?? '');
    $businessType = esc($business['business_type'] ?? '');

    preg_match('/([가-힣]+구|[가-힣]+읍|[가-힣]+면)/', $landLotAddress, $m);
    $district = $m[0] ?? '지역';

    $seoTitle = "{$facilityName} 상세정보 – {$district} 사업장 정보 | JobHub";
    $seoDescription = "{$facilityName} 사업장의 주소, 업종, 사업자 수 등 상세 정보를 JobHub에서 확인하세요.";
    $seoKeywords = "{$facilityName}, {$district}, {$businessType}, 사업장정보, JobHub";
} else {
    $seoTitle = $seoTitle ?? '기업 정보 및 면접 리뷰 플랫폼 | JobHub';
    $seoDescription = $seoDescription ?? '국내 주요 기업의 상세 정보, 실시간 면접 리뷰, 기업 평판을 한눈에 확인하는 커리어 플랫폼 JobHub입니다.';
    $seoKeywords = $seoKeywords ?? '기업정보, 면접리뷰, 연봉정보, 스타트업, 기업조회, JobHub, 잡허브';
}

$canonicalUrl = $canonicalUrl ?? current_url();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <title><?= $seoTitle ?></title>
    <meta name="description" content="<?= $seoDescription ?>" />
    <meta name="keywords" content="<?= $seoKeywords ?>" />
    <link rel="canonical" href="<?= $canonicalUrl ?>" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $canonicalUrl ?>" />
    <meta property="og:title" content="<?= $seoTitle ?>" />
    <meta property="og:description" content="<?= $seoDescription ?>" />
    <meta property="og:image" content="<?= base_url('assets/img/og-image.jpg') ?>" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?= $canonicalUrl ?>" />
    <meta property="twitter:title" content="<?= $seoTitle ?>" />
    <meta property="twitter:description" content="<?= $seoDescription ?>" />

    <!-- Fonts & Icons -->
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>

    <style>
        :root {
            --primary: #00b15d;
            --primary-dark: #008a46;
            --bg: #f8fafc;
            --surface: #ffffff;
            --text: #1e293b;
            --muted: #64748b;
            --border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --radius: 0.75rem;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Pretendard', -apple-system, BlinkMacSystemFont, sans-serif; 
            background: var(--bg); 
            color: var(--text); 
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        a { text-decoration: none; color: inherit; transition: 0.2s; }

        /* Header */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.02em;
        }
        .main-nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .nav-item {
            position: relative;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text);
            cursor: pointer;
            padding: 0.5rem 0;
        }
        .nav-item:hover { color: var(--primary); }
        
        .dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 0.75rem;
            min-width: 180px;
            display: none;
            z-index: 1001;
        }
        .nav-item:hover .dropdown { display: block; }
        .dropdown a {
            display: block;
            padding: 0.6rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            color: var(--muted);
        }
        .dropdown a:hover {
            background: #f0fdf4;
            color: var(--primary);
        }

        /* Search Section */
        .header-search-area {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 0;
        }
        .search-inner {
            max-width: 720px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        .modern-search-box {
            display: flex;
            align-items: center;
            background: #f1f5f9;
            border: 2px solid transparent;
            border-radius: 999px;
            padding: 0.5rem 0.5rem 0.5rem 1.5rem;
            transition: 0.2s;
        }
        .modern-search-box:focus-within {
            background: var(--surface);
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(0, 177, 93, 0.1);
        }
        .modern-search-box input {
            flex: 1;
            border: none;
            outline: none;
            background: transparent;
            font-size: 1rem;
            color: var(--text);
            padding: 0.5rem 0;
        }
        .modern-search-box button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 999px;
            font-weight: 700;
            cursor: pointer;
        }
        .modern-search-box button:hover { background: var(--primary-dark); }

        @media (max-width: 768px) {
            .main-nav { display: none; }
            .nav-container { padding: 0.75rem 1rem; }
        }
    </style>
</head>
<body>

<header class="site-header">
    <div class="nav-container">
        <a href="<?= base_url('/') ?>" class="logo">JobHub</a>
        <nav class="main-nav">
            <div class="nav-item">
                서비스 <i class="fa-solid fa-chevron-down" style="font-size: 0.7rem; margin-left: 0.3rem; opacity: 0.5;"></i>
                <div class="dropdown">
                    <a href="<?= site_url('company_reviews/index') ?>"><i class="fa-regular fa-comment-dots"></i> 기업리뷰</a>
                    <a href="<?= site_url('interview_reviews/index') ?>"><i class="fa-solid fa-users-rectangle"></i> 면접리뷰</a>
                </div>
            </div>
            <div class="nav-item">
                기업정보 <i class="fa-solid fa-chevron-down" style="font-size: 0.7rem; margin-left: 0.3rem; opacity: 0.5;"></i>
                <div class="dropdown">
                    <a href="<?= site_url('business') ?>"><i class="fa-solid fa-building"></i> 전체 기업</a>
                    <a href="<?= site_url('company') ?>"><i class="fa-solid fa-rocket"></i> 스타트업</a>
                </div>
            </div>
            <a href="<?= site_url('event') ?>" class="nav-item">이벤트</a>
        </nav>
    </div>
</header>

<section class="header-search-area">
    <div class="search-inner">
        <form action="<?= site_url('search') ?>" method="get">
            <div class="modern-search-box">
                <i class="fa-solid fa-magnifying-glass" style="color: var(--muted); margin-right: 0.75rem;"></i>
                <input type="text" name="search_query" placeholder="기업명, 직무, 키워드 검색" value="<?= esc($searchQuery ?? '') ?>" />
                <button type="submit">검색</button>
            </div>
        </form>
    </div>
</section>
