<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Permohonan Informasi</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v2.1.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <!-- <h1 class="text-light"><a href="index.html"><span>Vesperr</span></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="<?= site_url('Home') ?>"><img src="assets/img/Kemdikbud.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="<?= site_url('Home') ?>">Home</a></li>
                    <li><a href="<?= site_url('Home') ?>">About</a></li>
                    <li><a href="<?= site_url('Home') ?>">Layanan</a></li>
                    <li><a href="<?= site_url('Home') ?>">Prosedur</a></li>


                    <li class="get-started"><a href="<?= site_url('Login') ?>">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <br><br>
    <!-- ======= Hero Section ======= -->
    <section class="d-flex align-items-center">

        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Form Permohonan</h2>
            </div>

            <div class="row content">

                <div class="card-body shadow mb-4">

                    <form class="pengaduan" method="post" action="<?= site_url("Permohonan_informasi/tambah_permohonan_informasi") ?>">
                        <div class="card-body">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h3 class=" mb-0 ">Data Pemohon</h3>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-dark">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="your email address">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="text-dark">Nama Pemohon</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="your full name">
                            </div>
                            <div class="form-group">
                                <label for="telp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="your phone number ">
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
                                <label for="profesi" class="text-dark">Profesi Pemohon</label>
                                <input type="text" class="form-control" id="profesi" name="profesi" placeholder="your profesi">
                            </div>
                            <br>
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h3 class=" mb-0 ">Keterangan Permohonan Informasi</h3>
                            </div>

                            <div class="form-group">
                                <label for="judul" class="text-dark">Judul Informasi</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul informasi yang dibutuhkan">
                            </div>

                            <div class="form-group">
                                <label for="rincian" class="text-dark">Rincian</label>
                                <textarea name="rincian" class="form-control" placeholder="rincian informasi yang dibuthkan"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="tujuan" class="text-dark">Tujuan</label>
                                <textarea name="tujuan" class="form-control" placeholder="tujuan penggunaan informasi"></textarea>
                            </div>


                            <br>
                            <span class="float-right">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </span>

                    </form>
                </div>

            </div>
        </div>


    </section><!-- End Hero -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Kemdikbud</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="<?= site_url('Home') ?>" class="scrollto">Home</a>
                        <a href="<?= site_url('Home') ?>" class="scrollto">About</a>
                        <a href="<?= site_url('Home') ?>" class="scrollto">Layanan</a>
                        <a href="<?= site_url('Home') ?>" class="scrollto">Prosedur</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>