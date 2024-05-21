<?php
    include "../../konfig/koneksi.php";

    if($_GET['actjw'] == 'simpan'){
        // Fetch the last id from the jadwal table
        $result = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM jadwal");
        $row = mysqli_fetch_assoc($result);
        $last_id = $row['max_id'];

        // Increment the last id by 1
        $new_id = $last_id + 1;

        // Insert the new data with the incremented id
        mysqli_query($conn, "INSERT INTO jadwal (id, tanggal, id_matkul) VALUES ('$new_id', '$_POST[tanggal]', '$_POST[id_matkul]')");

        // Redirect to dosen page
        header("location: jadwal");
    }
?>