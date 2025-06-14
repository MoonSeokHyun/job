<!-- ✅ body 시작 -->
<?php include APPPATH . 'Views/includes/header.php'; ?>

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

<div class="container" style="max-width:1080px; margin:2rem auto; padding:0 1rem;">
  <h1 style="font-size: 2rem; margin-bottom: .5rem; border-bottom: 2px solid #2e7d32; padding-bottom: .3rem;"><?= $facilityName ?></h1>

  <div style="font-size:.9rem; color:#555; margin-bottom:1.5rem;">
    <a href="<?= site_url() ?>" style="color:#0078ff;">홈</a> &gt;
    <a href="<?= site_url('business') ?>" style="color:#0078ff;">사업장 목록</a> &gt;
    상세정보
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">기본 정보</h2>
    <div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee;">
        <div style="font-weight:600;">사업장명</div><div style="color:#555;"><?= $facilityName ?></div>
      </div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee;">
        <div style="font-weight:600;">우편번호</div><div style="color:#555;"><?= $zipCode ?></div>
      </div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee;">
        <div style="font-weight:600;">지번주소</div><div style="color:#555;"><?= $landLotAddress ?></div>
      </div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee;">
        <div style="font-weight:600;">도로명주소</div><div style="color:#555;"><?= $streetAddress ?></div>
      </div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee;">
        <div style="font-weight:600;">업종</div><div style="color:#555;"><?= $businessType ?></div>
      </div>
      <div style="display:flex; justify-content:space-between; padding:.75rem 0;">
        <div style="font-weight:600;">사업자 수</div><div style="color:#555;"><?= $owners ?></div>
      </div>
    </div>
  </div>

  <?php if (!empty($blog['items'])): ?>
  <section class="info-section" style="margin-top:15px;">
    <h3 style="font-size: 1.3rem; font-weight: 600; color: #2e7d32; margin-bottom: 1rem;">
      블로그 검색
    </h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1.2rem;">
      <?php foreach ($blog['items'] as $item): ?>
        <a href="<?= esc($item['link']) ?>" target="_blank" 
           style="display: block; padding: 1rem; background: #fff; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.05); text-decoration: none; color: #333; transition: box-shadow 0.2s ease;">
          <div style="font-weight: 600; font-size: 1rem; margin-bottom: 0.4rem; line-height: 1.4; color: #1b5e20;">
            <?= strip_tags($item['title']) ?>
          </div>
          <div style="font-size: 0.9rem; color: #555; line-height: 1.5; margin-bottom: 0.5rem;">
            <?= strip_tags($item['description']) ?>
          </div>
          <div style="font-size: 0.8rem; color: #999;">
            <?= esc($item['bloggername']) ?> · <?= date('Y.m.d', strtotime($item['postdate'])) ?>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($images['items'])): ?>
  <section class="info-section" style="margin-top:15px;">
    <h3 style="font-size: 1.3rem; font-weight: 600; color: #2e7d32; margin-bottom: 1rem;">
      이미지 검색
    </h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 1rem;">
      <?php foreach ($images['items'] as $img): ?>
        <a href="<?= esc($img['link']) ?>" target="_blank" 
           style="text-decoration: none; color: #333; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.05); transition: box-shadow 0.2s ease;">
          <img src="<?= esc($img['thumbnail']) ?>" alt="<?= esc($img['title']) ?>" style="width: 100%; height: auto; display: block;">
          <div style="padding: 0.5rem; font-size: 0.85rem; color: #444; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            <?= esc(mb_strimwidth(strip_tags($img['title']), 0, 40, '...')) ?>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>

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
<?php include APPPATH . 'Views/includes/footer.php'; ?>
