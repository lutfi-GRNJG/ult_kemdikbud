$.ajax({
    url: base_url + 'profil/getData',
    method: "get",
    dataType: 'json',
    success: function(data) {
        console.log(data);
        $("#username").val(data[0].username);
        $("#nip").val(data[0].nip);
        $("#nik").val(data[0].nik);

        $("#nohp").val(data[0].no_hp);
        $("#email").val(data[0].email);
        $("#tempat_lahir").val(data[0].tempat_lahir);
        
        let pecah = data[0].tanggal_lahir;
        let tgl = pecah.split("-")[2]+"/"+pecah.split("-")[1]+"/"+pecah.split("-")[0];
        $("#tanggal_lahir").val(tgl);

        $("#agama").val(data[0].agama);
        $("#tempat_lahir").val(data[0].tempat_lahir);
        $("#nama").val(data[0].nama);
        $("#alamat").val(data[0].alamat);

        $("#kewarganegaraan").find(`#${data[0].kewarganegaraan}`).attr('selected', true);
        $("#agama").find(`#${data[0].agama}`).attr('selected', true);
        $("#jk").find(`#${data[0].jenis_kelamin}`).attr('selected', true);
        $("#goldar").find(`#${data[0].golongan_darah}`).attr('selected', true);

        if (data[0].pendidikan == "TK") {
            $("#pendidikan").find(`#TK`).attr('selected', true);
        }
        if (data[0].pendidikan == "SMP Sederajat") {
            $("#pendidikan").find(`#SMP`).attr('selected', true);
        }
        if (data[0].pendidikan == "SMA Sederajat") {
            $("#pendidikan").find(`#SMA`).attr('selected', true);
        }
        if (data[0].pendidikan == "Diploma 3") {
            $("#pendidikan").find(`#D3`).attr('selected', true);
        }
        if (data[0].pendidikan == "Strata 1 (S1)") {
            $("#pendidikan").find(`#S1`).attr('selected', true);
        }
        if (data[0].pendidikan == "Strata 2 (S2)") {
            $("#pendidikan").find(`#S2`).attr('selected', true);
        }
        if (data[0].pendidikan == "Strata 3 (S3)") {
            $("#pendidikan").find(`#S3`).attr('selected', true);
        }


        if (data[0].status_perkawinan == "kawin") {
            $("#status").find(`#kawin`).attr('selected', true);
        }
        else {
            $("#status").find(`#belumkawin`).attr('selected', true);
        }
    }
});