<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_hapus_target') ?>">
    <div class="m-portlet__body">
        <?php foreach ($edit_target as $target) {
            $id = $target->id_target;
            $tgl = $target->tanggal; 
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
        <div class="form-group" readonly>
            <label for="js-select2">Jabatan</label>
            <input type="text" value="<?= $nam_jab ?>" name="nama_jabatan" class="form-control">

        </div>
        <div class="form-group">
            <label for="js-select2">Keterangan Target</label>
            <select class="form-control js-select2" style="float: left;width: 100%" id="m_select2_1_modal" name="id_target">
                <?php foreach ($edit_target as $target2) : ?>
                    <option value="<?= $target2->id_target ?>"><?php echo $target2->keterangan_target; ?></option>
                <?php endforeach ?>
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
<!--begin::Base Scripts -->