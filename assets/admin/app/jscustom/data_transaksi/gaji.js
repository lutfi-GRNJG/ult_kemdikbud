//== Class definition

var DatatableHtmlTableDemo = function() {
  //== Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('.m-datatable').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#generalSearch'),
      },
      columns: [
        {
          field: 'No',
          width: "30",
          orderable: "false",
        },
        {
          field: 'Deposit Paid',
          type: 'number',
        },
        {
          field: 'Order Date',
          type: 'date',
          format: 'YYYY-MM-DD',
        },
      ],
    });
  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableHtmlTableDemo.init();
});

jQuery(document).ready(function() {
  $(document).on('click', '.detail', function(){ 
    let id = $(this).attr('data-id');
    let tanggal = $(this).attr('data-tanggal');
    $.ajax({
        type: 'post',
        data: {
            nip: id,
        },
        url: base_url + 'admin/load_data_gaji',
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