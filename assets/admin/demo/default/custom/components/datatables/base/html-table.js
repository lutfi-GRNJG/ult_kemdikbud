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

  var demo2 = function() {

    var datatable = $('.m-datatable-1').mDatatable({
      data: {
        saveState: {cookie: false},
      },

      search: {
        input: $('#generalSearch1'),
      },
      columns: [
        {
          field: 'Deposit Paid',
          type: 'number',
        },
        {
          field: 'No',
          width: "30",
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
      demo2();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableHtmlTableDemo.init();
});