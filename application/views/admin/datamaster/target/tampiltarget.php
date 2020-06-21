<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Target
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
                            Daftar Target
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahtarget" class="btn btn-primary">Tambah Target</button>
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
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Jabatan" id="caritarget">
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
                <table class="datatarget" id="datatarget" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                No
                            </th>

                            <th title="Field #3">
                                Jabatan
                            </th>

                            <th title="Field #6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($daftar_target as $target) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $target->nama_jabatan ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Lihat data" data-toggle="modal" data-target="#targetrinci" id="rincitarget" data-id="<?= $target->id_jabatan ?>">
                                            <i class=" la la-eye"></i>
                                        </a>
                                        <a href="#" class="editdata m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" id="editdata" data-id="<?= $target->id_jabatan ?>">
                                            <i class=" la la-edit"></i>
                                        </a>
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Hapus data" data-toggle="modal" data-target="#hapustarget" id="hapusdata" data-id="<?= $target->id_jabatan ?>">
                                            <i class=" la la-trash"></i>
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


    <!-- modaledit target -->
    <div class="modal fade" id="edittarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Target
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
                console.log(myId);
                $.ajax({
                    type: 'post',
                     // detail per identifier ditampung pada berkas detail.php yang berada di folder application/view 
                    url: "<?= site_url('admin/edit_target') ?>",
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#edittarget').modal('show');
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
    <!-- end modal -->


    <!-- modal tambah target -->
    <div class="modal fade tambahtarget" id="tambahtarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('admin/proses_tambah_target') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Target
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
                            <label for="js-select2">Tanggal</label>
                            <div class="input-group date" id="m_datepicker_2_modal">
                                <input type="text" name="tanggal" class="form-control m-input" autocomplete="off" placeholder="Select date">
                                <span class="input-group-addon">
                                    <i class="la la-calendar-check-o"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Jabatan</label>
                            <select class="form-control" style="float: left;width: 100%" name="jabatan">
                                <?php foreach ($tampil_jabatan as $jabatan) : ?>
                                    <option value="<?= $jabatan->id_jabatan ?>"><?= $jabatan->nama_jabatan ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Target : </label>
                            <input type="text" name="target" data-role="tagsinput" class="form-control">
                            <small class="text-danger">akhiri setiap target dengan tanda koma ( , )</small>
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
    <!-- end modal -->



    <!-- modal lihat target -->
    <div class="modal fade" id="targetrinci" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Rincian Target
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result_rinci"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- modalhapus target -->
    <div class="modal fade" id="hapustarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Hapus Target
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="resulthapus"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->

<script src="<?= base_url('assets/admin/app/jscustom/datamaster/target.js') ?>"></script>