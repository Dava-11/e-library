<?php
// Memastikan parameter id ada dalam url
if (isset($_GET['id'])) {
    
    // Mengambil id mahasiswa dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM mata_kuliah WHERE id = '$id'");
    while($r = mysqli_fetch_array($data)){
?>

<div class="container mt-3">
    <form method="POST" action="simpan-edit-matkul">
    <div class="row mb-3">
        <label class="col-md-3">Nama Matkul</label>
        <div class="col-md-9">
        <input type="text" class="form-control" name="nama" value="<?php echo $r['nama']; ?>" required>
    </div>
    
</div>
    <button type="submit" class="btn btn-success" >Simpan</button>
    <a href="matkul"><button type="button" class="btn btn-danger">Batal</button></a>
    <input type = "hidden" name = "id" value="<?php echo $r['id'];?>"><br>
    </form>
</div>


<?php
}
    } else {
        echo "ID Matkul tidak ditemukan";
    }
?>
