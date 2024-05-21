<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_edt_jw'] == 'simpanedt'){
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $id_matkul = $_POST['id_matkul'];


        // Update data jadwal di database
        $query = "UPDATE jadwal SET tanggal='$tanggal', id_matkul='$id_matkul' WHERE id='$id'";
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