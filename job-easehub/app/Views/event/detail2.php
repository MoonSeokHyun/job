<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>이벤트 2 - 리뷰 작성</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f9f9f9; }
        .container { max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 10px; }
        h1 { color: #007bff; }
    </style>
</head>
<body>
<?php include APPPATH . 'Views/includes/header.php'; ?>
<div class="container">
    <h1>기업 / 면접 리뷰 이벤트</h1>
    <p>
        잡허브에 <strong>기업 리뷰</strong> 또는 <strong>면접 후기</strong>를 남겨주세요!<br>
        정성스럽게 작성해주신 분 중 추첨을 통해 <strong>기프티콘</strong>을 보내드립니다.
    </p>
    <ul>
        <li>✅ 참여 방법: 리뷰 작성 (기업 리뷰 또는 면접 후기)</li>
        <li>✅ 보상: 추첨을 통해 기프티콘 증정</li>
        <li>✅ 기간: 상시 진행</li>
        <li>✅ 발표: 이메일 개별 발송 (별도 공지 없음)</li>
    </ul>
    <a href="/event">← 이벤트 목록으로</a>
</div>
<?php include APPPATH . 'Views/includes/footer.php'; ?>
</body>
</html>
