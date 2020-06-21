<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Travel Authorization
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
                            Travel Authorization
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <a href="#">
                            <button type="button" data-toggle="modal" data-target="#tambahtravel" class="btn btn-primary">Tambah TA</button>
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
                                Tujuan
                            </th>
                            <th title="Field #3">
                                Biaya Perjalanan
                            </th>
                            <th title="Field #4">
                                Waktu Kunjungan
                            </th>
                            <th title="Field #5">
                                Keterangan
                            </th>
                            <th title="Field #6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($tampil_travel_auth as $tampil_travel) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $tampil_travel->tujuan ?></td>
                                <td><?= rupiah($tampil_travel->biaya_perjalanan) ?></td>
                                <td><?= date('d/m/Y', strtotime($tampil_travel->waktu_kunjungan));?>
                                <span style='font-weight:bold'> S/d </span>
                                <?= date('d/m/Y', strtotime($tampil_travel->waktu_selesai_kunjungan));
                                ?> 
                                </td>
                                <td><?= $tampil_travel->keterangan ?></td>
                                <td>
                                    <span style="overflow: visible; width: 110px;">
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-metal m-btn--icon m-btn--icon-only m-btn--pill" title="Lihat Data" data-toggle="modal" data-target="#detail" id="editdata" data-id="<?= $tampil_travel->id_travel ?>">
                                            <i class="la la-eye"></i>
                                        </a>
                                        <a href="#" class="editdata m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" id="editdata" data-id="<?= $tampil_travel->id_travel ?>">
                                            <i class="la la-edit"></i>
                                        </a>
                                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="hapus" onclick="konfirmasi(<?= $tampil_travel->id_travel ?>)" title="Delete">
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

    <!-- modal -->
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Detail Travel Authorization
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="hasildetail"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#detail').on('show.bs.modal', function(e) {
                console.log("edit");
                var myId = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    url: "<?= site_url('admin/tampil_travel_auth_detail') ?>",
                    data: 'ids=' + myId,
                    success: function(data) {
                        $('#hasildetail').html(data);
                    }
                });
            });
        });
    </script>

    <div class="modal fade" id="m_blockui_4_1_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Travel
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0px">
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
                    url: "<?= site_url('admin/edit_travel') ?>",
                    data: 'ids=' + myId,
                    success: function(data) {
                         $('#m_blockui_4_1_modal').modal('show');
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
    <!-- end modal -->

    <!-- modal tambahsikap -->
    <!-- modal -->
    <div class="modal fade tambahkaryawan" id="tambahtravel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form class="" method="post" action="<?= site_url('admin/proses_tambah_travel_auth'); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Tambah Travel
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
                            <label for="">Tujuan</label>
                            <input type="text" name="tujuan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Waktu kunjungan</label>
                            <div class="input-group date" id="m_datepicker_4_3" data-z-index="1100">
                                <input type="text" name="waktu_kunjungan" class="form-control m-input" readonly="" placeholder="Select date &amp; time">
                                <span class="input-group-addon">
                                    <i class="la la-calendar-check-o glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Waktu Selesai kunjungan</label>
                            <div class="input-group date" id="m_datepicker_1_modal" data-z-index="1100">
                                <input type="text" name="waktu_selesai_kunjungan" class="form-control m-input" readonly="" placeholder="Select date &amp; time">
                                <span class="input-group-addon">
                                    <i class="la la-calendar-check-o glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                        <div class="tambah" id="tambah">

                        </div>
                        <div id="buttontambah mt-2 mb-2 form-group">
                            <button id="add" class="btn add-more button-yellow text-right" type="button">+ Tambah Karyawan</button>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Biaya Perjalanan</label>
                            <div class="input-group m-input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    Rp.
                                </span>
                                <input type="text" id="rupiahku" onkeyup="rupiah('rupiahku')" class="form-control m-input" name="biaya_perjalanan" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required></textarea>
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
<script>
    let no = 2;
    $("#add").click(function(e) {
        $.ajax({
            type: 'get',
            url: base_url + 'admin/ambilkarjson',
            success: function(data) {
                console.log(data);
                // $('#tambahdata').find('#klasifikasi option').remove();
                let option = "<option value=''>- Pilih karyawan -</option>";
                // // jenis
                $.each(data,function(index,obj)
                {
                    option += `<option value="${obj.nip}">${obj.username}</option>`;
                });
                // $('#tambahdata').find('#klasifikasi').append(option);
                // // ambil semua array Jenis
                $("#tambah").append(
                    `<div class="form-group" id="${no}">
                            <label for="js-select2" >Nama Karyawan</label>
                            <div class="row">
                                <div class="col col-lg-11">
                                    <select class="form-control js-select2" id="select${no}" style="float: left;width: 100%" name="karyawan[]" required>
                                        ${option}
                                    </select>
                                </div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only" onclick="hapus(${no})"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div>`
                );
                select2(no)
                no++;
            }
        });
    });

    function hapus(id) {
        $(`#${id}`).remove();
    }

    function select2(id) {
        $(document).ready(function() {
          $(`#select${id}`).select2({
            theme: 'bootstrap4',
            dropdownParent: $(`.modal`),
          })
        });
    }
</script>
<script src="<?= base_url('assets/admin/app/jscustom/karyawan/travel.js') ?>"></script>