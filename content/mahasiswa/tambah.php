<div class="container mt-3">
    <form method="POST" action="simpan-mahasiswa">
    <div class="row mb-3">
        <label class="col-md-3">NIM</label>
        <div class="col-md-9">
        <input type="text" class="form-control" name="nim" required>
    </div>
</div>
    <div class="row mb-3">
        <label class="col-md-3">Nama Mahasiswa</label>
        <div class="col-md-9">
        <input type="text" class="form-control" name="nama" required>
    </div>
</div>
    <button type="submit" class="btn btn-success" >Simpan</button>
    <a href="mahasiswa"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
</div>