<?php
// Memastikan parameter id ada dalam URL
if (isset($_GET['id'])) {
    
    // Mengambil id dosen dari URL
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM dosen WHERE id = '$id'");
    while ($r = mysqli_fetch_array($data)) {
        // Ambil ID mata kuliah yang dipilih sebelumnya oleh dosen
        $id_matkul_selected = $r['id_matkul'];
?>

<div class="container mt-3">
    <form method="POST" action="simpan-edit-dosen">
        <div class="row mb-3">
            <label class="col-md-3">Nama Dosen</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama" value="<?php echo $r['nama']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Matkul</label>
            <div class="col-md-9">
                <select class="form-control" name="id_matkul" required>
                    <?php
                    // Query untuk mendapatkan semua data mata kuliah
                    $sql = "SELECT id, nama FROM mata_kuliah";
                    $result = mysqli_query($conn, $sql);

                    // Loop untuk menampilkan opsi select
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Tentukan opsi yang dipilih sebelumnya sebagai default
                        $selected = ($row['id'] == $id_matkul_selected) ? 'selected' : '';
                        echo "<option value=\"{$row['id']}\" $selected>{$row['id']} - {$row['nama']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="dosen"><button type="button" class="btn btn-danger">Batal</button></a>
        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
    </form>
</div>

<?php
    }
} else {
    echo "ID dosen tidak ditemukan";
}
?>
