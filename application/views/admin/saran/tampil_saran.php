<main>
    <div class="container-fluid">
        <h1 class="mt-4">Layanan Saran</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Daftar Saran
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Judul Saran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_Saran as $saran) : ?>
                                <tr>
                                    <td><?= $saran->id_saran ?></td>
                                    <td><?= $saran->nama_pemohon ?></td>
                                    <td><?= $saran->judul_saran ?></td>
                                    <td><?= $saran->status_saran ?></td>
                                    <td>
                                        <?php
                                        if ($saran->status_saran == 'belum ditanggapi') : ?>
                                            <a href='<?= site_url("Saran/ubah_status/$saran->id_saran") ?>' class="badge badge-success badge-pill">Ditanggapi</a>
                                            <a href='<?= site_url("Saran/detail_saran/$saran->id_saran") ?>' class="badge badge-primary badge-pill">Lihat Detail</a>
                                        <?php else : ?>
                                            <a href='<?= site_url("Saran/detail_saran/$saran->id_saran") ?>' class="badge badge-primary badge-pill">Lihat Detail</a>
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