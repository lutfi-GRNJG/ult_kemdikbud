<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h3 style="text-align:center;margin:5px">Laporan Karyawan dibulan <?= convert_bulan($this->input->get('bulan'))." - ".$this->input->get('tahun')?> </h3>
    <?php else: ?>
        <h3 style="text-align:center;margin:5px">Laporan Karyawan</h3>
    <?php endif ?>
    <hr>
    <table id="html_table" width="100%">
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
</body>

<script>
    window.print();
</script>

</html>