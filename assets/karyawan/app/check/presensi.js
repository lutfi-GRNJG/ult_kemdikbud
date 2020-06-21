//== Class definition

var DatatableJsonRemoteDemo = function () {
  //== Private functions

  // basic demo
  var demo = function () {

    var datatable = $('.m_datatable').mDatatable({
      // datasource definition
      data: {
        type: 'remote',
        source: url,
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
          console.log(row);
          return row.No;
        }
      }, 
      {
        field: "Tanngal",
        title: "Tanggal",
        sortable: true,
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
