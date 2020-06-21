//== Class definition

var exec = function() {
//== Private functions

// demo initializer
var data = function() {

  var datatable = $('.grup').mDatatable({
    data: {
      saveState: {cookie: false},
    },
    search: {
      input: $('#carigrup'),
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

  var datatable2 = $('.anggrup').mDatatable({
    data: {
      saveState: {cookie: false},
    },
    search: {
      input: $('#cariangrup'),
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

$(document).ready(function () {
  let calendar = $('#calendar').fullCalendar({
    editable: true,
    deleteable: true,
    events: base_url+'calendar/fetchevent/',
    displayEventTime: false,
    eventRender: function (event, element, view) {
      if (event.allDay === 'true') {
        event.allDay = true;
      } else {
        event.allDay = false;
      }
    },
    selectable: true,
    selectHelper: true,
    select: function yuhu(start, end, allDay) {
      start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
      end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

      let tglawal = moment(start).format("DD/MM/YYYY");
      let tglakhir = moment(end).subtract(1, "days");
      tglakhir = tglakhir.format("DD/MM/YYYY");

      document.getElementById("tglawal").value = tglawal;
      document.getElementById("tglend").value = tglakhir;

      $("#pilihgrup").modal('show');

      $('#pilihgrup').on('change', function() {
      // $(').find("#grup").change(function(){
        console.log("terbuka");
        // ambil nilai
        let idgroup = $('#pilihgrup').find("#grupcuy option:selected").attr('idgrup');
        let title = $('#pilihgrup').find("#grupcuy option:selected").attr("title");

        // $('#pilihgrup').modal('hide');

        if (title) {
          $.ajax({
            url: base_url+'calendar/addevent/',
            data: 'id_grup=' + idgroup + '&tanggal_mulai=' + start + '&tanggal_selesai=' + end,
            type: "POST",
            success: function (data) {
              $('#grupcuy').prop('selectedIndex',0);
              displayMessage("Added Successfully");
              window.location = base_url+'admin/penjadwalan/';
            }
          });
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay
          },
          true
          );
        }
      });
      calendar.fullCalendar('unselect');
    },

    editable: true,
    eventDrop: function (event, delta) {
      let start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      let end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      $.ajax({
        url: base_url+'calendar/editevent/',
        data: 'id_grup=' + event.idgroup + '&tanggal_mulai=' + start + '&tanggal_selesai=' + end + '&id=' + event.id,
        type: "POST",
        success: function (response) {
          displayMessage("Updated Successfully");
          window.location = base_url+'admin/penjadwalan/';
        }
      });
    },
    eventClick: function (event) {
      let deleteMsg = confirm("Do you really want to delete?");
      if (deleteMsg) {
        $.ajax({
          type: "POST",
          url: base_url+'calendar/deleteevent/',
          data: "id=" + event.id,
          success: function (response) {
            $('#calendar').fullCalendar('removeEvents', event.id);
            displayMessage("Deleted Successfully");
            // window.location = base_url+'admin/penjadwalan/';

          }
        });
      }
    }

  });

  $('#pilihgrup').on('hidden.bs.modal', function () {
    $("#pilihgrup").off('change');
  });
});

function displayMessage(message) {
  $(document).ready(function () {
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };

    toastr.success(message, "Success");
  });
}

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
        url: base_url+'admin/hapusgrup/'+$id,
        success: function(data) { 
          let url = base_url+'admin/penjadwalan/?hapus=success';
          window.location = url;
        },
        error: function(xhr, status, error) {
          Swal.fire(
              'Gagal dihapus!',
              'Grup ini masih memiliki anggota, silahkan diubah.',
              'error'
              )
        }
      });
    }
  })
};



function konfirmasianggota($id){
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
      Swal.fire(
        'Deleted!',
        'Data berhasil terhapus.',
        'success'
        )
      let url = base_url+'admin/hapus_anggota_grup/';
      window.location = url+$id;
    }
  })
};