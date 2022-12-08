<body>
    <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th scope="col">No</th> -->
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Kota Asal</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nama Ortu</th>
                                <th scope="col">Alamat Ortu</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php $i = 1; ?> -->
                            <?php foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <!-- <th scope="row"><?= $i++; ?></th> -->
                                    <td><?= $mhs['NIM']; ?></td>
                                    <td><?= $mhs['nama_lengkap']; ?></td>
                                    <td><?= $mhs['kota_asal']; ?></td>
                                    <td><?= $mhs['tanggal_lahir']; ?></td>
                                    <td><?= $mhs['nama_ortu']; ?></td>
                                    <td><?= $mhs['alamat_ortu']; ?></td>
                                    <td><?= $mhs['kode_pos']; ?></td>
                                    <td><?= $mhs['no_telp']; ?></td>
                                    <td><?= $mhs['status_mhs']; ?></td>
                                    <td><a href="<?= base_url('/mahasiswa/edit').'/'.$mhs['NIM']?>" class="btn btn-primary"> Update </a><td>
                                    <td><a href="<?= base_url('/mahasiswa/delete/').'/'.$mhs['NIM']?>" class="btn btn-primary" > Hapus </a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a href="/mahasiswa/create" class="btn btn-primary mb-1"> Tambah Data </a>
                </div>
            </div>
        </div>
</body>