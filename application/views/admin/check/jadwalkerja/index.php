<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto"> 
                <h3 class="m-subheader__title ">
                    Jadwal Kerja
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
                Halaman ini untuk menampilkan daftar karyawan yang bertugas / berjadwal pada hari ini
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
                <li>Jika data kosong silahkan atur staff yang bertugas hari ini pada calender yang ada di menu penjadwalan</li>
            </div>
        </div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Check Jadwal Kerja
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <!-- <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahjabatan" class="btn btn-primary">Tambah Jabatan</button>
                        </a>
                    </div> -->
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
                                Tanggal
                            </th>
                            <th title="Field #3">
                                Nip
                            </th>
                            <th title="Field #4">
                                Nama
                            </th>
                            <th title="Field #5">
                                Group
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($jadwal as $jadwal): 
                                ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= date('d/m/Y') ?></td>
                                <td><?= $jadwal->nip ?></td>
                                <td><?= $jadwal->nama ?></td>
                                <td><?= $jadwal->grup ?></td>
                            </tr>
                        <?php 
                            $no++;
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
<script src="<?= base_url('assets/admin/app/jscustom/check/jadwalkerja.js') ?>"></script>