<style>

    .container {
      max-width: 1100px;
      margin: 3rem auto;
      padding: 0 1.2rem;
    }

    h1 {
      font-size: 28px;
      font-weight: 700;
      text-align: center;
      margin-bottom: 2rem;
      color: #1e293b;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.6rem;
    }

    .card {
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
      padding: 1.4rem 1.2rem;
      display: flex;
      flex-direction: column;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .card-title {
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 0.6rem;
      color: #111827;
    }

    .card-detail {
      font-size: 0.95rem;
      color: #4b5563;
      margin-bottom: 0.35rem;
    }

    .view-link {
      margin-top: auto;
      text-align: right;
    }

    .view-link a {
      background: #10b981;
      color: #fff;
      padding: 0.45rem 0.9rem;
      border-radius: 8px;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      transition: background 0.2s ease;
    }

    .view-link a:hover {
      background: #059669;
    }

    .ad-box {
      margin: 40px 0;
      text-align: center;
    }

    .pagination {
      text-align: center;
      margin-top: 2.5rem;
    }

    .pagination ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-flex;
      gap: 0.5rem;
    }

    .pagination li a,
    .pagination li span {
      display: inline-block;
      padding: 0.45rem 0.9rem;
      border-radius: 6px;
      font-size: 0.9rem;
      text-decoration: none;
      color: #10b981;
      border: 1px solid #10b981;
      transition: background-color 0.2s, color 0.2s;
      cursor: pointer;
    }

    .pagination li a:hover {
      background-color: #10b981;
      color: #fff;
    }

    .pagination li.active span {
      background-color: #10b981;
      color: #fff;
      border-color: #10b981;
      cursor: default;
    }

    .pagination li.disabled span {
      color: #ccc;
      border-color: #eee;
      cursor: not-allowed;
    }
  </style>
</head>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="container">
  <h1>기업 정보</h1>

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
          <a href="<?= site_url('business/detail/' . $b['id']) ?>">자세히 보기</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="pagination">
    <?= $pager->links() ?>
  </div>
</div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>

