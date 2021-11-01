<?php
include 'db_mhs.php';
$id = '';
$nim = '';
$namamhs = '';
$jk = '';
$alamat = '';
$kota = '';
$email = '';

if (isset($_GET['ubah']))
{
    $id = $_GET['ubah'];
    $query = "SELECT * FROM tbl_mhs WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nim = $result['nim'];
    $namamhs = $result['namamhs'];
    $jk = $result['jk'];
    $alamat = $result['alamat'];
    $kota = $result['kota'];
    $email = $result['email'];
}
?>
<!DOCTYPE html>
<head>
    <title>FORM MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #9E7777;
        }
        .card-header{
            background-color: #DEBA9D;
        }
        .nav-link{
            color: #433D3C;
        }
        .card-body{
            background-color: #F5E8C7;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="form.php">Form Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="datamhs.php">Data Mahasiswa</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <h1 class="card-title text-center">Form Mahasiswa</h1>

            <form action="proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Anda" value="<?php echo $nim; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="namamhs" class="form-control" placeholder="Masukkan Nama Anda" value="<?php echo $namamhs; ?>">
                </div>
                <br>
                <div class="form-froup">
                    <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="L" <?php if($jk=="L") {
                        echo "checked=\"checked\" ";} ?>>
                            <label class="form-check-label" for="L">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="P" <?php if($jk=="P") {
                        echo "checked=\"checked\" ";} ?>>
                            <label class="form-check-label" for="P">Perempuan</label>
                        </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah Anda" value="<?php echo $alamat; ?>"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota Alamat Rumah Anda" value="<?php echo $kota; ?>"> 
                </div>
                <br>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" value="<?php echo $email; ?>">
                </div>
                <br>
                <div class="form-gorup">
                    <label for="foto" class="form-label">Pass Foto</label>
                    <input class="form-control" type="file" name="foto" >
                </div>
                <br>
                <div class="col">
                <?php
                    if (isset($_GET['ubah']))
                    {
                    ?>
                        <button type="submit" name="submit" value="edit" class="btn btn-success btn-sm">Simpan</button>  
                    <?php
                    }
                    else
                    {
                    ?>
                        <button type="submit" name="submit" value="add" class="btn btn-success btn-sm">Simpan</button>
                    <?php
                    }
                    ?>
                </div>
            </form>
            
        </div>
    </div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>