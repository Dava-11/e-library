<?php
    include "../../konfig/koneksi.php";

    if($_GET['actds'] == 'simpan'){
        // Fetch the last id from the dosen table
        $result = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM dosen");
        $row = mysqli_fetch_assoc($result);
        $last_id = $row['max_id'];

        // Increment the last id by 1
        $new_id = $last_id + 1;

        // Insert the new data with the incremented id
        mysqli_query($conn, "INSERT INTO dosen (id, nama, id_matkul) VALUES ('$new_id', '$_POST[nama]', '$_POST[id_matkul]')");

        // Redirect to dosen page
        header("location: dosen");
    }
?>