<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Klaim Kesehatan
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
                            Daftar Klaim Kesehatan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:daftar diterima -->
                    <div class="float-right">
                        <a href="<?= base_url('Admin/tampil_klaim_kesehatan_diterima') ?>">
                            <button type="button" class="btn btn-success">Daftar Klaim Diterima</button>
                        </a>
                        <a href="<?= base_url('Admin/tampil_klaim_kesehatan_ditolak') ?>">
                            <button type="button" class="btn btn-danger">Daftar Klaim Ditolak</button>
                        </a>
                    </div>
                    <!-- end: add button -->

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
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
                                Nama Karyawan
                            </th>

                            <th title="Field #3">
                                Keterangan Sakit
                            </th>

                            <th title="Field #4">
                                Biaya
                            </th>

                            <th title="Field #5">
                                Status Klaim
                            </th>

                            <th title="Field #6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($daftar_klaim_kesehatan as $klaim) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $klaim->nama ?></td>
                                <td><?= $klaim->keterangan_sakit ?></td>
                                <td><?= rupiah($klaim->biaya) ?></td>
                                <td><?= $klaim->status_klaim_kesehatan ?></td>
                                <td>
                                    <span style='overflow: visible; width: 110px;'>
                                        <a href="<?= base_url("Admin/proses_diterima_klaim_kesehatan/$klaim->kode_klaim_kesehatan") ?>" class='m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill' title='Terima' id='terimadata' data-id=''>
                                            <i class=' la la-check-circle'></i>
                                        </a>
                                        <a href="<?= base_url("Admin/proses_ditolak_klaim_kesehatan/$klaim->kode_klaim_kesehatan") ?>" class='m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill' id='tolak' data-id='' title='Tolak'>
                                            <i class='la la-times-circle'>
                                            </i>
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
</div>
</div>


<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/karyawan/klaimkesehatan.js') ?>"></script>