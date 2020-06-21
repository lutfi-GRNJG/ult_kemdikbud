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

function lihat(nip){
    $.ajax({
        type : 'post',
        url: base_url+'admin/detail_tampil_karyawan',
        data :  'nip='+ nip,
        dataType: 'json',
        success: function(data) { 
            nama = data.ktp[0].nama;
            nik = data.ktp[0].nik;
            t = data.ktp[0].tempat_lahir;
            tl = data.ktp[0].tanggal_lahir;
            goldar = data.ktp[0].golongan_darah;
            email = data.ktp[0].email;
            jk = data.ktp[0].jenis_kelamin;
            pendidikan = data.ktp[0].pendidikan;
            alamat = data.ktp[0].alamat;
            nomor = data.ktp[0].no_hp;
            kewarganegaraan = data.ktp[0].kewarganegaraan;
            jabatan = data.jabatan[0].nama_jabatan;
            status = data.status[0].keterangan_status_karyawan;
            agama = data.ktp[0].agama;
            kawin = data.ktp[0].status_perkawinan;
            nipp = nip;
            $('#detaildata').modal('show');
        }
    });
}

$( document ).ready(function() {
    $('#detaildata').on('show.bs.modal', function (e) {
        console.log("modal :" + nip.value);
        var modal = $(this);
        modal.find('.modal-title').text('Detail Data : ' + nama);
        modal.find('#nama').val(nama);
        modal.find('#nik').val(nik);
        modal.find('#nip').val(nipp);
        modal.find('#email').val(email);
        modal.find('#ttl').val(t + "," + tl);
        modal.find('#goldar').val(goldar);
        modal.find('#jk').val(jk);
        modal.find('#pendidikan').val(pendidikan);
        modal.find('#agama').val(agama);
        modal.find('#alamat').val(alamat);
        modal.find('#nomor').val(nomor);
        modal.find('#warga').val(kewarganegaraan);
        modal.find('#jbtn').val(jabatan);
        modal.find('#status').val(status);
        modal.find('#s_kawin').val(kawin);
    });
});