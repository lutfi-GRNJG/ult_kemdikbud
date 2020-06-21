jQuery(document).ready(function() {
  $(document).on('click', '.detail', function(){ 
    let id = $(this).attr('data-id');
    let selesai = $(this).attr('data-selesai');
    let kunjungan = $(this).attr('data-kunjungan');
    $.ajax({
        type: 'post',
        data: {
            id: id,
        },
        url: base_url + 'karyawan/travel_auth/load_json',
        success: function(data) {
            console.log(data);
            console.log(data[0].tujuan);
            $("input").css("background", "#f4f5f8");
            $("#tujuan").val(data[0].tujuan);
            $("#waktu_kunjungan").val(`${kunjungan} S/d ${selesai}`);
            $("#biaya").val(rubah(data[0].biaya_perjalanan));
            $("#Keterangan").val(data[0].keterangan);
            $("#hasildetail table").remove();
            let option = "<table class='table m-table m-table--head-bg-brand table-bordered table-hover' style='font-size: 1rem'>";
            option += "<thead class='thead-light'><tr><th>Nip</th><th>Nama</th></tr></thead><tbody>";
            $.each( data, function( key, value ) {
              option+= `<tr>
              <td>${value.nip}</td>
              <td>${value.nama}</td>
              </tr>`;
            });
            option += "</tbody></table>";
            $("#hasildetail").append(option);

        }
    });
  });
});

function rubah(angka){
   var reverse = angka.toString().split('').reverse().join(''),
   ribuan = reverse.match(/\d{1,3}/g);
   ribuan = ribuan.join('.').split('').reverse().join('');
   return ribuan;
 }