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

function hapusUsers(nip, nik, nama) {
    if (nip.length < 1) return;
    Swal.fire({
        text: `Apakah Anda Ingin Menghapus Data ${nama} ?`,
        title: "Hapus Data",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            window.location.href = base_url + `role/destroy/${nip}/${nik}`;
        } else return false;
    })
    return false;
}
function edit(nip) {
    $.ajax({
        url: base_url + 'role/edit_role',
        method: "POST",
        data: {
            nip: nip
        },
        dataType: 'json',
        success: function(data) {
            $("#nip").val(data.akun[0].nip);
            $("#nik").val(data.akun[0].nik);
            $("#username").val(data.akun[0].username);
            $("#nama").val(data.akun[0].nama);
            if (data.akun[0].role == "admin") {
                $(".roleedit").append(`<option class='option' value="admin" selected>Admin</option><option class='option' value="karyawan">Karyawan</option>`);
                $(".jabatanedit").css("display", "none");
            } else {
                $(".roleedit").append(`<option class='option' value="admin" >Admin</option><option class='option' value="karyawan" selected>Karyawan</option>`);
                $(".jabatanedit").css("display", "flex");
            }
            for (var i = 0; i < data.Jabatan.length; i++) {
                if (data.Jabatan[i].nama_jabatan == data.akun[0].jabatan) {
                    $(".jabatan").append(`<option class='option' value="${data.Jabatan[i].id_jabatan}" selected>
                        ${data.Jabatan[i].nama_jabatan}</option>`);
                }
                else{
                    $(".jabatan").append(`<option class='option' value="${data.Jabatan[i].id_jabatan}">
                        ${data.Jabatan[i].nama_jabatan}</option>`);
                }
            }
            if (data.akun[0].isaktif == 1) {
              $("#aktif").attr('checked', true);
            }
            else{
              $("#nonaktif").attr('checked', true);
            }
        }
    });
}

$(document).ready(function() {
    $("#role").change(function(){
        let value = $(this).val();
        if (value == "karyawan") {
            $(".jabatan").css("display", "flex");
        }else{
            $(".jabatan").css("display", "none");
        }
    });

    $(".roleedit").change(function(){
        let value = $(this).val();
        if (value == "karyawan") {
            $(".jabatanedit").css("display", "flex");
        }else{
            $(".jabatanedit").css("display", "none");
        }
    });

    $('#EditAkun').on('hidden.bs.modal', function() {
        console.log("tutup");
        $(".option").remove();
    })
});