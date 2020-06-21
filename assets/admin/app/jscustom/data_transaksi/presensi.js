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

$(document).ready(function(){
    $("#html_table").on('click', '.hapus', function () {
        let val = $(this).attr('value');
        konfirmasi(val);
    });
});

$(document).ready(function(){
    $("#html_table").on('click', '.editdata', function () {
        let val = $(this).attr('value');
        loadData(val, '#editfile');
    });
});

function modalEdit(data, Class) {
    console.log(data);
    $(`${Class}`).on('shown.bs.modal', function (e) {
        
        var modal = $(this);
        modal.find('#id').val(data[0].id_presensi);
        modal.find('#nip2').val(data[0].nip);
        modal.find('#nip').val(data[0].nip);
        modal.find('#nama').val(data[0].nama);
        modal.find('#tanggal').val(converIndo(data[0].tanggal));
        modal.find('#jam_masuk').val(data[0].jam_masuk);
        modal.find('#jam_keluar').val(data[0].jam_keluar);
    });
}

function loadData(val, Class) {
    $.ajax({
        type: 'post',
        url: base_url + 'admin/load_data_presensi',
        data: {
            'id': val
        },
        success: function(data) {
            modalEdit(data, Class);
        },
        error: function(error){
            console.log(error);
        }
    });
}

// delete konfirmasi
function konfirmasi(id){
    Swal.fire({
        title: 'Konfirmasi !',
        text: "Apakah anda yakin ingin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#c6c6c6',
        confirmButtonText: 'Iya, hapus data ini!'
    }).then((result) => {
        if (result.value) {
                $.ajax({
                    url : base_url + 'admin/hapus_presensi',
                    method : "POST",
                    data : {id: id},
                    success: function(data){
                        var url = base_url + 'admin/presensi' + '?hapusberhasil=success';
                        window.location = url;
                    }
                });
        }
    })
};
// end delete konfirmasi


function converIndo(string){
    // contoh : 2019-01-30 10:20:20
    
    bulanIndo = ['', '01', '02', '03', '04', '05', '06', '07', '08', '09' , '10', '11', '12'];
    
    tanggal = string.split("-")[2];
    bulan = string.split("-")[1];
    tahun = string.split("-")[0];
    
    return tanggal + "/" + bulanIndo[Math.abs(bulan)] + "/" + tahun;
}