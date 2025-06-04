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
    </style>
</head>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="container">
    <h1>Business List</h1>

    <div class="grid">
        <?php foreach ($businesses as $b): ?>
            <div class="card">
                <div class="card-title"><?= esc($b['business_name']) ?></div>
                <div class="card-detail">ID: <?= esc($b['id']) ?></div>
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
