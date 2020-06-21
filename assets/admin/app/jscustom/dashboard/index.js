jQuery(document).ready(function() {
  // DatatableHtmlTableDemo.init();
  let hitung = 0;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // Typical action to be performed when the document is ready:
      var data=JSON.parse(xhttp.responseText);
      $.each( data, function( key, value ) {
        if (value.Hadir != 1) {
          hitung=hitung+1;
        }
      });
      $("#tdkhdr").html(hitung);
    }
  };
  xhttp.open("GET", base_url+"/admin/get_CheckPresensi", true);
  xhttp.send();

  loaddata();
});

function loaddata(){
  $.ajax({
      type: 'post',
      url: base_url + 'admin/ambil_presensi_perbulan',
      success: function(data) {
          console.log(data);
          var arr_Label  = new Array();
          var arr_Data = new Array();
          $.each(data,function(index,obj)
          {
            arr_Label.push(obj.labels);
            arr_Data.push(obj.data);
          });

          testahh(arr_Label, arr_Data);
          // $("#jml_presensi_this_month").html(lastIndex);
      }
  });
}

function testahh(arr_Label, arr_Data){
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: arr_Label,
        datasets: [{
            label: 'Total Presensi',
            data: arr_Data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }]
        }
    }
});
}