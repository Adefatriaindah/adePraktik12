<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>

</head>
<body>
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <td><b>NO</b></td>
                    <td><b>Cover</b></td>
                    <td><b>Nama Film</b></td>
                    <td><b>Genre</b></td>
                    <td><b>Durasi</b></td>
                    <td><b>Aksi</b></td> 
                </tr>

                <?php $i = 1;
                foreach($data_film as $film) : ?>

                <tr>
                        <td><?= $i++ ?></td>
                        <td><img src="/assets/cover/<?= $film["cover"] ?>" class="img-fluid" alt="..." width ="75px"> </td>
                        <td><?= $film['nama_film'] ?></td>
                        <td><?= $film['nama_genre'] ?></td>
                        <td><?= $film['duration'] ?></td>
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