<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Pengaturan Role
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
                            Pengaturan Akun Admin / Karyawan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    <!-- begin:add button -->
                    <div class="float-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahAkun">Tambah Akun Karyawan</button>
                    </div>
                    <!-- end: add button -->

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-8">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="NIP, NIK, Username, atau Role" id="generalSearch">
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
                                NIP
                            </th>
                            <th title="Field #1">
                                NIK
                            </th>
                            <th title="Field #2">
                                Username
                            </th>
                            <th title="Field #2">
                                Role
                            </th>
                            <th title="Field #5">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($karyawan as $kar) : ?>
                            <tr>
                                <td><?= $kar->nip ?></td>
                                <td><?= $kar->nik ?></td>
                                <td><?= $kar->Username ?></td>
                                <td><?= $kar->role ?></td>
                                <td>
                                    <button data-toggle="modal" onclick="edit(<?= $kar->nip ?>)" data-target="#EditAkun" title="Edit Data" class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button onclick="hapusUsers(<?= $kar->nip ?>, <?= $kar->nik ?>, '<?= $kar->Username ?>')" title="Hapus Akun" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only deletekar">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end konten -->
</div>
</div>

<!-- tambah akun modal -->
<div class="modal fade" id="TambahAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= site_url('role/proses_tambah_akun'); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NIP</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" name="nip" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NIK</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" name="nik" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">USERNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">ROLE</label>
                        <div class="col-sm-10">
                            <select name="role" id="role" class="form-control" required="">
                                <option value="">- Pilih Role -</option>
                                <option value="admin">Admin</option>
                                <option value="karyawan">Karyawan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row jabatan" style="display: none">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">JABATAN</label>
                        <div class="col-sm-10">
                            <select name="jabatan" id="" class="form-control" required="">
                                <option value="">- Pilih Jabatan -</option>
                                <?php foreach ($jabatan as $jabatan): ?>
                                    <option value="<?= $jabatan->id_jabatan ?>"><?= $jabatan->nama_jabatan ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="password" data-toggle="password" class="form-control" name="password" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">STATUS</label>
                        <div class="col-sm-10">
                            <div class="m-radio-inline">
                                <label class="m-radio">
                                    <input type="radio" name="isaktif" value="1" checked>
                                    Aktif
                                    <span></span>
                                </label>
                                <label class="m-radio">
                                    <input type="radio" name="isaktif" value="0">
                                    Nonaktif
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end tambah akun modal -->

<!-- edit akun modal -->
<div class="modal fade" id="EditAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= site_url('role/proses_edit_role'); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  m-input m-input--solid" name="nip" id="nip" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  m-input m-input--solid" name="nik" id="nik" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">USERNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  m-input m-input--solid" name="username" id="username" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  m-input m-input--solid" name="nama" id="nama" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">ROLE</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control roleedit" id="roleedit" required></select>
                        </div>
                    </div>
                    <div class="form-group row jabatanedit">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">JABATAN</label>
                        <div class="col-sm-10">
                            <select name="jabatan" class="form-control jabatan" id="jabatanedit" required></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="password" data-toggle="password" class="form-control" name="password">
                            <small class="text-danger">*Isi jika ingin merubah password akun</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">STATUS</label>
                        <div class="col-sm-10">
                            <div class="m-radio-inline">
                                <label class="m-radio">
                                    <input type="radio" id="aktif" name="isaktif" value="1">
                                    Aktif
                                    <span></span>
                                </label>
                                <label class="m-radio">
                                    <input type="radio" id="nonaktif" name="isaktif" value="0">
                                    Nonaktif
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end edit akun modal -->
<script src="<?= base_url('assets/admin/app/jscustom/setting/role.js') ?>"></script>