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

function konfirmasi($id){ 
  console.log($id); Swal.fire({ 
    title: 'Konfirmasi !' , 
    text: "Apakah anda yakin ingin menghapus data ini?" , 
    type: 'warning' , 
    showCancelButton: true, 
    confirmButtonColor: '#3085d6' , 
    cancelButtonColor: '#c6c6c6' , 
    confirmButtonText: 'Iya, hapus data ini!' 
  }).then((result)=> {
    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Data berhasil terhapus.',
        'success'
        )
      $.ajax({
        type : 'post',
        /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
        url: base_url+'admin/hapus_travel_auth',
        data :  'id_travel='+ $id,
        success: function(data) { 
          var url = base_url+'admin/hapus_travel_auth/';
          window.location = url;
        }
      });
    }
  })
};