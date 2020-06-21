<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Pengaduan</title>
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
                <a href="index.html"><img src="assets/img/Kemdikbud.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#more-services">Layanan</a></li>
                    <li><a href="#prosedur">Prosedur</a></li>
                    <li><a href="#link">Link Terkait</a></li>


                    <li class="get-started"><a href="#">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <br><br>
    <!-- ======= Hero Section ======= -->
    <section class="d-flex align-items-center">

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


    </section><!-- End Hero -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
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