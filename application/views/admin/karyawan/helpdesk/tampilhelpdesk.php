<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Helpdesk
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
                            Daftar Helpdesk
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahhelpdesk" class="btn btn-primary">Tambah Helpdesk</button>
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
                                Nama Pelapor
                            </th>
                            <th title="Field #3">
                                Redaksi
                            </th>
                            <th title="Field #4">
                                Tanggal Laporan
                            </th>
                            <th title="Field #5">
                                Status
                            </th>
                            <th title="Field #6">
                                Nama Penyelesai
                            </th>
                            <th title="Field #7">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($tampil_helpdesk as $helpdesk) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $helpdesk->username ?></td>
                                <td><?= $helpdesk->redaksi ?></td>
                                <td><?= mediumdate_indo($helpdesk->tanggal_laporan) ?></td>
                                <td><?= $helpdesk->status_helpdesk ?></td>
                                <td><?php if ($helpdesk->nip_penyelesai == 0) {
                                        echo "-";
                                    } else {
                                        $helpdesk->username;
                                    } ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#edithelpdesk" id="editdata" data-id="<?= $helpdesk->id_helpdesk ?>">
                                            <i class=" la la-edit"></i>
                                        </a>
                                        <a href="<?= site_url("Admin/hapus_helpdesk/$helpdesk->id_helpdesk") ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" data-id="" title="Delete">
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

    <!-- modaledit helpdesk -->
    <div class="modal fade" id="edithelpdesk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Helpdesk
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
            $('#edithelpdesk').on('show.bs.modal', function(e) {
                console.log("edit");
                var myId = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    url: "<?= site_url('Admin/edit_helpdesk') ?>", //ini controller buatedit
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
    <!-- end modal -->

    <!-- modal tambah helpdesk -->
    <div class="modal fade" id="tambahhelpdesk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('Admin/tambah_helpdesk') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Helpdesk
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
                            <label for="js-select2">Nama Pelapor</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="nip" class="form-control" value="<?= $user['nama'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Tanggal Laporan</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group" data-z-index="1100">
                                        <input type="text" style="    border: 1px solid #ebedf2;" name="tanggal_laporan" value="<?= date('d/m/Y') ?>" class="form-control m-input" disabled="" placeholder="Select date &amp; time">
                                        <span class="input-group-addon">
                                            <i class="la la-calendar-check-o glyphicon-th"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="js-select2">Redaksi</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="redaksi" class="form-control" required>
                                </div>
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
<script src="<?= base_url('assets/admin/app/jscustom/karyawan/helpdesk.js') ?>"></script>