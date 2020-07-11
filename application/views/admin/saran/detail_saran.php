<div class="container">

    <div class="section-title" data-aos="fade-up">
        <br>
        <h2 align="center">Pengajuan Saran</h2>
    </div>
    <br>
    <div class="row content">
        <?php foreach ($detail_saran as $saran) { ?>
            <div class="card-body shadow mb-4">

                <form class="pengaduan" method="post" action="#">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Detail Pengajuan Saran</h3>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email</label>
                            <input type="email" class="form-control" value="<?= $saran->email_pemohon ?>" id="email" name="email" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-dark">Nama Pelapor</label>
                            <input type="text" class="form-control" value="<?= $saran->nama_pemohon ?>" id="nama" name="nama" placeholder="your name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="number" class="form-control" value="<?= $saran->no_HP_pemohon ?>" id="telp" name="telp" placeholder="your phone number " readonly>
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="text-dark">Nomor KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $saran->no_KTP_pemohon ?>" placeholder="your ktp number" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="text-dark">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $saran->alamat_pemohon ?>" placeholder="your address" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan" class="text-dark">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" value="<?= $saran->kecamatan_pemohon ?>" name="kecamatan" placeholder="your kecamatan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten" class="text-dark">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" value="<?= $saran->kabupaten_pemohon ?>" name="kabupaten" placeholder="your kabupaten" readonly>
                        </div>
                        <div class="form-group">
                            <label for="provinsi" class="text-dark">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" value="<?= $saran->provinsi_pemohon ?>" name="provinsi" placeholder="your province" readonly>
                        </div>
                        <div class="form-group">
                            <label for="profesi" class="text-dark">Profesi Pelapor</label>
                            <input type="text" class="form-control" id="profesi" name="profesi" value="<?= $saran->profesi_pemohon ?>" placeholder="your profesi" readonly>
                        </div>
                        <br>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Keterangan Saran</h3>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="text-dark">Judul Saran</label>
                            <input type="text" class="form-control" id="judul" value="<?= $saran->judul_saran ?>" name="judul" placeholder="judul saran" readonly>
                        </div>

                        <div class="form-group">
                            <label for="saran" class="text-dark">Redaksi Saran</label>
                            <textarea name="saran" class="form-control" placeholder="deskripsi saran"><?= $saran->redaksi_saran ?></textarea readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="text-dark">Status saran</label>
                            <input type="text" class="form-control" id="Status" value="<?= $saran->status_saran ?>" name="status" placeholder="status saran pengaduan" readonly>
                        </div>
                        <br>

                        <a href="<?= site_url('Saran/tampil_data') ?>">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>
                </form>
            </div>
        <?php } ?>
    </div>
</div>