<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_del_ds'] == 'simpandel'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $id_matkul = $_POST['id_matkul'];


        // Update data mahasiswa di database
        $query = "DELETE FROM dosen WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah operasi update berhasil
        if ($result) {
            // Jika berhasil, arahkan pengguna kembali ke halaman edit.php dengan pesan sukses
            header("Location: dosen");
            exit;

        } else {
            // Jika terjadi kesalahan, beri tahu pengguna dengan pesan error
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
        }
}
?>