<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_edt_mk'] == 'simpanedt'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

        // Update data mata_kuliah di database
        $query = "UPDATE mata_kuliah SET nama='$nama' WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah operasi update berhasil
        if ($result) {
            // Jika berhasil, arahkan pengguna kembali ke Matkul
            header("Location: matkul");
            exit;

        } else {
            // Jika terjadi kesalahan, beri tahu pengguna dengan pesan error
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
        }
}
?>