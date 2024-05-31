<?php
include "../../konfig/koneksi.php";

if($_GET['act']=='simpan'){
    mysqli_query($conn, "INSERT INTO tbmhs(nim, nama_mhs, pw) VALUES
    ('$_POST[nim]', '$_POST[nama]', '$_POST[pw]')");

    header("location: mahasiswa");
}

?>
