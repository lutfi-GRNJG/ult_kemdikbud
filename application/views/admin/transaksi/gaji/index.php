<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Gaji
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
                Halaman ini untuk melihat data gaji karyawan secara menyeluruh khusus untuk bulan ini
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
                Untuk merekap gaji karyawan pada bulan ini, silahkan tekan button rekap dibawah.
            </div>
        </div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Gaji Bulan Ini
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>

                    <div class="float-right">
                        <a href="<?= base_url('Admin/rekap_gaji') ?>" class="btn btn-success m-btn m-btn--icon">
                                <span>
                                    <i class="fa fa-refresh"></i>
                                    <span>
                                        Rekap data bulan ini
                                    </span>
                                </span>
                            </a>
                    </div>
                    
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
                                Total Gaji
                            </th>
                            <th title="Field #4">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($data_rekapan as $data): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $data->nip ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= shortdate_indo($data->tanggal) ?></td>
                                <td><?= rupiah($data->total_gaji) ?></td>
                                <td><span style="overflow: visible; width: 110px;">                      
                                        <a class="detail m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-id="<?= $data->nip ?>" data-tanggal="<?= shortdate_indo($data->tanggal) ?>" title="Lihat Data">
                                            <i class="la la-eye" id="lihatviewlengkap"></i>                  
                                        </a>                        
                                    </span>
                                </td>
                            </tr>
                        <?php $no++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->

<!-- modal tambah jabatan -->
<div class="modal fade" id="lihatgaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleview">
                    
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
                    <label for="">Nip</label>
                    <input type="text" id="nip" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" id="nama" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="text" id="tanggal" class="form-control" disabled>
                </div>
                <hr>
                <h6 class="mb-3">Perhitungan Gaji : </h6>
                <table class="table m-table m-table--head-bg-brand table-bordered table-hover" style="font-size: 1rem">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gaji Pokok</td>
                            <td>
                                <div class="input-group m-input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        Rp.
                                    </span>
                                    <input type="text" id="gajipokok" class="form-control" aria-describedby="basic-addon1" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Potongan</td>
                            <td>
                                <div class="input-group m-input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        Rp.
                                    </span>
                                    <input type="text" id="potongan" class="form-control" aria-describedby="basic-addon1" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Tunjangan</td>
                            <td>
                                <div class="input-group m-input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        Rp.
                                    </span>
                                    <input type="text" id="tunjangan" class="form-control" aria-describedby="basic-addon1" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Total Gaji<b></td>
                            <td>
                                <div class="input-group m-input-group">
                                    <span class="input-group-addon font-weight-bold" id="basic-addon1">
                                        Rp.
                                    </span>
                                    <input type="text" id="total" class="form-control font-weight-bold" aria-describedby="basic-addon1" readonly>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end konten -->

<script src="<?= base_url('assets/admin/app/jscustom/data_transaksi/gaji.js') ?>"></script>