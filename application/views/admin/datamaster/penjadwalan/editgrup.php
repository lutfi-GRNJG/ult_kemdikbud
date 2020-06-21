<form class="" method="post" action="<?= site_url('admin/proses_edit_grup'); ?>">
        <?php foreach ($edit_grup as $edit_grup): ?>
            
        <input type="text" name="id_grup" value="<?= $edit_grup->id_grup ?>" style="position: absolute;left: -9999px">
        <div class="form-group">
            <label for="">Nama Grup</label><br>
            <input type="text" value="<?= $edit_grup->nama_grup ?>" name="nama_grup" class="form-control">
        </div>
        <?php endforeach ?>
        <hr>
        <div style="float: right;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-primary" >
                Submit
            </button>
            
        </div>
</form>