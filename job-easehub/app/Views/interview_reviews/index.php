
<?php include APPPATH . 'Views/includes/header.php'; ?>
<div class="container" style="max-width:1080px; margin:40px auto; padding:0 20px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">
  <h1 style="font-size:24px; font-weight:700; margin-bottom:24px; color:#222;">전체 면접 리뷰 목록</h1>

  <section class="info-section">
    <div class="ad-box" style="margin-bottom:30px; text-align:center;">
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

  <?php if (!empty($interviewReviews)): ?>
    <div class="review-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
      <?php foreach ($interviewReviews as $review): ?>
        <div class="review-card" style="border:1px solid #e5e5e5; border-radius:12px; padding:20px; background:#fff; box-shadow:0 3px 8px rgba(0,0,0,0.03); transition:0.2s;">
          <h3 style="font-size:18px; font-weight:600; color:#00b15d; margin-bottom:10px;">
            <?= esc($review['Company Name (Korean)']) ?> (<?= esc($review['Company Name (English)']) ?>)
          </h3>
          <p style="font-size:14px; color:#333; margin-bottom:10px;">
            <strong style="color:#111;">리뷰:</strong> <?= esc($review['review']) ?>
          </p>
          <p style="font-size:14px; color:#555;">
            <strong style="color:#111;">별점:</strong> <?= esc($review['rating']) ?> / 5
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p style="text-align:center; padding:40px 0; font-size:15px; color:#666;">면접에 대한 리뷰가 아직 없습니다.</p>
  <?php endif; ?>
</div>
<?php include APPPATH . 'Views/includes/footer.php'; ?>