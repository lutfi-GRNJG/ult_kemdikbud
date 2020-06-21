<table class="table table-hover table-bordered" width="100%" cellpadding="5">
    <thead class="thead-light">
        <tr>
            <th title="Field #1">
                No
            </th>
            <th title="Field #2">
                Tanggal
            </th>
            <th title="Field #3">
                Keterangan
            </th>
            <th title="Field #4">
                Status
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($target_rinci as $rincian) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= mediumdate_indo($rincian->tanggal) ?></td>
                <td><?= $rincian->keterangan_target ?></td>
                <td><?= $rincian->status_target ?></td>
            </tr>

        <?php $no = 1 + $no;
        endforeach ?>
    </tbody>
</table>