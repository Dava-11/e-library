<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_del_jw'] == 'simpandel'){
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $id_matkul = $_POST['id_matkul'];


        // Update data jadwal di database
        $query = "DELETE FROM jadwal WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah operasi update berhasil
        if ($result) {
            // Jika berhasil, arahkan pengguna kembali ke halaman edit.php dengan pesan sukses
            header("Location: jadwal");
            exit;

        } else {
            // Jika terjadi kesalahan, beri tahu pengguna dengan pesan error
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
        }
}
?>