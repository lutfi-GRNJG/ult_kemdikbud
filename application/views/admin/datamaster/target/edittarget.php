<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_target') ?>">
    <div class="m-portlet__body">

        <?php foreach ($edit_target as $target) {
            $id = $target->id_target;
            $tgl = $target->tanggal;
            $tanggal = explode("-", $tgl);
            $tgl_jadi = $tanggal[2]."/".$tanggal[1]."/".$tanggal[0];
            $jabatan = $target->id_jabatan;
            $ket_target = $target->keterangan_target;
            $nam_jab = $target->nama_jabatan;
            $nip = $target->nip_penyelesai;
        } ?>
        <div class="form-group" hidden>
            <label for="js-select2">id jabatan</label>
            <input type="text" value="<?= $jabatan ?>" name="id_jabatan" class="form-control">
        </div>
        <div class="form-group" hidden>
            <label for="js-select2">NIP</label>
            <input type="text" value="<?= $nip ?>" name="nip_penyelesai" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal</label>

            <div class="input-group date" >
                <input type="text" value="<?= $tgl_jadi ?>" id="m_datepicker_2_modal" name="tanggal" class="form-control m-input" readonly="" placeholder="Select date">
                <span class="input-group-addon">
                    <i class="la la-calendar-check-o"></i>
                </span>
            </div>
            
        </div>
        <div class="form-group" readonly>
            <label for="js-select2">Jabatan</label>
            <input type="text" value="<?= $nam_jab ?>" name="nama_jabatan" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="js-select2">Keterangan Target</label>
            <select class="form-control" style="float: left;width: 100%" name="id_target">
                <?php foreach ($edit_target as $target2) : ?>
                    <option value="<?= $target2->id_target ?>"><?php echo $target2->keterangan_target; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="js-select2">Diubah menjadi</label>
            <input type="text" value="" name="redaksi_baru" class="form-control" required="">
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

jQuery(document).ready(function() {    
    BootstrapDatepicker.init();
});
</script>
<!--begin::Base Scripts -->
<script src="<?= base_url('assets/admin/demo/default/custom/components/forms/widgets/select2.js') ?>" type="text/javascript"></script>