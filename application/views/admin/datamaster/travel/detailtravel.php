<?php foreach ($detail as $detail): ?>
    <?php 
        $id_travel = $detail->id_travel;
        $tujuan = $detail->tujuan;
        $keterangan = $detail->keterangan;
        $biaya_perjalanan = $detail->biaya_perjalanan;
        $waktu_kunjungan = date('d/m/Y', strtotime($detail->waktu_kunjungan));
        $waktu_selesai_kunjungan = date('d/m/Y', strtotime($detail->waktu_selesai_kunjungan));
        $username = $detail->username;
        $nip = $detail->nip;
     ?>
<?php endforeach ?>
            <table class="table table-hover table-bordered" width="100%" cellpadding="5" >
                <thead class="thead-light">
                    <tr>
                        <th title="Field #1">
                            No
                        </th>
                        <th title="Field #2">
                            Tujuan
                        </th>
                        <th title="Field #3">
                            Biaya Perjalanan
                        </th>
                        <th title="Field #4">
                            Waktu Kunjungan
                        </th>
                        <th title="Field #5">
                            Keterangan
                        </th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $tujuan ?></td>
                            <td><?= rupiah($biaya_perjalanan) ?></td>
                            <td><?= $waktu_kunjungan . " <span style='font-weight:bold'> S/d </span>" . $waktu_selesai_kunjungan ?> </td>
                            <td><?= $keterangan ?></td>
                        </tr>
                    <?php $no = 1 + $no;?>
                </tbody>
            </table>
            <label class="mt-5">Karyawan yang berangkat</label>
            <table class="table table-hover table-bordered" id="html_table3" width="100%" cellpadding="5">
                <thead class="thead-light">
                    <tr>
                        <th title="Field #1">
                            Nip
                        </th>
                        <th title="Field #2">
                            Nama
                        </th>
                                              
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail_lagi as $detail_lagi): ?>
                        <tr>
                            <td><?= $detail_lagi->nip ?></td>
                            <td><?= $detail_lagi->username ?></td>
                            
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">
                Tutup
            </button>