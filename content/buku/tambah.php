<div class="container mt-3">
        <form method="POST" action="mahasiswa-simpan">
            <div class="row mb-3">
                <label class="col-md-3 col-sm-3">NIM</label>
                <div class="col-md-9 col-sm-9">
                <input type="text" class="form-control" name="nim" required>
            </div>
</div>
            <div class="row mb-3">
            <label class="col-md-3">Nama Mahasiswa</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="nama" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Password</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="pw">
            </div>
        </div>
            <button type="submit" class="btn btn-success">SIMPAN</button>
        </form>
    </div>

