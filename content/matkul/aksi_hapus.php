<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_del_mk'] == 'simpandel'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

        // Update data mahasiswa di database
        $query = "DELETE FROM mata_kuliah WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah operasi update berhasil
        if ($result) {
            // Jika berhasil, arahkan pengguna kembali ke halaman Matkul
            header("Location: matkul");
            exit;

        } else {
            // Jika terjadi kesalahan, beri tahu pengguna dengan pesan error
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
        }
}
?>