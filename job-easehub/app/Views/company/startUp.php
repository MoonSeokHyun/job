<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>
<body>

    <title>스타트업 목록</title>
    <style>
        body {
            font-family: 'Noto Sans KR', sans-serif;
            background: #f9f9f9;
            margin: 0; padding: 20px;
        }
        h1 {
            text-align: center;
            color: #0078ff;
        }
        .company-list {
            max-width: 900px;
            margin: 1rem auto;
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(280px,1fr));
            gap: 1rem;
        }
        .company-card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .company-name {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #333;
        }
        .company-desc {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.8rem;
        }
        .company-link a {
            text-decoration: none;
            color: white;
            background: #0078ff;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.9rem;
        }
        .company-link a:hover {
            background: #0056cc;
        }

        .pagination-wrapper {
    text-align: center;
    margin-top: 2rem;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
}

.pagination li {
    margin: 0;
}

.pagination li a,
.pagination li span {
    display: block;
    padding: 0.6rem 1rem;
    color: #0078ff;
    background-color: #fff;
    text-decoration: none;
    border-right: 1px solid #eee;
    font-size: 0.95rem;
}

.pagination li a:hover {
    background-color: #0078ff;
    color: #fff;
}

.pagination li.active span {
    background-color: #0078ff;
    color: #fff;
    font-weight: bold;
}

.pagination li.disabled span {
    color: #ccc;
    background-color: #f7f7f7;
}

    </style>
</head>
<body>
<?php include APPPATH . 'Views/includes/header.php'; ?>
<h1>스타트업 목록</h1>
<div class="ad-box">
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-6686738239613464"
       data-ad-slot="1204098626"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
</div>

<div class="company-list">
    <?php if (!empty($companies)): ?>
        <?php foreach ($companies as $company): ?>
            <div class="company-card">
                <div class="company-name"><?= esc($company['Company Name (Korean)']) ?></div>
                <div class="company-desc">종류: 일반기업</div>
                <div class="company-desc">사원 수: <?= rand(1, 100) ?>명</div>
                <div class="company-link">
                    <a href="<?= site_url('company/' . $company['id']) ?>">자세히 보기</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>등록된 회사가 없습니다.</p>
    <?php endif; ?>
</div>

<!-- 페이징 -->
<div style="text-align:center; margin-top:2rem;">
    <?= $pager->links() ?>
</div>


<?php include APPPATH . 'Views/includes/footer.php'; ?>
</body>
</html>
