
<?php
    include "../../konfig/koneksi.php";

    if($_GET['actmk'] == 'simpan'){
        // Fetch the last id from the matkul table
        $result = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM mata_kuliah");
        $row = mysqli_fetch_assoc($result);
        $last_id = $row['max_id'];

        // Increment the last id by 1
        $new_id = $last_id + 1;

        // Insert the new data with the incremented id
        mysqli_query($conn, "INSERT INTO mata_kuliah (id, nama) VALUES ('$new_id','$_POST[nama]')");

        // Redirect to matkul page
        header("location: matkul");
    }
?>