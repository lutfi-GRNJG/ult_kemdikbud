<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto"> 
                <h3 class="m-subheader__title ">
                    Check Presensi Hari Ini
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
                Halaman ini untuk menampilkan presensi karyawan yang bertugas / berjadwal pada hari ini
            </div>
        </div>

        <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation-1"></i>
                <span></span>
            </div>
            <div class="m-alert__text">
                <strong>
                    Ctt :
                </strong>
                <li>Jika data kosong silahkan atur staff yang betugas hari ini pada calender yang ada di menu penjadwalan</li>
                <li>Kehadiran dilihat dari data yang masuk pada menu <b>transaksi->presensi</b> di tanggal yang sama.</li>
            </div>
        </div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Check Presensi
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <!-- <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahjabatan" class="btn btn-primary">Tambah Jabatan</button>
                        </a> -->
                    </div>
                    <!-- end: add button -->

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">

                                    <!-- filter -->
                                    <div class="col-md-5">
                                        <div class="m-form__group m-form__group--inline">
                                            <div class="m-form__label">
                                                <label>
                                                    Kehadiran: 
                                                </label>
                                            </div>
                                            <div class="m-form__control">
                                                <select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
                                                    <option value="">
                                                        All
                                                    </option>
                                                    <option value="Hadir">
                                                        Hadir
                                                    </option>
                                                    <option value="Tidak hadir">
                                                        Tidak Hadir
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-md-none m--margin-bottom-10"></div>
                                    </div>

                                    <!-- pencarian -->
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
                <div class="m_datatable" id="json_data"></div>
                <!-- <table class="m-datatable" id="html_table" width="100%">
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
                                Kehadiran
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        foreach ($check_presensi as $check_presensi): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $check_presensi->nip ?></td>
                                <td><?= $check_presensi->nama ?></td>
                                <td><?= $check_presensi->kehadiran ?></td>
                            </tr>
                        <?php $no++; endforeach ?>
                        
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/check/presensi.js') ?>"></script>