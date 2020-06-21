    <div class="container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <!-- <div class="row justify-content-md-center">
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title ">
                                Potongan
                            </h3>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- END: Subheader -->

            <!-- Konten -->
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xl-8">
                        <div class="m-content">
                            <div class="m-portlet m-portlet--mobile">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Tambah Cuti
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_edit_cuti'); ?>">
                                    <div class="m-portlet__body">
                                        <?php foreach ($cuti as $cuti): ?>
                                        <input type="text" value="<?= $cuti->id_cuti ?>" name="id_cuti" style="position: absolute;left: -9999px">
                                        
                                        <div class="form-group m-form__group">
                                            <label for="">Nama Karyawan</label>
                                            <select class="form-control" name="karyawan" disabled="">
                                                    <option value="<?php echo $cuti->nip ?>">
                                                        <?php echo $cuti->username ?>
                                                    </option>
                                            </select>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">Tanggal Cuti</label>
                                            <div class="form input-daterange input-group" id="m_datepicker_5">
                                                <input type="text" value="<?= shortdate_indo($cuti->tgl_cuti) ?>" class="form-control m-input" name="startcuti" required="">
                                                <span class="input-group-addon">
                                                    <i class=""><b>S/d</b></i>
                                                </span>
                                                <input type="text" value="<?= shortdate_indo($cuti->tgl_selesai_cuti) ?>" class="form-control" name="selesaicuti" required="">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">Alasan Cuti</label>
                                            <textarea name="keterangan" class="summernote" cols="30" rows="10"><?= $cuti->keterangan ?></textarea>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                            <a href="<?= site_url('admin/tampil_cuti') ?>"><button type="button" class="btn btn-secondary">
                                                Cancel
                                            </button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end konten -->
        </div>
    </div>
    </div>
    <!-- end:: Body -->
        <script src="<?= site_url('assets/admin/demo/default/custom/components/forms/widgets/summernote.js') ?> " type="text/javascript"></script>