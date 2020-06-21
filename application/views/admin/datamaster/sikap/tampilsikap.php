<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Sikap
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
                            Sikap
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahsikap" class="btn btn-primary">Tambah Sikap</button>
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
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Tanggal, Nip, Username" id="carisikap">
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
                <table class="datasikap" id="datasikap" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                No
                            </th>
                            <th title="Field #2">
                                Tanggal
                            </th>
                            <th title="Field #3">
                                NIP
                            </th>
                            <th title="Field #4">
                                Username
                            </th>
                            <th title="Field #5">
                                Sikap 1 - 5
                            </th>
                            <th title="Field #6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($daftar_sikap as $sikap): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= mediumdate_indo($sikap->tanggal) ?></td>
                                <td><?= $sikap->nip ?></td>
                                <td><?= $sikap->username ?></td>
                                <td><?= $sikap->range_sikap ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">                      
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#m_blockui_4_1_modal" id="editdata" data-id="<?= $sikap->id_sikap ?>"> 
                                            <i class="la la-edit"></i>                      
                                        </a>                        
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" onclick="konfirmasi(<?= $sikap->id_sikap ?>)" title="Delete">                          
                                            <i class="la la-trash"></i>                     
                                        </a>                    
                                    </span>
                                </td>
                            </tr>

                            <?php $no= 1+$no; endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="m_blockui_4_1_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Edit Sikap
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
            $(document).ready(function(){
                $('#m_blockui_4_1_modal').on('show.bs.modal', function (e) {
                    console.log("edit");
                    var myId = $(e.relatedTarget).data('id');
                    $.ajax({
                        type : 'post',
                        /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                        url: "<?= site_url('admin/editsikap') ?>",
                        data :  'ids='+ myId,
                        success: function(data) { 
                            $('#result').html(data);
                        }
                    });
                });
            });
        </script>
        <!-- end modal -->

        <!-- modal tambahsikap -->
        <!-- modal -->
        <div class="modal fade" id="tambahsikap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" >
                    <form class="" method="post" action="<?= site_url('admin/proses_tambah_sikap'); ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Tambah Sikap
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
                                <label for="js-select2">Nama Karyawan</label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control js-select2" style="float: left;width: 100%" id="sikapjs" name="karyawan">
                                            <?php foreach ($karyawan as $karyawan) : ?>
                                                <option value="<?php echo $karyawan->nip ?>">
                                                    <?php echo $karyawan->username ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Range Sikap</label><br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <input type="text" name="range_sikap" class="form-control" id="m_nouislider_1_input" placeholder="Quantity">
                                            </div>
                                            <div class="col-9">
                                                <div id="m_nouislider_1" class="m-nouislider--drag-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" >
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
<script src="<?= base_url('assets/admin/app/jscustom/datamaster/sikap.js') ?>"></script>
<script src="<?= base_url('assets/admin/demo/default/custom/components/forms/widgets/nouislider.js') ?>" type="text/javascript"></script>