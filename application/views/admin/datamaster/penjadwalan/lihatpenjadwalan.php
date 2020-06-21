<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Penjadwalan
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <!-- Konten -->

	<div class="m-content">
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-primary"></i>
            </div>
            <div class="m-alert__text">
                Halaman ini untuk mengatur group tugas karyawan, dan mengatur penjadwalan.
            </div>
        </div>

        <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation-1"></i>
                <span></span>
            </div>
            <div class="m-alert__text">
                <strong>
                    Ctt :
                </strong>
                <li>Tambah / Ubah anggota group pada tab <b>Anggota Grup</b></li>
                <li>Untuk mengatur penjadwalan, silahkan klik tanggal pada calender dibawah, kemudian pilih grup yang bertugas.</li>
            </div>
        </div>

	    <div class="row">
	    	<div class="col-xl-6">
		        <div class="m-portlet m-portlet--mobile">
		            <div class="m-portlet__head">
		                <div class="m-portlet__head-caption">
		                    <div class="m-portlet__head-title">
		                        <h3 class="m-portlet__head-text">
		                            Group
		                        </h3>
		                    </div>
		                </div>
		            </div>
		            <div class="m-portlet__body">
		                <div>
		                    <!-- begin:add button -->
		                    <div class="float-right">
		                        <a href="#">
		                            <button type="button" data-toggle="modal" data-target="#tambahgrup" class="btn btn-primary">Tambah Group</button>
		                        </a>
		                    </div>
		                    <!-- end: add button -->
		                    <!--begin: Search Form -->
		                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
		                        <div class="row align-items-center">
		                            <div class="col-xl-8 order-2 order-xl-1">
		                                <div class="form-group m-form__group row align-items-center">
		                                    <div class="col-md-12">
		                                        <div class="m-input-icon m-input-icon--left">
		                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="carigrup">
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
		                <table class="grup" id="grup" width="100%">
		                    <thead>
		                        <tr>
		                            <th title="Field #1">
		                                No
		                            </th>
		                            <th title="Field #2">
		                                Group
		                            </th>
		                            <th title="Field #3">
		                                Aksi
		                            </th>
		                        </tr>
		                    </thead>
		                    <tbody>
                                <?php $no = 1;
                                foreach ($tampil_daftar_grup as $tampil_daftar_grup) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $tampil_daftar_grup->nama_grup ?></td>
                                        <td><span style="overflow: visible; width: 110px;">                      
                                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit data" data-toggle="modal" data-target="#m_blockui_4_1_modal" id="editdata" data-id="<?= $tampil_daftar_grup->id_grup ?>">
                                                    <i class="la la-edit"></i>                      
                                                </a>                        
                                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="konfirmasi(<?= $tampil_daftar_grup->id_grup ?>)" title="Delete">                          
                                                    <i class="la la-trash"></i>                     
                                                </a>                    
                                            </span>
                                        </td>
                                    </tr>
                                <?php $no++;} ?>
		                    </tbody>
		                </table>
		            </div>
		        </div>
	    	</div>
	    	<div class="col-xl-6">
		        <div class="m-portlet m-portlet--mobile">
		            <div class="m-portlet__head">
		                <div class="m-portlet__head-caption">
		                    <div class="m-portlet__head-title">
		                        <h3 class="m-portlet__head-text">
		                            Anggota Grup
		                        </h3>
		                    </div>
		                </div>
		            </div>
		            <div class="m-portlet__body">
		                <div>
		                    <!-- begin:add button -->
		                    <div class="float-right">
		                        <a href="#">
		                            <button type="button" data-toggle="modal" data-target="#tambahanggota" class="btn btn-primary">Set Anggota Grup</button>
		                        </a>
		                    </div>
		                    <!-- end: add button -->
		                    <!--begin: Search Form -->
		                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
		                        <div class="row align-items-center">
		                            <div class="col-xl-8 order-2 order-xl-1">
		                                <div class="form-group m-form__group row align-items-center">
		                                    <div class="col-md-12">
		                                        <div class="m-input-icon m-input-icon--left">
		                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="cariangrup">
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
		                <table class="anggrup" id="anggrup" width="100%">
		                    <thead>
		                        <tr>
		                            <th title="Field #1">
		                                Grup
		                            </th>
		                            <th title="Field #3">
		                                NIP
		                            </th>
		                            <th title="Field #4">
		                                Nama
		                            </th>
		                        </tr>
		                    </thead>
		                    <tbody>
                                <?php $gabung=0; $grupnama=""; 
                                    foreach ($tampil_anggota_grup as $tampil_anggota_grup): ?>
                                    <tr>
                                        <?php if ($grupnama == $tampil_anggota_grup->nama_grup): ?>
                                            <td rowspan="<?= $gabung ?>"><?= $tampil_anggota_grup->nama_grup ?></td>
                                        <?php endif ?>
                                        <?php if ($grupnama != $tampil_anggota_grup->nama_grup): ?>
                                            <td><?= $tampil_anggota_grup->nama_grup ?></td>
                                        <?php endif ?>
                                        <td><?= $tampil_anggota_grup->nip ?></td>
                                        <td><?= $tampil_anggota_grup->username ?></td>
                                    </tr>

                                <?php $grupnama = $tampil_anggota_grup->nama_grup;
                                endforeach ?>
		                    </tbody>
		                </table>
		            </div>
		        </div>
	    	</div>
	    </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Calender Penjadwalan
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="response"></div>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="modal fade" id="pilihgrup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pilih Grup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tanggal Mulai :</label>
                        <input type="text" id="tglawal" class="form-control" disabled="">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Selesai :</label>
                        <input type="text" id="tglend" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Grup yang akan bertugas</label>
                        <select name="" id="grupcuy" class="form-control">
                            <option value="" id="defaultgrup" selected>Pilih Grup</option>
                            <?php foreach ($daftar_grup as $daftar_grup): ?>
                                <option title="<?= $daftar_grup->nama_grup ?>" idgrup="<?= $daftar_grup->id_grup ?>">
                                    <?= $daftar_grup->nama_grup ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

