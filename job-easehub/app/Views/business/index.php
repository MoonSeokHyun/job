<!DOCTYPE html>
<html>
<head>
    <title>Business List</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            background: #f5f5f5;
            font-family: 'Noto Sans KR', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #0078ff;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            padding: 1.2rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-3px);
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }
        .card-detail {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 0.4rem;
        }
        .view-link {
            margin-top: auto;
            text-align: right;
        }
        .view-link a {
            background: #0078ff;
            color: #fff;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .pagination {
            text-align: center;
            margin-top: 2rem;
        }

        .pagination {
    text-align: center;
    margin-top: 2rem;
}

.pagination ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-flex;
    gap: 0.5rem;
}

.pagination li {
}

.pagination li a,
.pagination li span {
    display: inline-block;
    padding: 0.4rem 0.8rem;
    border-radius: 6px;
    text-decoration: none;
    font-size: 0.9rem;
    color: #0078ff;
    border: 1px solid #0078ff;
    transition: background-color 0.2s, color 0.2s;
    cursor: pointer;
}

.pagination li a:hover {
    background-color: #0078ff;
    color: #fff;
}

.pagination li.active span {
    background-color: #0078ff;
    color: #fff;
    border-color: #0078ff;
    cursor: default;
}

.pagination li.disabled span {
    color: #aaa;
    border-color: #ddd;
    cursor: default;
}

    </style>
</head>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="container">
    <h1>Business List</h1>
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
    <div class="grid">
        <?php foreach ($businesses as $b): ?>
            <div class="card">
                <div class="card-title"><?= esc($b['business_name']) ?></div>
                <div class="card-detail">우편번호: <?= esc($b['zip_code']) ?></div>
                <div class="card-detail">업종: <?= esc($b['business_type']) ?></div>
                <div class="view-link">
                    <a href="<?= site_url('business/detail/' . $b['id']) ?>">View</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?= $pager->links() ?>
    </div>
</div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
