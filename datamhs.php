<?php
include 'db_mhs.php';
$query = "SELECT * FROM tbl_mhs;";
$sql = mysqli_query($conn, $query);
$id = 1;
?>

<!DOCTYPE html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body{
            background-color: #00334E;
        }
        .card-header{
            background-color: #5588A3;
        }
        .nav-link{
            color: white;
        }
        .img{
            width: 70px;
        }
    </style>
</head>

<body>
<div class="container">

    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="form.php">Form Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="datamhs.php">Data Mahasiswa</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <h1 class="card-title text-center">Data Mahasiswa</h1>

            <table class="table table-striped">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pass Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result = mysqli_fetch_assoc($sql)) : ?>
                    <tr>
                        <th scope="row"><?= $id++; ?></th>
                        <td><?= $result['nim']; ?></td>
                        <td><?= $result['namamhs']; ?></td>
                        <td><?= $result['jk']; ?></td>
                        <td><?= $result['alamat']; ?></td>
                        <td><?= $result['kota']; ?></td>
                        <td><?= $result['email']; ?></td>
                        <td><img src="img/<?= $result['foto']; ?>" class="img"></td>
                        <td>
                            <a href="form.php?ubah=<?= $result['id']; ?>" type="button" class="btn btn-warning" name="edit">Edit</a>
                            <a href="proses.php?hapus=<?= $result['id']; ?>" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                        <?php endwhile; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>