</script>

        <!-- modal -->
        <div class="modal fade" id="m_blockui_4_1_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Edit Grup
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#m_blockui_4_1_modal').on('show.bs.modal', function (e) {
                    console.log("edit");
                    var myId = $(e.relatedTarget).data('id');
                    $.ajax({
                        type : 'post',
                        /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                        url: "<?= site_url('admin/editgrup') ?>",
                        data :  'ids='+ myId,
                        success: function(data) { 
                            $('#result').html(data);
                        }
                    });
                });
            });
        </script>
        <!-- end modal -->

        <!-- modal tambahsikap -->
        <!-- modal -->
        <div class="modal fade" id="tambahgrup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" >
                    <form class="" method="post" action="<?= site_url('admin/proses_tambah_grup'); ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Tambah Grup
                            </h5>
                            <p id="result"></p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    ×
                                </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Nama Grup</label><br>
                                <input type="text" name="nama_grup" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end konten -->

        <!-- tambah anggota  -->
        <div class="modal fade" id="tambahanggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" >
                    <form class="" method="post" action="<?= site_url('admin/proses_tambah_anggota_grup'); ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Tambah Anggota Per-Grup
                            </h5>
                            <p id="result"></p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    ×
                                </span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Pilih Group</label>
                                <select name="id_grup" id="grup" class="form-control" required="">
                                    <?php $i=1; 
                                    foreach ($tampil_daftar_anggota_grup as $tampil_daftar_anggota_grup): 
                                        if($i == 1):?>
                                            <option value="" selected>Pilih Grup</option>
                                        <?php endif ?>
                                        <option title="<?= $tampil_daftar_anggota_grup->nama_grup ?>" value="<?php echo $tampil_daftar_anggota_grup->id_grup ?>" idgrup="<?= $tampil_daftar_anggota_grup->id_grup ?>">
                                            <?= $tampil_daftar_anggota_grup->nama_grup ?>
                                        </option>
                                    <?php $i++; endforeach ?>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="">Nama karyawan</label>
                                <select class="form-control js-select2" style="float: left;width: 100%" id="tambahkaryawankegrup" name="karyawan">
                                    <?php foreach ($karyawan as $karyawan) : ?>
                                        <option value="<?php echo $karyawan->nip ?>">
                                            <?php echo $karyawan->username ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end tambah anggota -->

        <!-- edit anggota -->
         <div class="modal fade tambahanggota" id="editanggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Edit Anggota Grup
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="resulteditanggota"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#editanggota').on('show.bs.modal', function (e) {
                    console.log("edit");
                    var myId = $(e.relatedTarget).data('id');
                    $.ajax({
                        type : 'post',
                        /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                        url: "<?= site_url('admin/edit_anggota') ?>",
                        data :  'ids='+ myId,
                        success: function(data) { 
                            $('#resulteditanggota').html(data);
                        }
                    });
                });
            });
        </script>
        <!-- end edit anggota -->
    </div>
</div>
<!-- end:: Body -->
<script src="<?= base_url('assets/admin/app/jscustom/datamaster/penjadwalan.js') ?>"></script>
