<form class="" method="post" action="<?= site_url('admin/proses_tambah_anggota_grup'); ?>">
        <div class="form-group m-form__group">
            <label for="">Pilih Group</label>
            <select name="id_grup" id="grup" class="form-control">
                <?php foreach ($edit_anggota_grup as $edit_anggota_grup): ?>
                    <option title="<?= $edit_anggota_grup->nama_grup ?>" value="<?php echo $edit_anggota_grup->id_grup ?>" idgrup="<?= $edit_anggota_grup->id_grup ?>">
                        <?= $edit_anggota_grup->nama_grup ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group m-form__group" >
            <label for="">Nama karyawan</label>
            <select class="form-control js-select2" style="float: left;width: 100%" id="m_select2_2_modal" name="karyawan">
                <?php foreach ($karyawan as $karyawan) : ?>
                    <option value="<?php echo $karyawan->nip ?>">
                        <?php echo $karyawan->username ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cancel
                </button>
        </div>
</form>