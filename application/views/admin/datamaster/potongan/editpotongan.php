<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_potongan'); ?>">
    <div class="m-portlet__body">
        <div class="form-group m-form__group">
            <?php foreach ($edit_potongan as $edit_potongan){
                $id = $edit_potongan->id;
                $tgl = $edit_potongan->tgl;
                $jml = $edit_potongan->jml;
                $jenis = $edit_potongan->jenis;
                $nip = $edit_potongan->nip;
                $nama = $edit_potongan->nama;
            } ?>
            <input type="text" value="<?= $id ?>" name="id_potongan" hidden>
            <label for="">Nama Karyawan</label>
            <select class="form-control js-select2" name="karyawan" disabled>
                    <option value="<?php echo $nip ?>">
                        <?php echo $nama ?>
                    </option>
            </select>
        </div>
        <div class="form-group m-form__group">
            <label>Nominal</label>
            <div class="input-group m-input-group">
                <span class="input-group-addon" id="basic-addon1">
                    Rp.
                </span>
                <input type="text" id="rupiahku" value="<?= rupiahrp($jml) ?>" onkeyup="rupiah('rupiahku')"  class="form-control coba" name="nominal" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="form-group m-form__group">
            <label for="exampleInputEmail1">Tanggal</label>

            <div class="input-group date" >
                <input type="text" value="<?= shortdate_indo($tgl) ?>" id="m_datepicker_2_modal" name="tanggal" class="form-control m-input" readonly="" placeholder="Select date">
                <span class="input-group-addon">
                    <i class="la la-calendar-check-o"></i>
                </span>
            </div>
        </div>
        <div class="form-group m-form__group">
            <label>Keterangan Potongan</label>
            <select name="keterangan" id="" class="form-control">
                <option value="terlambat">Terlambat</option>
                <option value="tidak masuk">Tidak Masuk</option>
                <option value="hutang/bon">Hutang / Bon</option>
            </select>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Cancel
            </button>
        </div>
    </div>
</form>
<script>
    //== Class definition
    $(document).ready(function() {

var BootstrapDatepicker = function () {
    
    //== Private functions
    var demos = function () {
        // input group layout for modal demo
        $('#m_datepicker_2_modal').datepicker({
            todayHighlight: true,
            format: 'dd/mm/yyyy',
            orientation: "bottom left",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });

        
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();
});

jQuery(document).ready(function() {    
    BootstrapDatepicker.init();
});
</script>
    <script src="<?= base_url('assets/admin/customkita/customjs.js') ?>" type="text/javascript"></script>
<!--  -->
<!-- end:: Body -->
                        