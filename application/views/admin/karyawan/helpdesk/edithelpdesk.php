<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('Admin/proses_edit_helpdesk') ?>">
    <div class="m-portlet__body">
        <!-- php foreach edit -->
        <?php foreach ($edit_helpdesk as $helpdesk) { ?>
            <div class="form-group m-form__group" hidden>
                <label for="js-select2">ID Helpdesk</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="id_helpdesk" class="form-control" value="<?= $helpdesk->id_helpdesk ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group" hidden>
                <label for="js-select2">NIP Pelapor</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="nip_pelapor" class="form-control" value="<?= $helpdesk->nip_pelapor ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group">
                <label for="js-select2">Redaksi</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="redaksi" class="form-control" value="<?= $helpdesk->redaksi ?>">
                    </div>
                </div>
            </div>
        <?php } ?>
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