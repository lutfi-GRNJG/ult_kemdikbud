<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
<style>
    table,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }
</style>

<body>
    <h2 style="text-align:center;margin-bottom:5px">AMNOTEL</h2>
    <?php if ($this->input->get('bulan') && $this->input->get('tahun')): ?>
        <h3 style="text-align:center;margin:5px">Laporan Gaji dibulan <?= convert_bulan($this->input->get('bulan'))." - ".$this->input->get('tahun')?> </h3>
    <?php else: ?>
        <h3 style="text-align:center;margin:5px">Laporan Gaji</h3>
    <?php endif ?>
    <hr>

    <table id="table" width="100%">
        <thead>
            <tr>
                <th title="Field #1">
                    No
                </th>
                <th title="Field #2">
                    Nama Karyawan
                </th>
                <th title="Field #3">
                    Jabatan
                </th>
                <th title="Field #4">
                    Gaji
                </th>
                <th title="Field #5">
                    Tanggal Penggajian
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($daftar_laporan_gaji as $gaji) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $gaji->nama ?></td>
                    <td><?= $gaji->nama_jabatan ?></td>
                    <td><?= rupiah($gaji->gaji_pokok_jabatan) ?></td>
                    <td><?= mediumdate_indo($gaji->tanggal) ?></td>
                </tr>

            <?php $no = 1 + $no;
            endforeach ?>
        </tbody>
    </table>
</body>

<script>
    window.print();
</script>

</html>