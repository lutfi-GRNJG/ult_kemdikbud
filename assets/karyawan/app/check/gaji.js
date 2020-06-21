jQuery(document).ready(function() {
  $(document).on('click', '.detail', function(){ 
    let id = $(this).attr('data-id');
    let tanggal = $(this).attr('data-tanggal');
    $.ajax({
        type: 'post',
        data: {
            id: id,
        },
        url: base_url + 'karyawan/check_gaji/load_json',
        success: function(data) {
            $('#lihatgaji').modal('show');
            const modal = $("#lihatgaji");

            $("input").css("background", "#f4f5f8");
            modal.find("#titleview").html("Data Gaji : " +data[0].nama);
            modal.find("#nip").val(data[0].nip);
            modal.find("#nama").val(data[0].nama);
            modal.find("#tanggal").val(tanggal);
            modal.find("#gajipokok").val(rubah(data[0].gaji_pokok));
            modal.find("#potongan").val(rubah(data[0].potongan_dll));
            modal.find("#tunjangan").val(rubah(data[0].tunjangan_sikap));
            modal.find("#total").val(rubah(data[0].total_gaji));
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