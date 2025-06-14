<?php include APPPATH . 'Views/includes/header.php'; ?>
<style>
  .container {
    max-width: 1080px;
    margin: 40px auto;
    padding: 0 20px;
  }

  .container h1 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 24px;
    color: #222;
  }

  .ad-box {
    margin-bottom: 30px;
    text-align: center;
  }

  .review-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
  }

  .review-card {
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 3px 8px rgba(0,0,0,0.03);
    transition: box-shadow 0.2s ease;
    display: flex;
    flex-direction: column;
  }

  .review-card:hover {
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
  }

  .review-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    background: #f5f5f5;
  }

  .review-content {
    padding: 16px 18px 20px;
    flex-grow: 1;
  }

  .review-content h3 {
    font-size: 17px;
    font-weight: 600;
    color: #00b15d;
    margin-bottom: 10px;
  }

  .review-content p {
    font-size: 14px;
    color: #333;
    margin: 6px 0;
  }

  .review-content strong {
    font-weight: 500;
    color: #111;
  }

  .no-review {
    text-align: center;
    padding: 40px 0;
    font-size: 15px;
    color: #666;
  }
</style>

<div class="container">
  <h1>기업 리뷰 목록</h1>

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

  <?php if (!empty($reviews)): ?>
    <div class="review-grid">
      <?php foreach ($reviews as $review): ?>
        <div class="review-card">
          <div class="review-content">
            <h3><?= esc($review['Company Name (Korean)']) ?> (<?= esc($review['Company Name (English)']) ?>)</h3>
            <p><strong>리뷰:</strong> <?= esc($review['review']) ?></p>
            <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="no-review">리뷰가 아직 없습니다.</div>
  <?php endif; ?>
</div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>