$(document).ready(function() {
    $('#hapustarget').on('show.bs.modal', function(e) {
        var myId = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
            url: base_url+'admin/hapus_target',
            data: 'ids=' + myId,
            success: function(data) {
                $('#resulthapus').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#targetrinci').on('show.bs.modal', function(e) {
        console.log("edit");
        var myId = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
            url: base_url+'admin/target_rinci',
            data: 'ids=' + myId,
            success: function(data) {
                $('#result_rinci').html(data);
            }
        });
    });
});

var status_exec = function() {
  //== Private functions

  // demo initializer
  var status = function() {

    var datatable = $('#datatarget').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#caritarget'),
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

  var jadwal = function() {

    var datatable2 = $('#datatarget').mDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#caritarget'),
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
