<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Cuti
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
                            Cuti Karyawan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="<?= base_url('Admin/tambahcuti') ?>">
                            <button type="button" class="btn btn-primary">Tambah Cuti</button>
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
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="caricuti">
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
                <table class="cuti" id="cuti" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                NIP
                            </th>
                            <th title="Field #2">
                                Username
                            </th>
                            <th title="Field #3">
                                Tanggal Mulai Cuti
                            </th>
                            <th title="Field #4">
                                Tanggal Selesai Cuti
                            </th>
                            <th title="Field #5">
                                Keterangan Cuti
                            </th>
                            <th title="Field #5">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cuti as $data) {
                        ?>
                            <tr>
                                <td><?= $data->nip ?></td>
                                <td><?= $data->username ?></td>
                                <td><?= mediumdate_indo($data->tgl_cuti) ?></td>
                                <td><?= mediumdate_indo($data->tgl_selesai_cuti) ?></td>
                                <td><?= $data->keterangan ?></td>
                                <td><span style="overflow: visible; width: 110px;">                      
                                        <a href="<?= site_url('admin/edit_cuti/'.$data->id_cuti) ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data"> 
                                            <i class="la la-edit"></i>                      
                                        </a>                        
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" onclick="konfirmasi(<?= $data->id_cuti ?>)" title="Delete">                          
                                            <i class="la la-trash"></i>                     
                                        </a>                    
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/datamaster/cuti.js') ?>"></script>
