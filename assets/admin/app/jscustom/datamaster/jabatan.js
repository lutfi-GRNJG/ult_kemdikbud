//== Class definition
var jabatanexec = function() {
  //== Private functions

  // demo initializer
  var jabatan = function() {

    var datatable = $('.datajabatan').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#carijabatan'),
        delay: 0,
      },
      columns: [
        {
          field: 'No',
          width: "30",
        },
        {
          field: 'Aksi',
          sortable: false,
          textAlign: 'center'
        },
      ],
    });
  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      jabatan();
    },
  };
}();

jQuery(document).ready(function() {
  jabatanexec.init();
});

$(document).ready(function() {
    $('#editjabatan').on('show.bs.modal', function(e) {
        console.log("edit");
        var myId = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
            url: base_url+'Admin/edit_jabatan', //ini controller buatedit
            data: 'ids=' + myId,
            success: function(data) {
                $('#result').html(data);
            }
        });
    });
});