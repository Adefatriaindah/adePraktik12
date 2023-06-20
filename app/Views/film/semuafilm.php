<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
    <link rel = "stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <h4>Daftar Film</h4>
    <div class="row">
        <?php foreach($semuafilm as $film) : ?>
        <div class="col-md-3">
        <div class="card">
        <img src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?= $film["nama_film"] ?></h5>
        <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>
        <a href="#" class="btn btn-primary">Detail</a>
        <a href="#" class="btn btn-succes">Update</a>
        <a href="#" class="btn btn-warning">Delete</a>
    </div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>

<?= $this->endSection() ?>
</body>
</html>