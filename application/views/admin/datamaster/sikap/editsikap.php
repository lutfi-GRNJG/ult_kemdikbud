<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_sikap'); ?>">
    <div class="m-portlet__body">
            <?php foreach ($edit_sikap as $edit_sikap){
                $id = $edit_sikap->id_sikap;
                $nip = $edit_sikap->nip;
                $user = $edit_sikap->username;
            } ?>
            <input type="text" value="<?= $id ?>" name="id_sikap" style="position: absolute;left: -9999px">
        <div class="form-group m-form__group">
            <label for="">Nama Karyawan</label>
            <select class="form-control js-select2" name="karyawan" readonly>
                <option value="<?php echo $nip ?>">
                    <?php echo $user ?>
                </option>
            </select>
        </div>
        <div class="form-group m-form__group">
            <label for="">Range Sikap</label>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <input type="text" name="range_sikap" class="form-control" id="m_nouislider_1_input" placeholder="Quantity">
                        </div>
                        <div class="col-9">
                            <div id="m_nouislider_1" class="m-nouislider--drag-danger"></div>
                        </div>
                    </div>
                </div>
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