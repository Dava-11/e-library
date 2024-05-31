<div class="container mt-3">
        <form method="POST" action="buku-simpan">
            <div class="row mb-3">
                <label class="col-md-3 col-sm-3">id</label>
                <div class="col-md-9 col-sm-9">
                <input type="text" class="form-control" name="id" required>
            </div>
</div>
            <div class="row mb-3">
            <label class="col-md-3">Judul Buku</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="judul" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Penulis</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="pencipta">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Deskripsi</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="deskripsi">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Tahun Terbit</label>
                <div class="col-md-9">
                <input type="date" class="form-control" name="thn_terbit">
            </div>
        </div>
            <button type="submit" class="btn btn-success">SIMPAN</button>
        </form>
    </div>

