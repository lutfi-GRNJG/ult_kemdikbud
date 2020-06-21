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
                <div class="col-xl-6">
                    <div class="m-content">
                        <div class="m-portlet m-portlet--mobile">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Tambah Potongan
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_tambah_potongan'); ?>">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group">
                                        <label for="">Nama Karyawan</label>
                                        <select class="form-control js-select2" name="karyawan">
                                            <?php foreach ($karyawan as $karyawan) : ?>
                                                <option value="<?php echo $karyawan->nip ?>">
                                                    <?php echo $karyawan->username ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Nominal</label>
                                        <div class="input-group m-input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                Rp.
                                            </span>
                                            <input type="text" onkeyup="rupiah('rupiahcuy')" id="rupiahcuy" class="form-control coba" name="nominal" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">Tanggal</label>
                                        <div class="input-group date" id="m_datepicker_4_3">
                                            <input type="text" name="tanggal" class="form-control m-input" readonly="">
                                            <span class="input-group-addon">
                                                <i class="la la-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Keterangan Potongan</label>
                                        <select name="keterangan" id="" class="form-control">
                                            <option value="terlambat">Terlambat</option>
                                            <option value="tidak masuk">Tidak Masuk</option>
                                            <option value="hutang/bon">Hutang / Bon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                        <a href="<?= site_url('admin/tampil_potongan') ?>"><button type="button" class="btn btn-secondary">
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