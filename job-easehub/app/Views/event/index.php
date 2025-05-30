<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>이벤트 - 잡허브</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; background: #fff; border-radius: 10px; }
        .card { margin-bottom: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background: #fafafa; }
        .card img { width: 100%; max-height: 200px; object-fit: cover; border-radius: 10px; }
        .card h2 { margin: 15px 0 10px; }
        .card p { color: #555; }
        .card a { display: inline-block; margin-top: 10px; background: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; }
        .card a:hover { background: #0056b3; }
    </style>
</head>
<body>

<?php include APPPATH . 'Views/includes/header.php'; ?>

<div class="container">
    <h1>진행 중인 이벤트</h1>

    <?php foreach ($events as $event): ?>
        <div class="card">
            <img src="<?= $event['image'] ?>" alt="이벤트 이미지">
            <h2><?= esc($event['title']) ?></h2>
            <p><?= esc($event['description']) ?></p>
            <a href="/event/<?= $event['id'] ?>">자세히 보기</a>
        </div>
    <?php endforeach; ?>
</div>

<?php include APPPATH . 'Views/includes/footer.php'; ?>

</body>
</html>
