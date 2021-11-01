<?php
include 'db_mhs.php';

if( isset($_POST['submit'])){
    if( $_POST['submit'] == "add"){
        $nim = $_POST['nim'];
		$namamhs = $_POST['namamhs'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];

        $query = "INSERT INTO tbl_mhs VALUES('', '$nim', '$namamhs', '$jk', '$alamat', '$kota', '$email', '$foto')";
		$sql = mysqli_query($conn, $query);

        if( $sql )
		{
			header("location: datamhs.php");
		}
		else
		{
			echo $query;
		}
    }

    if( $_POST['submit'] == "edit"){
        $nim = $_POST['nim'];
		$namamhs = $_POST['namamhs'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];

        $query ="UPDATE tbl_mhs SET nim = '$nim', namamhs = '$namamhs', jk = '$jk', alamat = '$alamat', kota = '$kota', email = '$email', foto='$foto' WHERE id='$id';";
        $sql = mysqli_query($conn, $query);

        if( $sql )
		{
			header("location: datamhs.php");
		}
		else
		{
			echo $query;
		}
    }

}

if (isset($_GET['hapus']))
    {
        $id = $_GET['hapus'];
        $query = "DELETE FROM tbl_mhs WHERE id ='$id'; ";
        $sql = mysqli_query($conn, $query);
        if($sql)
        {
            header("location: datamhs.php");
        }
        else
        {
            echo $query;
        }
    }

?>