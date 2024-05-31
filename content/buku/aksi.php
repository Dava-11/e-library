<?php
include "../../konfig/koneksi.php";

if($_GET['act']=='simpan'){
    mysqli_query($conn, "INSERT INTO buku(id, judul, pencipta, deskripsi, thn_terbit) VALUES
    ('$_POST[id]', '$_POST[judul]', '$_POST[pencipta]', , '$_POST[deskripsi]', '$_POST[thn_terbit]')");

    header("location: mahasiswa");
}

?>
