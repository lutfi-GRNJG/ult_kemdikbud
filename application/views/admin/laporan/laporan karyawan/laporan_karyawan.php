<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Laporan Karyawan
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <!-- Konten -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Laporan Karyawan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">

                <?php if ($this->input->get('tahun') && $this->input->get('bulan')) :
                    $tahun = $this->input->get('tahun');
                    $bulan = $this->input->get('bulan');
                ?>
                    <div class="alert m-alert--default" role="alert">
                        Filter data pada bulan :
                        <strong>
                            <?= convert_bulan($bulan) . " / " . $tahun ?>
                        </strong>
                    </div>
                <?php endif ?>

                <div>
                    <div class="float-right" style="display: inline-flex;">

                        <!-- button print Jika ada filter -->
                        <?php if ($this->input->get('tahun') && $this->input->get('bulan')) :
                            $tahun = $this->input->get('tahun');
                            $bulan = $this->input->get('bulan');
                        ?>
                            <a href="<?= site_url('admin/cetak_laporan_karyawan?bulan=' . $bulan . '&tahun=' . $tahun) ?>" target="_blank">
                            <?php else : ?>
                                <a href="<?= site_url('admin/cetak_laporan_karyawan') ?>" target="_blank">
                                <?php endif ?>
                                <button type="button" id="btnprint" class="btn btn-default mr-2"><i class="la la-print"></i> Print</button>
                                </a>

                                <!-- button filter -->
                                <div>
                                    <div>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filter" aria-expanded="false" aria-controls="collapseExample">
                                            <span>
                                                <i class="la la-filter"></i>
                                                Filter
                                            </span>
                                        </button>
                                    </div>

                                    <!-- collapse -->
                                    <div class="collapse" id="filter" style="box-shadow: 0px 0px 8px 0px #7d88e0;position: absolute;margin-top: 12px;right: 4.3%;background: #c2c6ef;width: 18.4%;">
                                        <div class="card card-body" style="border-radius: 5px;">

                                            <div class="form-group m-form__group mb-0">
                                                <h6 class="card-title font-weight-bold text-center">Filter</h6>
                                                <hr>
                                                <div class="container">
                                                    <form action="<?= site_url('admin/filter_laporan_karyawan') ?>" method="get">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-4 col-form-label">Bulan</label>
                                                            <div class="col-sm-8">
                                                                <select name="bulan" class="form-control js-select2">
                                                                    <?php for ($m = 1; $m <= 12; ++$m) {
                                                                        $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                                                    ?>
                                                                        <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-4 col-form-label">Tahun</label>
                                                            <div class="col-sm-8">
                                                                <select name="tahun" class="form-control js-select2">
                                                                    <?php
                                                                    $year = date('Y');
                                                                    $min = $year - 60;
                                                                    $max = $year;
                                                                    for ($i = $max; $i >= $min; $i--) {
                                                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-2 w-100">
                                                            <span>
                                                                Filter Data
                                                            </span>
                                                        </button>
                                                        <a href="<?= site_url('admin/tampil_laporan_karyawan') ?>">
                                                            <button type="button" class="btn btn-secondary mt-2 w-100">
                                                                <span>
                                                                    Hapus Filter Data
                                                                </span>
                                                            </button>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                    </div>

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span>
                                                    <i class="la la-search"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form -->
                </div>


                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                No
                            </th>
                            <th title="Field #2">
                                Nama Karyawan
                            </th>
                            <th title="Field #3">
                                Status
                            </th>
                            <th title="Field #4">
                                Jabatan
                            </th>
                            <th title="Field #5">
                                Tanggal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($daftar_laporan_karyawan as $karyawan) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $karyawan->nama ?></td>
                                <td><?= $karyawan->keterangan_status_karyawan ?></td>
                                <td><?= $karyawan->nama_jabatan ?></td>
                                <td><?= date('F/Y', strtotime($karyawan->tanggal)) ?></td>
                            </tr>

                        <?php $no = 1 + $no;
                        endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/laporan/karyawan.js') ?>"></script>