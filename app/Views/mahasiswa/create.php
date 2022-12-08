<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="my-3">Form Tambah Mahasiswa/Mahasiswi</h3>
                <form action="/mahasiswa/save" method="post">
                    <div class="row mb-3">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NIM" name="NIM" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Nama Lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kota Asal" class="col-sm-2 col-form-label">Kota Asal</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Tanggal Lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Nama Ortu" class="col-sm-2 col-form-label">Nama Ortu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Alamat Ortu" class="col-sm-2 col-form-label">Alamat Ortu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kode Pos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="No Telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="status_mhs" name="status_mhs" autofocus>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>