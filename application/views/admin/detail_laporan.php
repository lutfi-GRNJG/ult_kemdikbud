<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Form Pengaduan</h2>
    </div>

    <div class="row content">

        <div class="card-body shadow mb-4">

            <form class="pengaduan" method="post" action="<?= site_url('pengaduan/tambah_pengaduan') ?>">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class=" mb-0 ">Data Pelapor</h3>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-dark">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="your email address">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="text-dark">Nama Pelapor</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="your name">
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="number" class="form-control" id="telp" name="telp" placeholder="your phone number ">
                    </div>
                    <div class="form-group">
                        <label for="ktp" class="text-dark">Nomor KTP</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" placeholder="your ktp number">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="text-dark">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="your address">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan" class="text-dark">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="your kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="kabupaten" class="text-dark">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="your kabupaten">
                    </div>
                    <div class="form-group">
                        <label for="provinsi" class="text-dark">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="your province">
                    </div>
                    <div class="form-group">
                        <label for="profesi" class="text-dark">Profesi Pelapor</label>
                        <input type="text" class="form-control" id="profesi" name="profesi" placeholder="your profesi">
                    </div>
                    <br>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class=" mb-0 ">Keterangan Laporan</h3>
                    </div>

                    <div class="form-group">
                        <label for="judul" class="text-dark">Judul Laporan</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul laporan pengaduan">
                    </div>

                    <div class="form-group">
                        <label for="laporan" class="text-dark">Redaksi Laporan</label>
                        <textarea name="laporan" class="form-control" placeholder="deskripsi laporan/kejadian"></textarea>
                    </div>



                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>