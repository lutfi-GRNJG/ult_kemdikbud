	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader container">
			<div class="row d-flex align-items-center">
				<div class="mr-auto col-md-3 mt-1 mb-1">
					<h3 class="m-subheader__title">
						Dashboard
					</h3>
				</div>
				<div class="col-md-9 mt-1 mb-1 text-right">
					<span class="m-subheader__daterange">
						<span class="m-subheader__daterange-label">
							<!-- <span id="hijriyah"></span> -->
							<span class="m-subheader__daterange-title">Hari ini :</span>
							<span class="m-subheader__daterange-date m--font-brand" id="jamtanggal"></span>
							<script>
								// Function ini dijalankan ketika Halaman ini dibuka pada browser
								$(function() {
									setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
								});

								function timestamp() {
									$.ajax({
										url: '<?= site_url('calendar/jam') ?>',
										success: function(data) {
											$('#jamtanggal').html(data);
										},
									});
								};
							</script>
						</span>
						<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
							<i class="fa fa-calendar"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->

		<!-- Contoh untuk qila -->

		<div class="m-content">
			<div class="row">
				<div class="col-xl-4">
					<div class="m-portlet m-portlet--mobile" style="background: linear-gradient(230deg, #759bff, #843cf6)">
						<div class="m-portlet__body " style="color: #fff!important">
							<div class="row align-items-center">
								<div class="col-8">
									<h5>Total Karyawan</h5>
									<h3 class="num-dashboard"><?= $totalkaryawan ?></h3>
								</div>
								<div class="col-4">
									<i class="fa fa-users icon-dashboard"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4">
					<div class="m-portlet m-portlet--mobile" style="background: linear-gradient(230deg, #fc5286, #fbaaa2)">
						<div class="m-portlet__body" style="color: #fff!important">
							<div class="row align-items-center">
								<div class="col-8">
									<h5>Tidak hadir hari ini</h5>
									<h3 class="num-dashboard" id="tdkhdr">0</h3>
								</div>
								<div class="col-4">
									<i class="fa fa-times-circle-o icon-dashboard"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="m-portlet m-portlet--mobile" style="background: linear-gradient(230deg, #ffc480, #ff763b)">
						<div class="m-portlet__body " style="color: #fff!important">
							<div class="row align-items-center">
								<div class="col-8">
									<h5>Karyawan Cuti</h5>
									<h3 class="num-dashboard"><?= $total_cuti ?></h3>
								</div>
								<div class="col-4">
									<i class="fa fa-plane icon-dashboard"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit ">
						<div class="m-portlet__head">
			                <div class="m-portlet__head-caption" >
			                	<div class="row">
			                		<div class="col">
			                			<div class="m-portlet__head-title">
				                			<h3 class="m-portlet__head-text">
					                            Chart Total Kehadiran Karyawan Setiap Bulan
					                        </h3>
					                    </div>
			                		</div>
			                		<div class="col">
			                			<a href="<?= site_url('admin/presensi') ?>" target="_blank">
				                			<button class="btn m-btn--pill btn-secondary float-right"><i class="fa fa-play"></i> Lihat Data</button>
			                			</a>
			                		</div>
			                	</div>
			                </div>
			            </div>
			            <hr style="margin: 0px">
			            <div class="p-3" >
							<canvas id="myChart" width="400" max-height="400" ></canvas>
			            </div>
					</div>
				</div>
			</div>

		</div>
		<!-- end contoh untuk qila -->
	</div>
	</div>
	<!-- end:: Body -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
	<script src="<?=base_url('assets/admin/app/jscustom/dashboard/index.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>