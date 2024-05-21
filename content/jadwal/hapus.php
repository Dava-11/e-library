<?php
// Periksa apakah ada parameter id yang diterima melalui URL
if(isset($_GET['id'])) {

    // Ambil ID jadwal dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT j.*, m.nama AS nama_matkul FROM jadwal j JOIN mata_kuliah m ON j.id_matkul = m.id WHERE j.id = '$id'");
    while($r = mysqli_fetch_array($data)){

?>

<div class="container mt-3">
    <form action="simpan-hapus-jadwal" method="POST">
        <body>
            <h2 class="text-center"> Anda yakin ingin menghapus data Jadwal berikut?</h2>
            
                <table class = "table table-striped table-bordered">
                    <thead class="text-center">
                            <tr>
                                <th width="50px">No</th>
                                <th>Tanggal</th>
                                <th>Matkul</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class ="text-center"><?php echo $r['id'];?></td>
                                    <td class ="text-center"><?php echo $r['tanggal'];?></td>
                                    <td class ="text-center"><?php echo $r['nama_matkul'];?></td>
                                </tr>
                        </tbody>
                </table>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div style="text-align: right;">
                        <button type="submit" name="hapus" value="ya" class="btn btn-success">Ya</button>
                        <a href="jadwal"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>


        </body>
    </form>
</div>

<?php
    }
} else {
    echo "ID jadwal tidak ditemukan";
}

?>