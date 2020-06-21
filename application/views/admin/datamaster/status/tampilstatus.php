<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Status
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <!-- Konten -->
    <div class="m-content">
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-primary"></i>
            </div>
            <div class="m-alert__text">
                Halaman ini untuk mengatur status dan jadwal
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Daftar Status
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div>
                            <!-- begin:add button -->
                            <div class="float-right">
                                <a href="#">
                                    <button type="button" data-toggle="modal" data-target="#tambahstatus" class="btn btn-primary">Tambah Status</button>
                                </a>
                            </div>
                            <!-- end: add button -->

                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-xl-11 order-2 order-xl-1">
                                        <div class="form-group m-form__group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="m-input-icon m-input-icon--left">
                                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Status.." id="caristatus">
                                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                                        <span>
                                                            <i class="la la-search"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search Form -->
                        </div>


                        <!--begin: Datatable -->
                        <table class="datastatus" id="datastatus" style="width: 100% !important">
                            <thead>
                                <tr>
                                    <th title="Field #1">
                                        No
                                    </th>
                                    <th title="Field #2">
                                        Status
                                    </th>
                                    <th title="Field #3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($daftar_status as $status) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $status->keterangan_status_karyawan ?></td>
                                        <td>
                                            <span>
                                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#editstatus" data-id="<?= $status->id_status ?>">
                                                    <i class=" la la-edit"></i>
                                                </a>
                                                <a onclick="konfirmasi(<?= $status->id_status ?>)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" title="Delete">
                                                    <i class="la la-trash"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php $no = 1 + $no;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Daftar Jadwal
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div>
                            <!-- begin:add button -->
                            <div class="float-right">
                                <a href="#">
                                    <button type="button" data-toggle="modal" data-target="#tambahjadwal" class="btn btn-primary">Tambah Jadwal</button>
                                </a>
                            </div>
                            <!-- end: add button -->

                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-xl-11 order-2 order-xl-1">
                                        <div class="form-group m-form__group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="m-input-icon m-input-icon--left">
                                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search.." id="carijadwal">
                                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                                        <span>
                                                            <i class="la la-search"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search Form -->
                        </div>


                        <!--begin: Datatable -->
                        <table class="datajadwal" id="datajadwal" width="100%" style="width: 100%">
                            <thead>
                                <tr>
                                    <th title="Field #1" style="max-width:30px">
                                        No
                                    </th>
                                    <th title="Field #2">
                                        Jam Masuk
                                    </th>
                                    <th title="Field #3">
                                        Jam Keluar
                                    </th>
                                    <th title="Field #4">
                                        Keterangan
                                    </th>
                                    <th title="Field #5">
                                        Status
                                    </th>
                                    <th title="Field #6">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($daftar_jadwal as $jadwal) : ?>
                                    <tr>
                                        <td style="max-width: 30px"><?= $no ?></td>
                                        <td><?= $jadwal->jam_masuk ?></td>
                                        <td><?= $jadwal->jam_keluar ?></td>
                                        <td><?= $jadwal->keterangan ?></td>
                                        <td><?= $jadwal->keterangan_status_karyawan ?></td>
                                        <td>
                                            <span style="overflow: visible; width: 110px;">
                                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#editjadwal" data-id="<?= $jadwal->id_jadwal ?>">
                                                    <i class=" la la-edit"></i>
                                                </a>
                                                <a href="<?= site_url("Admin/hapus_jadwal/$jadwal->id_jadwal") ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" title="Delete">
                                                    <i class="la la-trash"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                <?php $no = 1 + $no;
                                endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end konten -->


    <!-- modaledit status -->
    <div class="modal fade" id="editstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Status
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#editstatus').on('show.bs.modal', function(e) {
                console.log("edit");
                var myId = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    url: "<?= site_url('admin/edit_status') ?>", //ini controller buatedit
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
    <!-- end modal -->

    <!-- modal tambah status -->
    <div class="modal fade" id="tambahstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('Admin/tambah_status') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Status
                        </h5>
                        <p id="result"></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="js-select2">Nama Status</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="keterangan_status_karyawan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end konten -->


    <!-- modaledit jadwal -->
    <div class="modal fade" id="editjadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Jadwal
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="resultjadwal"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#editjadwal').on('show.bs.modal', function(e) {
                console.log("edit");
                var myId = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    url: "<?= site_url('admin/edit_jadwal') ?>", //ini controller buatedit
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#resultjadwal').html(data);
                    }
                });
            });
        });
    </script>
    <!-- end modal -->

    <!-- modal tambah jadwal -->
    <div class="modal fade" id="tambahjadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('Admin/tambah_jadwal') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Jadwal
                        </h5>
                        <p id="result"></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="js-select2">Jam Masuk</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group timepicker" >
                                        <input type="text" id="m_timepicker_2_modal" name="jam_masuk" class="form-control m-input" readonly="" placeholder="Select time">
                                        <span class="input-group-addon">
                                            <i class="la la-clock-o"></i>
                                        </span>
                                    </div>
                                    <!-- <input type="time" name="jam_masuk" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" class="form-control"> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Jam Keluar</label>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group timepicker" >
                                        <input type="text" id="m_timepicker_3_modal" name="jam_keluar" class="form-control m-input" readonly="" placeholder="Select time">
                                        <span class="input-group-addon">
                                            <i class="la la-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Keterangan</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="keterangan" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Status</label>
                            <div class="row">

                                <div class="col-lg-12">

                                    <select class="form-control js-select2" name="status">
                                        <?php foreach ($daftar_status as $status1) : ?>
                                            <option value="<?php echo $status1->id_status ?>">
                                                <?php echo $status1->keterangan_status_karyawan ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end konten -->


</div>


</div>
<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/datamaster/status.js') ?>"></script>