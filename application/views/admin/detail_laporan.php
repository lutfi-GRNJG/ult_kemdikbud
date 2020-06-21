<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Form Pengaduan</h2>
    </div>

    <div class="row content">
        <?php foreach ($detail_laporan as $laporan) { ?>
            <div class="card-body shadow mb-4">

                <form class="pengaduan" method="post" action="<?= site_url('pengaduan/tambah_pengaduan') ?>">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Detail Laporan</h3>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email</label>
                            <input type="email" class="form-control" value="<?= $laporan->alamat_email ?>" id="email" name="email" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-dark">Nama Pelapor</label>
                            <input type="text" class="form-control" value="<?= $laporan->nama_pelapor ?>" id="nama" name="nama" placeholder="your name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="number" class="form-control" value="<?= $laporan->nomor_telepon ?>" id="telp" name="telp" placeholder="your phone number " readonly>
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="text-dark">Nomor KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $laporan->nomor_ktp ?>" placeholder="your ktp number" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="text-dark">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $laporan->alamat_rumah ?>" placeholder="your address" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan" class="text-dark">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" value="<?= $laporan->kecamatan ?>" name="kecamatan" placeholder="your kecamatan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten" class="text-dark">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" value="<?= $laporan->kabupaten ?>" name="kabupaten" placeholder="your kabupaten" readonly>
                        </div>
                        <div class="form-group">
                            <label for="provinsi" class="text-dark">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" value="<?= $laporan->provinsi ?>" name="provinsi" placeholder="your province" readonly>
                        </div>
                        <div class="form-group">
                            <label for="profesi" class="text-dark">Profesi Pelapor</label>
                            <input type="text" class="form-control" id="profesi" name="profesi" value="<?= $laporan->profesi ?>" placeholder="your profesi" readonly>
                        </div>
                        <br>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Keterangan Laporan</h3>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="text-dark">Judul Laporan</label>
                            <input type="text" class="form-control" id="judul" value="<?= $laporan->judul_laporan ?>" name="judul" placeholder="judul laporan pengaduan" readonly>
                        </div>

                        <div class="form-group">
                            <label for="laporan" class="text-dark">Redaksi Laporan</label>
                            <textarea name="laporan" class="form-control" value="<?= $laporan->redaksi_laporan ?>" readonly><?= $laporan->redaksi_laporan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="text-dark">Status Laporan</label>
                            <input type="text" class="form-control" id="Status" value="<?= $laporan->status_laporan ?>" name="status" placeholder="status laporan pengaduan" readonly>
                        </div>



                </form>
            </div>
        <?php } ?>
    </div>
</div>