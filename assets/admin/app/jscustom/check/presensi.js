// //== Class definition

// var DatatableHtmlTableDemo = function() {
//   //== Private functions

//   // demo initializer
//   var demo = function() {

//     var datatable = $('.m-datatable').mDatatable({
//       data: {
//         saveState: {cookie: false},
//       },
//       search: {
//         input: $('#generalSearch'),
//       },
//       columns: [
//         {
//           field: 'No',
//           width: "30",
//         },
//         {
//           field: 'Deposit Paid',
//           type: 'number',
//         },
//         {
//           field: 'Order Date',
//           type: 'date',
//           format: 'YYYY-MM-DD',
//         },
//       ],
//     });
//   };

//   return {
//     //== Public functions
//     init: function() {
//       // init dmeo
//       demo();
//     },
//   };
// }();

jQuery(document).ready(function() {
  // DatatableHtmlTableDemo.init();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // Typical action to be performed when the document is ready:
      var data=JSON.parse(xhttp.responseText);
      console.log(data);
    }
  };
  xhttp.open("GET", base_url+"/admin/get_CheckPresensi", true);
  xhttp.send();

});


//== Class definition

var DatatableJsonRemoteDemo = function () {
  //== Private functions

  // basic demo
  var demo = function () {

    var datatable = $('.m_datatable').mDatatable({
      // datasource definition
      data: {
        type: 'remote',
        source: base_url+"/admin/get_CheckPresensi",
        pageSize: 10,
      },

      // layout definition
      layout: {
        theme: 'default', // datatable theme
        class: '', // custom wrapper class
        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
        footer: false // display/hide footer
      },

      // column sorting
      sortable: true,

      pagination: true,

      search: {
        input: $('#generalSearch')
      },

      // columns definition
      columns: [
      {
        field: "No",
        title: "No",
        width: 30,
        sortable: false,
        selector: false,
        textAlign: 'center',
        template: function (row) {
          return row.No;
        }
      }, 
      {
        field: "Tanngal",
        title: "Tanggal",
        sortable: false,
        selector: false,
        textAlign: 'center',
        template: function (row) {
          return row.Tanggal;
        }
      }, 
      {
        field: "Nip",
        title: "Nip",
        template: function (row) {
          return row.Nip;
        }
      }, 
      {
        field: "Nama",
        title: "Nama",
        template: function (row) {
          return row.Nama;
        }
      },
      {
        field: "Kehadiran",
        title: "Kehadiran",
        template: function (row) {
          // return row.Kehadiran;
          var status = {
            1: {'title': 'Hadir', 'class': 'm-badge--success'},
            2: {'title': 'Tidak hadir', 'class': ' m-badge--danger'},
          };
          return '<span class="m-badge ' + status[row.Hadir].class + ' m-badge--wide">' + status[row.Hadir].title + '</span>';
        }
      }]
    });

    var query = datatable.getDataSourceQuery();

    $('#m_form_status').on('change', function () {
      datatable.search($(this).val(), 'Kehadiran');
    }).val(typeof query.Kehadiran !== 'undefined' ? query.Kehadiran : '');

    // $('#m_form_type').on('change', function () {
    //   datatable.search($(this).val(), 'Type');
    // }).val(typeof query.Type !== 'undefined' ? query.Type : '');

    $('#m_form_status').selectpicker();

  };

  return {
    // public functions
    init: function () {
      demo();
    }
  };
}();

jQuery(document).ready(function () {
  DatatableJsonRemoteDemo.init();
});
