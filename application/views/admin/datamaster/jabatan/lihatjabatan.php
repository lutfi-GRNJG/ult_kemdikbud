<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto"> 
                <h3 class="m-subheader__title ">
                    Jabatan
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <!-- Konten -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Daftar Jabatan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahjabatan" class="btn btn-primary">Tambah Jabatan</button>
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
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Berdasarkan Nama, Gaji" id="carijabatan">
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
                <table class="datajabatan" id="datajabatan" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                No
                            </th>
                            <th title="Field #2">
                                Nama Jabatan
                            </th>
                            <th title="Field #3">
                                Gaji Pokok
                            </th>
                            <th title="Field #4">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($daftar_jabatan as $jabatan) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $jabatan->nama_jabatan ?></td>
                                <td><?= rupiah($jabatan->gaji_pokok_jabatan) ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#editjabatan" id="editdata" data-id="<?= $jabatan->id_jabatan ?>">
                                            <i class=" la la-edit"></i>
                                        </a>
                                        <a href="<?= site_url("Admin/hapus_jabatan/$jabatan->id_jabatan") ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" title="Delete">
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
    <!-- end konten -->

    <!-- modaledit jabatan -->
    <div class="modal fade" id="editjabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Jabatan
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
    <!-- end modal -->

    <!-- modal tambah jabatan -->
    <div class="modal fade" id="tambahjabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('Admin/tambah_jabatan') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Jabatan
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
                            <label for="js-select2">Nama Jabatan</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text"  name="nama_jabatan" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Gaji Pokok Jabatan</label>
                            <div class="input-group m-input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    Rp.
                                </span>
                                <input type="number" class="form-control m-input" name="gaji_pokok_jabatan" aria-describedby="basic-addon1" required>
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
<script src="<?= base_url('assets/admin/app/jscustom/datamaster/jabatan.js') ?>"></script>