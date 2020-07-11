<main>
    <div class="container-fluid">
        <h1 class="mt-4">Permohonan Informasi</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Permohonan Informasi
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Permohonan</th>
                                <th>Nama Pemohon</th>
                                <th>Judul Informasi</th>
                                <th>Status_laporan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_permohonan_informasi as $informasi) : ?>
                                <tr>
                                    <td><?= $informasi->id_permohonan ?></td>
                                    <td><?= $informasi->nama_pemohon ?></td>
                                    <td><?= $informasi->judul_informasi ?></td>
                                    <td><?= $informasi->status_informasi ?></td>
                                    <td>
                                        <?php
                                        if ($informasi->status_informasi == 'belum ditanggapi') : ?>
                                            <a href='<?= site_url("Permohonan_informasi/ubah_status/$informasi->id_permohonan") ?>' class="badge badge-success badge-pill">Ditanggapi</a>
                                            <a href='<?= site_url("Permohonan_informasi/detail_informasi/$informasi->id_permohonan") ?>' class="badge badge-primary badge-pill">Lihat Detail</a>
                                        <?php else : ?>
                                            <a href='<?= site_url("Permohonan_informasi/detail_informasi/$informasi->id_permohonan") ?>' class="badge badge-primary badge-pill">Lihat Detail</a>
                                        <?php endif; ?>
                                    </td>
                                    </td>
                                </tr>
                            <?php
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bagian heading modal</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <p>bagian body modal.</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
            </div>
        </div>
    </div>
</div>