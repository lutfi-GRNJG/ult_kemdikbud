<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Presensi
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
                Halaman ini untuk upload dan melihat data presensi karyawan secara menyeluruh
            </div>
        </div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Presensi
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahfile" class="btn btn-primary">Upload File</button>
                        </a>
                    </div>
                    <!-- end: add button -->

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-8">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Nip, Nama, Tanggal" id="generalSearch">
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
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                No
                            </th>
                            <th title="Field #2">
                                Nip
                            </th>
                            <th title="Field #3">
                                Nama
                            </th>
                            <th title="Field #4">
                                Tanggal
                            </th>
                            <th title="Field #4">
                                Jam Masuk
                            </th>
                            <th title="Field #4">
                                Jam Keluar
                            </th>
                            <th title="Field #4">
                                Lembur
                            </th>
                            <th title="Field #4">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data_presensi as $presensi) {
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $presensi->nip ?></td>
                                <td><?= $presensi->nama ?></td>
                                <td><?= date_indo($presensi->tanggal) ?></td>
                                <td><?= $presensi->jam_masuk ?></td>
                                <td><?= $presensi->jam_keluar ?></td>
                                <td><?= $presensi->lembur ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">
                                        <a href="#" class="editdata m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#editfile" value="<?= $presensi->id ?>">
                                            <i class=" la la-edit"></i>
                                        </a>
                                        <a class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill hapus" value="<?= $presensi->id ?>" title="Delete">
                                            <i class="la la-trash"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->

<!-- modal edit -->
<div class="modal fade" id="editfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form class="" method="post" action="<?= site_url('admin/proses_update_presensi') ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Data
                    </h5>
                    <p id="result"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="id" id="id" hidden>
                    <input type="text" name="nip" id="nip2" hidden>
                    <div class="form-group">
                        <label for="js-select2">Nip</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="nip" id="nip" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="js-select2">Nama</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="nama" id="nama" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="js-select2">Tanggal</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group date" id="m_datepicker_4_3">
                                    <input type="text" name="tanggal" id="tanggal" class="form-control m-input" readonly="">
                                    <span class="input-group-addon">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="js-select2">Jam Masuk</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="jam_masuk" id="jam_masuk" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="js-select2">Jam Keluar</label>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="jam_keluar" id="jam_keluar" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal edit -->

<!-- modal tambah jabatan -->
<div class="modal fade" id="tambahfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="" method="post" action="<?= site_url('admin/proses_presensi') ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Upload File Presensi
                    </h5>
                    <p id="result"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group">
                        <label class="custom-file">
                            <input type="file" id="file2" class="custom-file-input" name="excel-file">
                            <span class="custom-file-control form-control"></span>
                        </label>
                        <small class="text-info">
                            <bold>*Note :</bold> File yang diterima hanya excel
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end konten -->
<script src="<?= base_url('assets/admin/app/jscustom/data_transaksi/presensi.js') ?>"></script>