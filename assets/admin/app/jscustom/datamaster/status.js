//== Class definition

var status_exec = function() {
  //== Private functions

  // demo initializer
  var status = function() {

    var datatable = $('#datastatus').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#caristatus'),
      },
      columns: [
        {
          field: 'No',
          width: "30",
          orderable: false, 
          target: 0,
          "searchable": false,
        },
      ],
    });
  };

  var jadwal = function() {

    var datatable2 = $('#datajadwal').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#carijadwal'),
      },
      columns: [
        {
          field: 'No',
          width: "30",
          orderable: false, 
          target: 0,
        },
      ],
    });
  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      status();
      jadwal();
    },
  };
}();

jQuery(document).ready(function() {
  status_exec.init();
});

function konfirmasi($id){
  console.log($id);
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
        type : 'post',
        url: base_url+'admin/hapus_status/'+$id,
        success: function(data) { 
          var url = base_url+'admin/tampil_status/?hapus=success';
          window.location = url;
        },
        error: function(xhr, status, error) {
          Swal.fire(
              'Gagal dihapus!',
              'Status ini masih memiliki jadwal, silahkan diubah.',
              'error'
              )
        }
      });
    }
  })
};
