<?php include APPPATH . 'Views/includes/header.php'; ?>

<style>
  .container {
    max-width: 1000px;
    margin: 2rem auto;
    padding: 0 1rem;
  }

  h1 {
    font-size: 28px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 2rem;
    color: #1e293b;
  }

  .ad-box {
    margin: 40px 0;
    text-align: center;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.6rem;
  }

  .card {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.05);
    padding: 1.4rem 1.2rem;
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(0,0,0,0.08);
  }

  .company-name {
    font-size: 1.15rem;
    font-weight: 600;
    margin-bottom: 0.6rem;
    color: #111827;
  }

  .company-desc {
    font-size: 0.95rem;
    color: #4b5563;
    margin-bottom: 0.35rem;
  }

  .company-link {
    margin-top: auto;
    text-align: right;
  }

  .company-link a {
    background: #10b981;
    color: #fff;
    padding: 0.45rem 0.9rem;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    transition: background 0.2s ease;
  }

  .company-link a:hover {
    background: #0e9e6e;
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

<div class="container">
  <h1>스타트업 목록</h1>

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

  <div class="grid">
    <?php if (!empty($companies)): ?>
      <?php foreach ($companies as $company): ?>
        <div class="card">
          <div class="company-name"><?= esc($company['Company Name (Korean)']) ?></div>
          <div class="company-desc">종류: 일반기업</div>
          <div class="company-desc">사원 수: <?= rand(1, 100) ?>명</div>
          <div class="company-link">
            <a href="<?= site_url('company/' . $company['id']) ?>">자세히 보기</a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p style="text-align:center; color:#555;">등록된 회사가 없습니다.</p>
    <?php endif; ?>
  </div>

  <div class="pagination">
    <?= $pager->links() ?>
  </div>
</div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>
