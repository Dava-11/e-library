<?php
if (isset($_GET['id'])) {
    
    // Mengambil id mahasiswa dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM tbmhs WHERE id_mhs = '$id'");
    while($a = mysqli_fetch_array($data)){
?>
?>
<div class="container mt-3">
    <form method="POST" action="simpan-edit-mahasiswa">
        <div class="row mb-3">
            <label class="col-md-3 col-sm-3">NIM</label>
            <div class="col-md-9 col-sm-9">
                <!-- Use the hidden input field to send the ID for updating -->
                <input type="hidden" class="form-control" name="id" value="<?php echo $a['id_mhs']; ?>">
                <input type="text" class="form-control" name="nim" value="<?php echo $a['nim']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Nama Mahasiswa</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama" value="<?php echo $a['nama_mhs']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Password</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="pw" value="<?php echo $a['pw']; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-success">UPDATE</button>
        <a href="mahasiswa"><button type="button" class="btn btn-danger">Batal</button></a>
    <input type = "hidden" name = "id" value="<?php echo $a['id_mhs'];?>"><br>
    </form>
</div>
<?php
    } 

} else {
    echo "ID parameter is missing.";
}
?>
