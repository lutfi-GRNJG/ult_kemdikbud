jQuery(document).ready(function() {
    $(".icon-dashboard").css('color', '#0a0a0a');
    load_kehadiran();
    load_target();
    load_helpdesk();
});

// load kehadiran
function load_kehadiran() {
    $.ajax({
        type: 'get',
        url: base_url + 'karyawan/dashboard/load_kehadiran',
        success: function(data) {
            console.log(data);
            if (data.kehadiran == "Tidak Hadir") {
                $(".num-dashboard").css('font-size', '1.9rem');
                $("#kehadirancuy").html(data.kehadiran);
                $("#kehadirancuy").css("color", "#f45151");
            }else{
                $("#kehadirancuy").html(data.kehadiran);
                $("#kehadirancuy").css("color", "#4cd215");
            }
        }
    });
}

function load_target() {
    $.ajax({
        type: 'get',
        url: base_url + 'karyawan/dashboard/load_target',
        success: function(data) {
            console.log(data);
            $("#targetcuy").html(data.target);
        }
    });
}

function load_helpdesk() {
    $.ajax({
        type: 'get',
        url: base_url + 'karyawan/dashboard/load_helpdesk',
        success: function(data) {
            console.log(data);
            let nomor = 1;
            let html = "";
            $.each( data, function( key, value ) {
                if(value.status_helpdesk == "selesai"){
                    html = `<div class="m-timeline-3__item m-timeline-3__item--success">
                        <span class="m-timeline-3__item-time ">
                            ${nomor}
                        </span>
                        <div class="m-timeline-3__item-desc">
                            <span class="m-timeline-3__item-text text-capitalize font-weight-bold">
                                ${value.redaksi}
                            </span>
                            <br>
                            <span class="m-timeline-3__item-user-name">
                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link text-capitalize">
                                    Status : ${value.status_helpdesk}
                                </a>
                            </span>
                        </div>
                    </div>`;
                }
                else {
                    html = `<div class="m-timeline-3__item m-timeline-3__item--danger">
                        <span class="m-timeline-3__item-time">
                            ${nomor}
                        </span>
                        <div class="m-timeline-3__item-desc">
                            <span class="m-timeline-3__item-text text-capitalize font-weight-bold">
                                ${value.redaksi}
                            </span>
                            <br>
                            <span class="m-timeline-3__item-user-name">
                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link" text-capitalize>
                                    Status : ${value.status_helpdesk}
                                </a>
                            </span>
                        </div>
                    </div>`;
                }
                $("#helpdeskcuy").append(html);
                nomor +=1;
            });
        }
    });
}