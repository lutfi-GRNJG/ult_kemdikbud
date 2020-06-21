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
        <h3 style="text-align:center;margin:5px">Laporan Presensi dibulan <?= convert_bulan($this->input->get('bulan'))." - ".$this->input->get('tahun')?> </h3>
    <?php else: ?>
        <h3 style="text-align:center;margin:5px">Laporan Presensi</h3>
    <?php endif ?>
    <hr>
    
    <div class="lol" id="table"></div>
</body>

<script>
    window.print();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script>
    const base_url = "<?= base_url() ?>";
</script>

<script>
$(document).ready(function () {
    let url = "";
    <?php if ($this->input->get('tahun') && $this->input->get('bulan')): ?>
        let tahun = "<?= $this->input->get('tahun'); ?>";
        let bulan = "<?= $this->input->get('bulan'); ?>";
        url = base_url+`/admin/data_laporan_presensi/?bulan=${bulan}&tahun=${tahun}`;
    <?php else: ?>
        url = base_url+`/admin/data_laporan_presensi`;
    <?php endif ?>

    $.ajax({
        url: url,
        method: "get",
        dataType: 'json',
        success: function(data) {
            console.log(data);
            var html = '<table class="table" width="100%">';
            html += '<tr>';
            var flag = 0;
            $.each(data[0], function(index, value){
                if (index !="Hadir") {
                    html += '<th>'+index+'</th>';
                }
            });
            html += '</tr>';
             $.each(data, function(index, value){
                 html += '<tr>';
                $.each(value, function(index2, value2){
                    if (index2 != "Hadir") {
                        if (value2 == "Hadir") {
                            html += '<td style="color:blue">'+value2+'</td>';
                        }
                        else if (value2 == "Tidak hadir") {
                            html += '<td style="color:red">'+value2+'</td>';
                        }
                        else {
                            html += '<td>'+value2+'</td>';
                        }
                    }
                });
                html += '<tr>';
             });
             html += '</table>';
             $('#table').append(html);
        }
    });
});
</script>
</html>