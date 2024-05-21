<?php
    include "../../konfig/koneksi.php";

    if($_GET['act_edt_mhs'] == 'simpanedt'){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

        // Update data mahasiswa di database
        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama' WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah operasi update berhasil
        if ($result) {
            // Jika berhasil, arahkan pengguna kembali ke halaman edit.php dengan pesan sukses
            header("Location: mahasiswa");
            exit;

        } else {
            // Jika terjadi kesalahan, beri tahu pengguna dengan pesan error
            echo "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
        }
}
?>