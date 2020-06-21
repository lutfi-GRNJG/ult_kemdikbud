<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_status') ?>">
    <div class="m-portlet__body">
        <!-- php foreach edit -->
        <?php foreach ($edit_status as $edit_status): ?>
        <input type="text" value="<?= $edit_status->id_status ?>" name="id_status" style="position: absolute;left: -9999px">
        <div class="form-group m-form__group">
                <label for="">Nama Status</label>
                <input type="text" class="form-control" name="status" value="<?= $edit_status->keterangan_status_karyawan ?>">
        </div>
        <?php endforeach ?>
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