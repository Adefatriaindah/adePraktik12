<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
    <link rel = "stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <td><b>ID Genre</b></td>
                    <td><b>Nama Genre</b></td>
                    <td><b>Aksi</b></td> 
                </tr>

                <?php $i = 1;
                foreach($data_genre as $genre) : ?>

                <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $genre['nama_genre'] ?></td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                            <a href="" class="btn btn-warning">Delete</a>
                        </td>
                

                    <?php endforeach; ?>
                
            </table>
        </div>
    </div>
</div>

    <?= $this->endSection() ?>
</body>
</html>