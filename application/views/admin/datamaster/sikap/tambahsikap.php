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
                                                Tambah Sikap
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <form class="m-form m-form--fit m-form--label-align-right" method="post" action="<?= site_url('admin/proses_tambah_sikap'); ?>">
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
                                            <a href="<?= site_url('admin/tampil_sikap') ?>"><button type="button" class="btn btn-secondary">
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