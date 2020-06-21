<?php $noo = 1; foreach ($edit_travel as $edit_travel): ?>
    <?php 
        $idtravel = $edit_travel->id_travel;
        $tujuan = $edit_travel->tujuan;
        $keterangan = $edit_travel->keterangan;
        $biaya_perjalanan = $edit_travel->biaya_perjalanan;
        $waktu_kunjungan = $edit_travel->waktu_kunjungan;
        
        $waktu_kunjungan_pecah = explode(" ", $waktu_kunjungan);
        $waktu_kunjungan_tgl = explode("-", $waktu_kunjungan_pecah[0]);
        $waktu_kunjunganku = $waktu_kunjungan_tgl[2]."/".$waktu_kunjungan_tgl[1]."/".$waktu_kunjungan_tgl[0];

        $waktu_selesai_kunjungan = $edit_travel->waktu_selesai_kunjungan;
        $waktu_kunjungan_pecah = explode(" ", $waktu_selesai_kunjungan);
        $waktu_kunjungan_tgl = explode("-", $waktu_kunjungan_pecah[0]);
        $waktu_selesai_kunjunganku = $waktu_kunjungan_tgl[2]."/".$waktu_kunjungan_tgl[1]."/".$waktu_kunjungan_tgl[0];

        $nipp[$noo] = $edit_travel->nip;
        $kayaw[$noo] = $edit_travel->username;
        $noo = $noo +1;
     ?>
<?php endforeach ?>
<form class="" method="post" action="<?= site_url('admin/proses_edit_travel_auth'); ?>">
        <div class="modal-body">
            <input type="text" name="idtravel" value="<?= $idtravel ?>" hidden>
            <div class="form-group">
                <label for="">Tujuan</label>
                <input type="text" name="tujuan" value="<?= $tujuan ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Waktu kunjungan</label>
                <div class="input-group date" id="m_datetimepicker_11000_modal" data-z-index="1100">
                    <input type="text"  name="waktu_kunjungan" value="<?= $waktu_kunjunganku ?>" class="form-control m-input" readonly="" placeholder="Select date &amp; time">
                    <span class="input-group-addon">
                        <i class="la la-calendar-check-o glyphicon-th"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="">Waktu Selesai kunjungan</label>
                <div class="input-group date" id="m_datetimepicker_110000_modal" data-z-index="1100">
                    <input type="text"  name="waktu_selesai_kunjungan" value="<?= $waktu_selesai_kunjunganku ?>" class="form-control m-input" readonly="" placeholder="Select date &amp; time">
                    <span class="input-group-addon">
                        <i class="la la-calendar-check-o glyphicon-th"></i>
                    </span>
                </div>
            </div>
            <div class="tambah" id="tambahcuy">
                    <?php for ($a=1; $a <= $jumlah_berangkat; $a++) { ?>
                        <div class="form-group next-referral" id="<?= $a ?>">
                            <label for="js-select2">Nama Karyawan</label>
                            <div class="row">
                                <div class="col-lg-11">
                                    <select class="form-control js-select2" style="float: left;width: 100%" name="karyawan[]" required>
                                            <option value='<?= $nipp[$a] ?>' selected><?= $kayaw[$a] ?></option>
                                    </select>
                                </div>
                                <div class="col col-lg-1">
                                    <button type="button" class="btn btn-danger m-btn m-btn--icon btn-md m-btn--icon-only" onclick="hapus(<?=$a ?>)"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

            </div>
            <div id="buttontambah mt-2 mb-2 form-group">
                <button id="addcuy" class="btn add-more button-yellow text-right" type="button">+ Tambah Karyawan</button>
            </div>
            <div class="form-group mt-2">
                <label for="">Biaya Perjalanan</label>
                <div class="input-group m-input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        Rp.
                    </span>
                    <input type="text" id="rupiahedit" onkeyup="rupiah('rupiahedit')" value="<?= rupiahrp($biaya_perjalanan) ?>" class="form-control m-input" name="biaya_perjalanan" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?= $keterangan ?></textarea>
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
    <script>
    //when the Add Field button is clicked
    $("#addcuy").click(function(e) {
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
                $("#tambahcuy").append(
                    `<div class="form-group" id="${no}">
                            <label for="js-select2" >Nama Karyawan</label>
                            <div class="row">
                                <div class="col col-lg-11">
                                    <select class="form-control js-select2" id="select${no}" style="float: left;width: 100%" name="karyawan[]" required>
                                        ${option}
                                    </select>
                                </div>
                                <div class="col col-lg-1">
                                    <button type="button" class="btn btn-danger m-btn m-btn--icon btn-md m-btn--icon-only" onclick="hapus(${no})"><i class="fa fa-trash"></i></button>
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
            dropdownParent: $(`#m_blockui_4_1_modal`),
          })
        });
    }
</script>
<script>
    //== Class definition

var BootstrapDatetimepicker = function () {
    
    //== Private functions
    var demos = function () {
        $('#m_datetimepicker_11000_modal').datepicker({
            autoclose: true,
            pickerPosition: 'bottom-left',
            format: 'dd/mm/yyyy',
        });
        $('#m_datetimepicker_110000_modal').datepicker({
            autoclose: true,
            pickerPosition: 'bottom-left',
            format: 'dd/mm/yyyy',
        });
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

jQuery(document).ready(function() {    
    BootstrapDatetimepicker.init();
});
</script>