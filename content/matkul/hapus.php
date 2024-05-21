<?php
// Periksa apakah ada parameter id yang diterima melalui URL
if(isset($_GET['id'])) {

    // Ambil ID matkul dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM mata_kuliah WHERE id = '$id'");
    while($r = mysqli_fetch_array($data)){

?>

<div class="container mt-3">
    <form action="simpan-hapus-matkul" method="POST">
        <body>
            <h2 class="text-center"> Anda yakin ingin menghapus data Matkul berikut?</h2>
            
                <table class = "table table-striped table-bordered">
                    <thead class="text-center">
                            <tr>
                                <th width="50px">No</th>
                                <th>Mata Kuliah</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class ="text-center"><?php echo $r['id'];?></td>
                                    <td class ="text-center"><?php echo $r['nama'];?></td>
                                </tr>
                        </tbody>
                </table>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div style="text-align: right;">
                        <button type="submit" name="hapus" value="ya" class="btn btn-success">Ya</button>
                        <a href="matkul"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>


        </body>
    </form>
</div>

<?php
    }
} else {
    echo "ID mahasiswa tidak ditemukan";
}

?>