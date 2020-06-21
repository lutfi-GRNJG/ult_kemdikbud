<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Karyawan
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
                            Data Karyawan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-8">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input m-input--solid" placeholder="Nip, Nama, Jabatan. Status" id="generalSearch">
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
                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                NIP
                            </th>
                            <th title="Field #2">
                                Nama Karyawan
                            </th>
                            <th title="Field #3">
                                Jabatan
                            </th>
                            <th title="Field #4">
                                Status
                            </th>
                            <th title="Field #5">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach ($daftar_karyawan as $karyawan) {
                                ?>
                            <tr>
                                <td><?= $karyawan->nip ?></td>
                                <td><?= $karyawan->nama ?></td>
                                <td><?= $karyawan->role ?></td>
                                <td><?= $karyawan->keterangan_status_karyawan ?></td>
                                <td><span style="overflow: visible; width: 110px;">                      
                                        <a class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" onclick="lihat(<?= $karyawan->nip ?>)" title="Lihat Data">
                                            <i class="la la-eye" id="lihatviewlengkap"></i>                      
                                        </a>                        
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>
<!-- end:: Body -->

<!-- modal detail view -->
<div class="modal fade" id="detaildata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="">Nik</label>
                    <input type="text" class="form-control" id="nik" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="nama" disabled="">
                </div>
                <div class="form-group">
                    <label for="">TTL</label>
                    <input type="text" class="form-control" id="ttl" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Goldar</label>
                    <input type="text" class="form-control" id="goldar" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="alamat" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Kewarganegaraan</label>
                    <input type="text" class="form-control" id="warga" disabled="">
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="">Nip</label>
                    <input type="text" class="form-control" id="nip" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Nomor HP</label>
                    <input type="text" class="form-control" id="nomor" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Status Karyawan</label>
                    <input type="text" class="form-control" id="status" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Jabatan Karyawan</label>
                    <input type="text" class="form-control" id="jbtn" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <input type="text" class="form-control" id="agama" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Status Perkawinan</label>
                    <input type="text" class="form-control" id="s_kawin" disabled="">
                </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal detail view -->

<script src="<?= base_url('assets/admin/app/jscustom/karyawan/karyawan.js') ?>"></script>