<form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_jadwal') ?>">
    <div class="m-portlet__body">
        <!-- php foreach edit -->
        <?php foreach ($edit_jadwal as $jadwal) : ?>
            <input type="text" value="<?= $jadwal->id_jadwal ?>" name="id_jadwal" hidden>
            <div class="form-group">
                <label for="js-select2">Jam Masuk</label>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group timepicker" >
                             <input type="text" id="m_timepicker_3_modal" value="<?= $jadwal->jam_masuk ?>" name="jam_masuk" class="form-control m-input" readonly="" placeholder="Select time">
                            <span class="input-group-addon">
                                <i class="la la-clock-o"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="js-select2">Jam Keluar</label>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group timepicker" >
                            <input type="text" id="m_timepicker_3_modal" value="<?= $jadwal->jam_keluar ?>" name="jam_keluar" class="form-control m-input" readonly="" placeholder="Select time">
                            <span class="input-group-addon">
                                <i class="la la-clock-o"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="js-select2">Keterangan</label>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="keterangan" class="form-control" value="<?= $jadwal->keterangan ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="js-select2">Status</label>
                <div class="row">

                    <div class="col-lg-12">

                        <select class="form-control js-select2" name="status">
                            <option value="<?php echo $jadwal->id_status ?>">
                                <?php echo $jadwal->keterangan_status_karyawan ?>
                            </option>
                        </select>
                    </div>

                </div>
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
<script src="<?= base_url('assets/admin/demo/default/custom/components/forms/widgets/bootstrap-timepicker.js')?>" type="text/javascript"></script>