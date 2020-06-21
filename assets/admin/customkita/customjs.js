$(document).ready(function () {
    $(".select2").select2({
        theme: 'bootstrap4',
    })
    $('.modal').on('show.bs.modal', function(e) {
        var target = $(e.relatedTarget).data('target');
        $(".js-select2").select2({
            theme: 'bootstrap4',
            dropdownParent: $(`${target}`),
        });
    });
    $(".js-select2").select2({
        theme: 'bootstrap4',
    });
});

function rupiah(uang){
    var dengan_rupiah = document.getElementById(`${uang}`);
    dengan_rupiah.addEventListener('keyup', function (e) {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
}

/* Fungsi */
function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
}