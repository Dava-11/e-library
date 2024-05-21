<div class="container mt-3">
    <form method="POST" action="simpan-jadwal">
        <div class="row mb-3">
            <label class="col-md-3">Tanggal</label>
            <div class="col-md-9">
                <input type="date" class="form-control" name="tanggal" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Matkul</label>
            <div class="col-md-9">
                <select class="form-control" name="id_matkul" required>
                    <?php
                    // Tambahkan opsi "Pilih Mata Kuliah"
                    echo "<option value=''>--Pilih Mata Kuliah--</option>";

                    // Query untuk mendapatkan data matkul
                    $sql = "SELECT id, nama FROM mata_kuliah";
                    $result = mysqli_query($conn, $sql);

                    // Loop untuk menampilkan opsi select
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['nama']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="jadwal"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
</div>
