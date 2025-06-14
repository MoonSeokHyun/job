<?php
// 안전 초기화
$facilityName = esc($business['business_name'] ?? '사업장명');
$zipCode = esc($business['zip_code'] ?? '');
$landLotAddress = esc($business['landlot_address'] ?? '');
$streetAddress = esc($business['street_address'] ?? '');
$businessType = esc($business['business_type'] ?? '');
$owners = esc($business['number_of_owners'] ?? '');

// 구·읍·면 추출 (주소에서 지역명 추출)
preg_match('/([가-힣]+구|[가-힣]+읍|[가-힣]+면)/', $landLotAddress, $m);
$district = $m[0] ?? '지역';

// SEO용 메타 태그 설정
$seoTitle = esc("{$facilityName} 상세정보 – {$district} 사업장 주소・업종・사업자 수");
$seoDescription = esc("{$facilityName} 사업장의 상세 주소, 업종, 사업자 수 등 정확한 정보를 제공합니다. {$district} 지역 사업장 관련 최신 정보 확인하기.");
$seoKeywords = esc("{$facilityName}, 사업장, {$district}, 업종, 주소, 사업자 수, {$businessType}");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <title><?= $seoTitle ?></title>
  <meta name="description" content="<?= $seoDescription ?>" />
  <meta name="keywords" content="<?= $seoKeywords ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <style>
    body { background: #f5f5f5; font-family: 'Noto Sans KR', sans-serif; color: #333; margin:0; padding:0; }
    a { color:#0078ff; text-decoration:none; }
    .container{ max-width:800px; margin:2rem auto; padding:0 1rem; }
    .content-title{ font-size:2rem; margin-bottom:.5rem; border-bottom:2px solid #0078ff; padding-bottom:.3rem; }
    .breadcrumb{ font-size:.9rem; color:#555; margin-bottom:1.5rem; }
    .section{ background:#fff; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,0.1); margin-bottom:1.5rem; padding:1.5rem; }
    .section h2{ font-size:1.2rem; margin-bottom:1rem; color:#0078ff; border-left:4px solid #0078ff; padding-left:.5rem; }
    .detail-list{ margin:0; padding:0; }
    .detail-item{ display:flex; justify-content:space-between; padding:.75rem 0; border-bottom:1px solid #eee; }
    .detail-item:last-child{ border-bottom:none; }
    .label{ font-weight:600; color:#333; }
    .value{ color:#555; text-align:right; }
  </style>
</head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6686738239613464" crossorigin="anonymous"></script>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

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

<div class="container">
  <h1 class="content-title"><?= $facilityName ?></h1>
  <div class="breadcrumb">
    <a href="<?= site_url() ?>">홈</a> &gt;
    <a href="<?= site_url('business') ?>">사업장 목록</a> &gt;
    상세정보
  </div>

  <!-- 기본 정보 -->
  <div class="section">
    <h2>기본 정보</h2>
    <div class="detail-list">
      <div class="detail-item"><div class="label">사업장명</div><div class="value"><?= $facilityName ?></div></div>
      <div class="detail-item"><div class="label">우편번호</div><div class="value"><?= $zipCode ?></div></div>
      <div class="detail-item"><div class="label">지번주소</div><div class="value"><?= $landLotAddress ?></div></div>
      <div class="detail-item"><div class="label">도로명주소</div><div class="value"><?= $streetAddress ?></div></div>
      <div class="detail-item"><div class="label">업종</div><div class="value"><?= $businessType ?></div></div>
      <div class="detail-item"><div class="label">사업자 수</div><div class="value"><?= $owners ?></div></div>
    </div>
  </div>

  

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

<?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
