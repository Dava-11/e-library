<?php
// Periksa apakah ada parameter id yang diterima melalui URL
if(isset($_GET['id'])) {

    // Ambil ID mahasiswa dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM tbmhs WHERE id_mhs = '$id'");
    while($r = mysqli_fetch_array($data)){

?>

<div class="container mt-3">
    <form action="simpan-hapus-mahasiswa" method="POST">
        <body>
            <h2 class="text-center"> Anda yakin ingin menghapus data mahasiswa berikut?</h2>
            
                <table class = "table table-striped table-bordered">
                    <thead class="text-center">
                            <tr>
                                <th width="50px">No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class ="text-center"><?php echo $r['id_mhs'];?></td>
                                    <td class ="text-center"><?php echo $r['nim'];?></td>
                                    <td class ="text-center"><?php echo $r['nama_mhs'];?></td>
                                    <td class ="text-center"><?php echo $r['pw'];?></td>
                                </tr>
                        </tbody>
                </table>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div style="text-align: right;">
                        <button type="submit" name="hapus" value="ya" class="btn btn-success">Ya</button>
                        <a href="mahasiswa"><button type="button" class="btn btn-danger">Batal</button></a>
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