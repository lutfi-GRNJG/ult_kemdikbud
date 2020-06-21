<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Potongan
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
                            Potongan Karyawan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="<?= base_url('Admin/tambahpotongan') ?>">
                            <button type="button" class="btn btn-primary">Tambah Potongan</button>
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
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="caripotongan">
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
                <table class="datapotongan" id="datapotongan" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th title="Field #1">
                                Nama Karyawan
                            </th>
                            <th title="Field #2">
                                Jumlah Potongan
                            </th>
                            <th title="Field #3">
                                Jenis Potongan
                            </th>
                            <th title="Field #4">
                                Tanggal Potongan
                            </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($daftar_potongan as $potongan) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $potongan->nama ?></td>
                                <td><?= rupiah($potongan->jumlah_potongan) ?></td>
                                <td><?= $potongan->jenis_potongan ?></td>
                                <td><?= mediumdate_indo($potongan->tgl_potongan) ?></td>
                                <td><span style="overflow: visible; width: 110px;">
                                        <a href="#" class="editdata m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#m_blockui_4_1_modal" id="editdata" data-id="<?= $potongan->id_potongan ?>">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="konfirmasi(<?= $potongan->id_potongan ?>)" title="Delete">
                                            <i class="la la-trash"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="m_blockui_4_1_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Potongan
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
                $(".m-content").on('click', '.editdata', function () {
                var myId = $(this).attr('data-id');
                $.ajax({
                    type: 'post',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    url: "<?= site_url('admin/editpotongan') ?>",
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#m_blockui_4_1_modal').modal('show');
                        $('#result').html(data);
                    }
                });
                $('#datepicker').datepicker({
                    orientation: "bottom left",
                    todayHighlight: true,
                    format: 'dd/mm/yyyy',
                    templates: {
                        leftArrow: '<i class="la la-angle-left"></i>',
                        rightArrow: '<i class="la la-angle-right"></i>'
                    }
                });
            });
        });
    </script>
    <!-- end modal -->
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->


<script src="<?= base_url('assets/admin/app/jscustom/datamaster/potongan.js') ?>"></script>