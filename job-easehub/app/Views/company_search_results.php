<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="hero" style="background-color: #2e7d32; color: white; padding: 50px 0; text-align: center;">
  <h2 style="font-size: 2.5em; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">검색 결과</h2>
  <p>검색어: <strong><?= esc($searchQuery) ?></strong></p>
</div>

<section class="info-section">
  <div class="ad-box" style="text-align: center; margin: 2rem 0;">
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

<div class="container" style="padding: 40px 20px; text-align: center;">
  <h2 style="font-size: 1.8rem; margin-bottom: 1.5rem; color: #2e7d32;">검색된 기업들</h2>

  <div class="reviews" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; justify-items: center;">
    <?php if (!empty($companies)): ?>
      <?php foreach ($companies as $company): ?>
        <div class="review-card" style="background: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; max-width: 320px; width: 100%; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
          <div style="display: flex; align-items: center; margin-bottom: 15px;">
            <a href="/company/<?= esc($company['id']) ?>" style="text-decoration: none;">
              <h3 style="font-size: 1.2rem; color: #2e7d32; margin: 0; cursor: pointer;"><?= esc($company['Company Name (Korean)']) ?></h3>
            </a>
          </div>
          <p style="font-size: 0.95rem; color: #555; line-height: 1.5;"><?= esc($company['One-liner Description']) ?></p>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="no-results" style="font-size: 1.1rem; color: #999; padding: 20px; background: #f1f1f1; border-radius: 8px;">
        검색된 기업이 없습니다.
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="ad-box" style="text-align: center; margin: 2rem 0;">
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

<?php include APPPATH . 'Views/includes/footer.php'; ?>
