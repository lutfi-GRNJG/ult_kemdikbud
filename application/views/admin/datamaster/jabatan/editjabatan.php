<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('Admin/proses_edit_jabatan') ?>">
    <div class="m-portlet__body">
        <!-- php foreach edit -->
        <?php foreach ($edit_jabatan as $jabatan) {
            $id = $jabatan->id_jabatan;
            $nama_jabatan = $jabatan->nama_jabatan;
            $gaji = $jabatan->gaji_pokok_jabatan;
        } ?>
        <input type="text" value="<?= $id ?>" name="id_jabatan" style="position: absolute;left: -9999px">
        <div class="form-group m-form__group">
            <label for="">Nama Jabatan</label>
            <input type="text" class="form-control" name="nama_jabatan" value="<?= $nama_jabatan ?>">
        </div>
        <div class="form-group m-form__group">
            <label for="">Gaji Pokok</label>
            <div class="input-group m-input-group">
                <span class="input-group-addon" id="basic-addon1">
                    Rp.
                </span>
                <input type="number" class="form-control m-input" name="gaji_pokok_jabatan"  value="<?= $gaji ?>" aria-describedby="basic-addon1" required>
            </div>
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

<script src="<?= base_url('assets/admin/demo/default/custom/components/forms/widgets/nouislider.js') ?>" type="text/javascript"></script>
<!-- end:: Body -->