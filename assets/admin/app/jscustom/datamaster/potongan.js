//== Class definition

var exec = function() {
  //== Private functions

  // demo initializer
  var data = function() {

    var datatable = $('.datapotongan').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#caripotongan'),
      },
      columns: [
        {
          field: 'No',
          width: "30",
          orderable: false, 
          target: 0,
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
      data();
    },
  };
}();

jQuery(document).ready(function() {
  exec.init();
});

function konfirmasi($id) {
    Swal.fire({
        title: 'Konfirmasi !',
        text: "Apakah anda yakin ingin menghapus data ini?",
        type: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#c6c6c6',
        confirmButtonText: 'Iya, hapus data ini!'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Data berhasil terhapus.',
                'success'
            )
            var url = base_url+'admin/hapuspotongan/';
            window.location = url + $id;
        }
    })
};
