<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="container" style="max-width:1080px; margin:2rem auto; padding:0 1rem;">

  <h1 style="font-size: 2rem; margin-bottom: .5rem; border-bottom: 2px solid #2e7d32; padding-bottom: .3rem;">
    <?= esc($company['Company Name (Korean)']) ?> - <?= esc($company['Company Name (English)']) ?>
  </h1>

  <div style="font-size:.9rem; color:#555; margin-bottom:1.5rem;">
    <a href="<?= site_url() ?>" style="color:#0078ff;">홈</a> &gt;
    <a href="<?= site_url('company') ?>" style="color:#0078ff;">기업 목록</a> &gt;
    상세정보
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">기업 정보</h2>
    <div style="display:flex; flex-wrap:wrap; gap:1rem;">
      <div style="flex:1 1 45%; display:flex; justify-content:space-between; padding:.5rem 0; border-bottom:1px solid #eee;">
        <strong>설립일</strong><span><?= esc($company['Establishment Date']) ?></span>
      </div>
      <div style="flex:1 1 45%; display:flex; justify-content:space-between; padding:.5rem 0; border-bottom:1px solid #eee;">
        <strong>직원 수</strong><span><?= esc($company['Number of Employees']) ?>명</span>
      </div>
      <div style="flex:1 1 100%; padding:.5rem 0;">
        <strong>업종</strong><br>
        <div style="margin-top:.3rem;">
          <?php foreach (explode('||', $company['Industry Classification']) as $tag): ?>
            <span style="display:inline-block; background:#2e7d32; color:#fff; font-size:0.9rem; border-radius:12px; padding:4px 12px; margin:2px;">
              <?= esc(trim($tag)) ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">기업 설명</h2>
    <?php foreach (explode('▦▦', $company['One-liner Description']) as $part): ?>
      <p style="line-height:1.6; font-size:1rem; color:#444;"><?= esc(trim($part)) ?></p>
    <?php endforeach; ?>
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">상세 설명</h2>
    <?php foreach (explode('▦▦', $company['Detailed Company Description']) as $part): ?>
      <p style="line-height:1.6; font-size:1rem; color:#444;"><?= esc(trim($part)) ?></p>
    <?php endforeach; ?>
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">사무실 주소</h2>
    <p style="font-size:1rem; color:#444;"><?= esc($company['Office Address']) ?></p>
  </div>

  <div style="background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem;">
    <h2 style="font-size:1.2rem; margin-bottom:1rem; color:#2e7d32; border-left:4px solid #2e7d32; padding-left:.5rem;">링크</h2>
    <?php
      $links = explode('|', $company['Social Media URL']);
      foreach ($links as $link):
        $link = trim($link);
        if ($link):
    ?>
      <p><a href="<?= esc($link) ?>" target="_blank" rel="noopener" style="color:#0078ff;"><?= esc($link) ?></a></p>
    <?php endif; endforeach; ?>
  </div>

  <?php if (!empty($blog['items'])): ?>
    <div style="margin-bottom:2rem;">
      <h3 style="font-size: 1.3rem; font-weight: 600; color: #2e7d32; margin-bottom: 1rem;">블로그 검색</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1.2rem;">
        <?php foreach ($blog['items'] as $item): ?>
          <a href="<?= esc($item['link']) ?>" target="_blank"
             style="display:block; padding:1rem; background:#fff; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.05); text-decoration:none; color:#333;">
            <div style="font-weight:600; font-size:1rem; color:#1b5e20; margin-bottom:.5rem;">
              <?= strip_tags($item['title']) ?>
            </div>
            <div style="font-size:0.9rem; color:#555; margin-bottom:.5rem;">
              <?= strip_tags($item['description']) ?>
            </div>
            <div style="font-size:0.8rem; color:#999;">
              <?= esc($item['bloggername']) ?> · <?= date('Y.m.d', strtotime($item['postdate'])) ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($images['items'])): ?>
    <div style="margin-bottom:2rem;">
      <h3 style="font-size: 1.3rem; font-weight: 600; color: #2e7d32; margin-bottom: 1rem;">이미지 검색</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 1rem;">
        <?php foreach ($images['items'] as $img): ?>
          <a href="<?= esc($img['link']) ?>" target="_blank"
             style="text-decoration:none; color:#333; background:#fff; border-radius:8px; overflow:hidden; box-shadow:0 1px 4px rgba(0,0,0,0.05);">
            <img src="<?= esc($img['thumbnail']) ?>" alt="<?= esc($img['title']) ?>" style="width:100%; display:block;">
            <div style="padding:0.5rem; font-size:0.85rem; color:#444; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
              <?= esc(mb_strimwidth(strip_tags($img['title']), 0, 40, '...')) ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

  <div style="display:flex; justify-content:center; gap:20px; margin:2rem 0;">
    <div id="company-tab" class="tab-link active" style="padding:10px 20px; background:#e0f2f1; color:#2e7d32; font-weight:bold; border-radius:10px; cursor:pointer;">기업 리뷰</div>
    <div id="interview-tab" class="tab-link" style="padding:10px 20px; background:#e0f2f1; color:#2e7d32; font-weight:bold; border-radius:10px; cursor:pointer;">면접 리뷰</div>
  </div>

  <section id="company-review" class="reviews active">
    <form action="/company/<?= esc($company['id']) ?>/addCompanyReview" method="POST"
          style="background:#e8f5e9; padding:20px; border-radius:10px; margin-bottom:1.5rem;">
      <textarea name="review" placeholder="리뷰를 작성해 주세요..." required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; font-size:1rem;"></textarea>
      <input type="number" name="rating" min="1" max="5" placeholder="별점 (1~5)" required
             style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; font-size:1rem; margin-top:.5rem;" />
      <button type="submit" style="width:100%; background:#2e7d32; color:white; padding:12px; border:none; border-radius:8px; margin-top:.7rem; font-weight:bold;">리뷰 작성</button>
    </form>
    <?php foreach ($companyReviews as $review): ?>
      <div class="review-card" style="border:1px solid #c8e6c9; background:#f1f8e9; border-radius:10px; padding:15px; margin-bottom:1rem;">
        <p style="font-size:1rem;"><?= esc($review['review']) ?></p>
        <p style="color:#777;"><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
      </div>
    <?php endforeach; ?>
  </section>

  <section id="interview-review" class="reviews" style="display:none;">
    <form action="/company/<?= esc($company['id']) ?>/addInterviewReview" method="POST"
          style="background:#e8f5e9; padding:20px; border-radius:10px; margin-bottom:1.5rem;">
      <textarea name="review" placeholder="리뷰를 작성해 주세요..." required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; font-size:1rem;"></textarea>
      <input type="number" name="rating" min="1" max="5" placeholder="별점 (1~5)" required
             style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; font-size:1rem; margin-top:.5rem;" />
      <select name="review_type" required
              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; font-size:1rem; margin-top:.5rem;">
        <option value="interview">면접</option>
        <option value="employee">직원</option>
      </select>
      <button type="submit" style="width:100%; background:#2e7d32; color:white; padding:12px; border:none; border-radius:8px; margin-top:.7rem; font-weight:bold;">리뷰 작성</button>
    </form>
    <?php foreach ($interviewReviews as $review): ?>
      <div class="review-card" style="border:1px solid #c8e6c9; background:#f1f8e9; border-radius:10px; padding:15px; margin-bottom:1rem;">
        <h4><?= esc($review['review_type'] === 'interview' ? '면접 리뷰' : '직원 리뷰') ?></h4>
        <p><?= esc($review['review']) ?></p>
        <p><strong>별점:</strong> <?= esc($review['rating']) ?> / 5</p>
      </div>
    <?php endforeach; ?>
  </section>

</div>

<script>
  const companyTab = document.getElementById('company-tab');
  const interviewTab = document.getElementById('interview-tab');
  const companyReview = document.getElementById('company-review');
  const interviewReview = document.getElementById('interview-review');

  companyTab.addEventListener('click', () => {
    companyTab.classList.add('active');
    interviewTab.classList.remove('active');
    companyReview.style.display = 'block';
    interviewReview.style.display = 'none';
  });

  interviewTab.addEventListener('click', () => {
    companyTab.classList.remove('active');
    interviewTab.classList.add('active');
    companyReview.style.display = 'none';
    interviewReview.style.display = 'block';
  });
</script>

<?php include APPPATH . 'Views/includes/footer.php'; ?>
