<!DOCTYPE html>
<html lang="en">

<head>
	<title>UMB Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">

	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">

	<link rel="stylesheet" href="assets/css/aos.css">

	<link rel="stylesheet" href="assets/css/ionicons.min.css">

	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Isi Data Diri untuk Download Brosur</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- <img class="card-img-top" src="./images/slide_4.jpg" alt="Card image cap" /> -->
					<form class="p-3 bg-white" method="post" action="simpan.php">
						<p>Form ini berguna untuk pendataan data diri sebelum melakukan download terhadap brosur dan
							juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung jawab.
							Terima kasih.</p>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="name">Nama Lengkap</label>
								<input type="text" id="name" class="form-control rounded-0" name="nama" required>
							</div>
						</div>

						<div class="row form-group">

							<div class="col-md-12">
								<label class="text-black" for="email">Email</label>
								<input type="email" id="email" class="form-control rounded-0" name="email" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Alamat / Kota</label>
								<input type="text" id="subject" class="form-control rounded-0" name="alamat_kota" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">No HP</label>
								<input type="number" id="subject" class="form-control rounded-0" name="no_hp" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Asal Sekolah</label>
								<input type="text" id="subject" class="form-control rounded-0" name="asal_sekolah"
									required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Minat Program Studi</label>
								<input type="text" id="subject" class="form-control rounded-0" name="minat_prodi"
									required>
							</div>
						</div>
						<!-- <div class="row form-group">
							<div class="col-md-12">
								<input type="submit" value="Submit" class="btn btn-primary mr-2 mb-2">
							</div>
						</div> -->
						<div class="row form-group">
								<div class="col-md-12">
									<input type="submit" value="Download Brosur" class="btn btn-primary mr-2 mb-2"
										style="float:right;">
									<!--<a href="download-brosur.html" class="btn btn-primary mr-2 mb-2">Download Brosur</a>-->
								</div>
						</div>
					</form>
				</div>
				<!--<div class="modal-footer">-->
					<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
					 <!--<button type="button" class="btn btn-info">Download Brosur</button> -->
					<!--<a href="download-brosur.html" class="btn btn-primary mr-2 mb-2">Download Brosur</a>-->
					<!--<input type="submit" value="Download Brosur" class="btn btn-info mr-2 mb-2"-->
					<!--				style="float:right;">-->
				<!--</div>-->
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
		id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"> <img src="assets/images/logo.png"
					style="margin-top :-10px; margin-bottom:-10px; margin-left:20px;width:90;height:90px;"
					alt=""></a>
			<!--  -->
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#gallery-section" class="nav-link"><span>Gallery</span></a></li>
					<li class="nav-item"><a href="#faq-section" class="nav-link"><span>FAQ</span></a></li>
					<li class="nav-item"><a href="#brosur-section" class="nav-link"><span>Download Brosur</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home-section" class="hero">
		<!-- <h3 class="vr">Get Ur Brochure</h3> -->
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(assets/images/slider1.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<!-- <span class="subheading">Welcome to the digilab</span> -->
								<h1 class="mb-4 mt-3">Hadir di <span>Lokasi Strategis</span></h1>
    								<ol>
    								    <li><p>Kampus Meruya - Jakarta Barat</p></li>
    								    <li><p>Kampus Pejaten - Jakarta Selatan</p></li>
    								    <li><p>Kampus Menteng - Jakarta Pusat</p></li>
    								</ol>
								<!-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(assets/images/slider3.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<!-- <span class="subheading">Welcome to the digilab</span> -->
								<h1 class="mb-4 mt-3"><span>Fasilitas Nyaman </span> Untuk  <span>Belajar</span>
								</h1>
								<p>
								Lingkungan Universitas Mercu Buana dibuat senyaman mungkin untuk kamu dapat belajar bersama teman-teman kamu. 
								Misalnya saja di Kampus Meruya yang memiliki banyak ruang hijau terbuka yang teduh.</p>

								<!-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(assets/images/slider4.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<!-- <span class="subheading">Welcome to the digilab</span> -->
								<h1 class="mb-4 mt-3"><span>Fasilitas Nyaman </span> Untuk  <span>Belajar</span>
								</h1>
								<p>
								Lingkungan Universitas Mercu Buana dibuat senyaman mungkin untuk kamu dapat belajar bersama teman-teman kamu. 
								Misalnya saja di Kampus Meruya yang memiliki banyak ruang hijau terbuka yang teduh.</p>

								<!-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(assets/images/slider2.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<!-- <span class="subheading">Welcome to the digilab</span> -->
								<h1 class="mb-4 mt-3"><span>Lulusan </span> Dengan <span>Kualitas Baik</span>
								</h1>
								<p>Universitas Mercu Buana memiliki lembaga pendukung agar menjadikan kamu seorang profesional pada bidangnya. 
								Lembaga pedukung salah satunya adalah P2M, dimana kamu bisa mendapatkan sertifikasi profesi. 
								Jadi kamu lulus, bukan hanya Ijazah saja yang kamu dapatkan.</p>

								<!-- <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-8 col-lg-5 d-flex">
					<div class="img d-flex align-self-stretch align-items-center"
						style="background-image:url(assets/images/4.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-2">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">About Us</span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">We Are Leading and
									Excellent</h2>
								<p>Universitas Mercu Buana memperoleh Akreditasi Institusi Perguruan Tinggi (AIPT)
									dengan peringkat "A" atau Unggul dari Badan Akreditasi Nasional Perguruan Tinggi
									(BAN-PT). Peraihan ini merupakan salah satu tonggak pencapaian/milestone Universitas
									Mercu Buana dan saat ini Universitas Mercu Buana sedang dalam proses untuk
									memperoleh akreditasi internasional.</p>
								<p>Visi : “Menjadi Universitas Unggul dan Terkemuka di Indonesia untuk Menghasilkan
									Tenaga
									Profesional yang Memenuhi Kebutuhan Industri dan Masyarakat dalam Persaingan Global
									Pada tahun 2024”.</p>
								<p>Misi : 
								    <ol>
								        <li> Menyelenggarakan pendidikan, penelitian dan pengabdian kepada masyarakat,
									        dan mencapai keunggulan akademik untuk menghasilkan tenaga profesional dan lulusan
									        yang memenuhi standar kualitas kerja yang disyaratkan. </li>
									    <li> Menerapkan manajemen pendidikan tinggi yang efektif dan efisien, serta
									        mengembangkan jaringan kerjasama dengan industri dan kemitraan yang berkelanjutan sebagai respon
									        atas perubahan arus dan daya saing global. </li>
									    <li> Mengembangkan kompetensi dan menumbuh kembangkan jiwa kewirausahaan dan etika
									        profesional kepada para mahasiswa dan staf yang memberikan kontribusi positif terhadap peningkatan kualitas hidup.</li>
									</ol>
							</div>
						</div>
						<div class="counter-wrap ftco-animate d-flex mt-md-3">
							<div class="text p-4 bg-primary">
								<p class="mb-0">
									<!-- <span class="number" data-number="4">0</span> -->
									<span>Peringkat 4 PTS Terbaik</span>
									<span>Versi Dikti Kemendikbud DKI Jakarta</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="explore-section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4 ftco-animate py-5 nav-link-wrap">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
							role="tab" aria-controls="v-pills-1" aria-selected="true"><span
								class="mr-3 flaticon-ideas"></span> Fakultas Ekonomi dan Bisnis</a>

						<a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
							aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span>
							Fakultas Teknik</a>

						<a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
							aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span>
							Fakultas Ilmu Komunikasi</a>

						<a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
							aria-controls="v-pills-4" aria-selected="false"><span
								class="mr-3 flaticon-web-design"></span> Fakultas Seni Desain Kreatif</a>

						<a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
							aria-controls="v-pills-4" aria-selected="false"><span
								class="mr-3 flaticon-ux-design"></span> Fakultas Ilmu Komputer</a>

						<a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab"
							aria-controls="v-pills-5" aria-selected="false"><span
								class="mr-3 flaticon-innovation"></span> Fakultas Psikologi</a>
					</div>
				</div>
				<div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

					<div class="tab-content pl-md-5" id="v-pills-tabContent">

						<div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel"
							aria-labelledby="v-pills-1-tab">
							<!-- <span class="icon mb-3 d-block flaticon-ideas"></span> -->
							<h2 class="mb-4">Fakultas Ekonomi Bisnis</h2>
							<p>Fakultas Ekonomi dan Bisnis adalah fakultas favorit yang paling banya dipilih. 
							Seluruh Program Studi di Fakultas Ekonomi dan Bisnis sudah Ter-Akreditasi A.</p>
							<p>	Selain itu, kamu juga akan diajar oleh dosen yang berprofesi pada bidang yang diajar. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah. 
							Sekitar 80% lulusan UMB langsung bekerja dan sisanya memilih untuk menjadi pengusaha.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
							<!-- <span class="icon mb-3 d-block flaticon-flasks"></span> -->
							<h2 class="mb-4">Fakultas Teknik</h2>
							<p>Fakultas Teknik adalah fakultas favorit untuk program saintek. 
							Sekitar 60% Program Studi di Fakultas Teknik sudah Ter-Akreditasi A. 
							Selain itu, kamu juga akan diajar oleh dosen yang berprofesi pada bidang yang diajar. 
							</p>
							<p>Dengan fasilitas pembelajaran yang didukung dengan lab penunjang untuk perkembangan kamu. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah. 
							Universitas Mercu Buana juga memiliki kurikulum yang sudah siap menyambut industri 5.0.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
							<!-- <span class="icon mb-3 d-block flaticon-analysis"></span> -->
							<h2 class="mb-4">Fakultas Ilmu Komunikasi</h2>
							<p>Fakultas Ilmu Komunikasi adalah fakultas favorit untuk kamu yang suka berinteraksi sosial. 
							Fakultas Komunikasi sendiri memiliki bidang studi yang banyak dicari dalam dunia pekerjaan. 
							</p>
							<p>Selain itu, kamu juga akan diajar oleh dosen yang berprofesi pada bidang yang diajar. 
							Dengan fasilitas pembelajaran yang didukung dengan lab penunjang untuk perkembangan kamu. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
							<!-- <span class="icon mb-3 d-block flaticon-web-design"></span> -->
							<h2 class="mb-4">Fakultas Seni Desain Kreatif</h2>
							<p>Fakultas Desain Seni Kreatif adalah fakultas favorit untuk siswa yang menyukai seni desain terapan maupun digital. 
							Kamu akan dituntut untuk membuat mahakarya yang menjual. 
							</p>
							<p>Dengan fasilitas pembelajaran yang didukung dengan lab penunjang untuk perkembangan kamu. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah. 
							Universitas Mercu Buana juga memiliki kurikulum yang sudah siap menyambut industri 5.0.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
							<!-- <span class="icon mb-3 d-block flaticon-ux-design"></span> -->
							<h2 class="mb-4">Fakultas Ilmu Komputer</h2>
							<p>Fakultas Ilmu Komputer adalah fakultas pilihan bagi kamu yang ingin menjadi programmer. 
							Kamu juga akan diajar oleh dosen yang berprofesi pada bidang yang diajar. 
							</p>
							<p>Dengan fasilitas pembelajaran yang didukung dengan lab penunjang untuk perkembangan kamu. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah. 
							Universitas Mercu Buana juga memiliki kurikulum yang sudah siap menyambut industri 5.0.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
							<!-- <span class="icon mb-3 d-block flaticon-innovation"></span> -->
							<h2 class="mb-4">Fakultas Psikologi</h2>
							<p>Fakultas Psikologi adalah fakultas yang mempelajari perilaku dan perkembang psikis manusia. 
							Disini kamu akan diajar oleh tenaga profesional pada bidangnya yang sudah memiliki pengalaman yang sangat banyak. 
							</p>
							<p>Dengan fasilitas pembelajaran yang didukung dengan lab penunjang untuk perkembangan kamu. 
							Ini akan memberikan kamu pengalaman yang luar biasa selama kamu kuliah.
							</p>
							<p><a href="#brosur-section" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="site-section" id="gallery-section">
		<!--  portfolio-section-->
		<div class="container">
			<div class="row mt-4 mb-4">
				<div class="col-12 text-center" data-aos="fade">
					<h2 class="section-title">Gallery</h2>
				</div>
			</div>

			<!-- <div class="row justify-content-center mb-5" data-aos="fade-up">
				<div id="filters" class="filters text-center button-group col-md-7">
					<button class="btn btn-primary active" data-filter="*">All</button>
					<button class="btn btn-primary" data-filter=".fasilitas">Indoor</button>
					<button class="btn btn-primary" data-filter=".ukm">Outdoor</button>
					<button class="btn btn-primary" data-filter=".acara">Acara</button>
				</div>
			</div> -->

			<div id="posts" class="row no-gutter">
				<div class="item fasilitas col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/4.jpg">
					</a>
				</div>
				<div class="item fasilitas col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/5.jpg">
					</a>
				</div>

				<div class="item acara col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/6.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/6.jpg">
					</a>
				</div>

				<div class="item ukm col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">

					<a href="assets/images/7.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/7.jpg">
					</a>

				</div>

				<div class="item fasilitas col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/8.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/8.jpg">
					</a>
				</div>

				<div class="item acara col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/9.jpg">
					</a>
				</div>

				<div class="item fasilitas col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/10.jpg">
					</a>
				</div>

				<div class="item ukm col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/11.jpg">
					</a>
				</div>

				<div class="item fasilitas col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/12.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/12.jpg">
					</a>
				</div>

				<div class="item ukm col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/13.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/13.jpg">
					</a>
				</div>

				<div class="item acara col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/14.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/14.jpg">
					</a>
				</div>

				<div class="item ukm col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/15.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/15.jpg">
					</a>
				</div>

				<div class="item acara col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
					<a href="assets/images/16.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="assets/images/16.jpg">
					</a>
				</div>

			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section ftco-no-pb" id="testimonial-section">
		<div class="img img-bg border" style="background-image: url(assets/images/bg_5.jpg);"></div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
					<!-- <span class="subheading">Testimonial</span> -->
					<h2 class="mb-3">Apa Kata Mereka?</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">78% Lulusan UMB memiliki Sertifikasi Kompetensi dan terserap di
										Industri. sisanya menjadi Wirausaha dan pemilik Bisnis Mandiri. </p>
									<div class="d-flex align-items-center">
										<div class="user-img"
											style="background-image: url(assets/images/testimoni1.jpg)">
										</div>
										<div class="pl-3">
											<p class="name">Alicia Maria S D</p>
											<span class="position">Akuntansi UMB</span><br>
											<span class="position">Miss Indonesia 2018</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Rasa bangga menjadi Mahasiswa Universitas Mercu Buana akan
										terus
										tertanam sebab Universitas selalu mengapresiasi bakat & minat mahasiswanya.
									</p>
									<div class="d-flex align-items-center">
										<div class="user-img"
											style="background-image: url(assets/images/testimoni2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Farroszy Safana P</p>
											<span class="position">Teknik Sipil UMB </span><br> <span
												class="position">Juara 3 TAEKWONDO Black Tiger
												AAU-Poomsae</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Universitas Mercu Buana menumbuh kembangkan Jiwa Bersaing di
										Industri 4.0, dengan Kurikulum dan Pembelajaran yang sesuai kebutuhan Industri
										tersebut.</p>
									<div class="d-flex align-items-center">
										<div class="user-img"
											style="background-image: url(assets/images/testimoni3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Farhan Arrazi</p>
											<span class="position">Broadcasting</span><br>
											<span class="position">Juara 3 Abang None Buku Tingkat DKI
												Jakarta</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="faq-section mb-5" id="faq-section">
		<div class="container">
			<div class="row mt-5">
				<div class="col-12 text-center">
					<h2 class="section-title mb-5">FAQ</h2>
				</div>
			</div>
			<div class="accordion">
				<div class="accordion-item" id="question1">
					<a class="accordion-link" href="#question1">
						<b>Apakah Ada Jalur Beasiswa?</b>
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Universitas Mercu Buana selalu membuka kesempatan kamu yang ingin mendapatkan Beasiswa. Agar kamu tidak ketinggalan informasi Beasiswa, kamu bisa langsung isi data diri kamu di bit.ly/DaftarBea .</p>
					</div>
				</div>

				<div class="accordion-item" id="question2">
					<a class="accordion-link" href="#question2">
						<b>Bagaimana Cara Mendaftar?</b>
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Kamu bisa melakukan pendaftaran dari rumah dengan cara mengikuti pendaftaran online. Pendaftaran bisa dilakukan dimanapun dan kapanpun. Kamu cukup kujungi pendaftaran.mercubuana.ac.id dan pilih menu daftar.</p>
					</div>
				</div>

				<div class="accordion-item" id="question3">
					<a class="accordion-link" href="#question3">
						<b>Berapa Biaya Kuliah?</b>
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>
							Biaya kuliah di Universitas Mercu Buana sangat terjangkau. Untuk mendapatkan Tabel Biaya, kamu dapat mengisi data diri pada kolom "Download Brosur".
						</p>
					</div>
				</div>

				<div class="accordion-item" id="question4">
					<a class="accordion-link" href="#question4">
						<b>Kenapa Harus Memilih Universitas Mercu Buana?</b>
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<ol class="mt-2">
						    <li>Universitas Mercu Buana sudah memiliki Akreditasi Institusi A BAN-PT. Selain itu Universitas Mercu Buana merupakan kampus peringkat 4 versi LLDIKTI DKI Jakarta.</li>
                            <li>Peringkat ini dinilai karena Universitas Mercu Buana memenuhi standar penilaian untuk sebuah Universitas. Disisi lain Universitas memiliki tenaga pengajar yang profesional sehingga menjamin lulusan Universitas Mercu Buana siap di dunia kerja.</li>
                            <li>Lulusan Universitas Mercu Buana 80%-nya telah diserap industri dan sisanya menjadi pengusaha dengan jaringan sangat luas. Masih banyak lagi alasan kenapa kamu harus memilih Universitas Mercu Buana sebagai pendamping Masa Depan Keren Versi Mu.</li>
					    </ol>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="brosur-section">
		<div class="brosur-section bg-image2 overlay" style="background-image: url('assets/images/hero_3.jpg');">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="section-title mb-3 text-white">Form Download Brosur</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-7 mb-5">
						<form class="p-5 bg-white" method="post" action="simpan.php">
							<h2 class="h4 text-black mb-5">Isi Data Diri</h2>
							<p>Form ini berguna untuk pendataan data diri sebelum melakukan download terhadap brosur dan
								juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung
								jawab.
								Terima kasih.</p>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="text-black" for="name">Nama Lengkap</label>
									<input type="text" id="name" class="form-control rounded-0" name="nama" required>
								</div>
							</div>

							<div class="row form-group">

								<div class="col-md-12">
									<label class="text-black" for="email">Email</label>
									<input type="email" id="email" class="form-control rounded-0" name="email" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="text-black" for="subject">Alamat / Kota</label>
									<input type="text" id="subject" class="form-control rounded-0" name="alamat_kota"
										required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="text-black" for="subject">No HP</label>
									<input type="number" id="subject" class="form-control rounded-0" name="no_hp"
										required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="text-black" for="subject">Asal Sekolah</label>
									<input type="text" id="subject" class="form-control rounded-0" name="asal_sekolah"
										required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="text-black" for="subject">Minat Program Studi</label>
									<input type="text" id="subject" class="form-control rounded-0"
										name="minat_prodi" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<input type="submit" value="Download Brosur" class="btn btn-primary mr-2 mb-2"
										style="float:right;">
									<!--<a href="download-brosur.html" class="btn btn-primary mr-2 mb-2">Download Brosur</a>-->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="footer py-5 text-center">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<p class="mb-0">
						<!--<a href="#" class="p-3"><span class="icon-facebook"></span></a>-->
						<!--<a href="#" class="p-3"><span class="icon-twitter"></span></a>-->
						<a href="https://www.instagram.com/univmercubuana/" class="p-3"><span
								class="icon-instagram"></span></a>
						<!--<a href="#" class="p-3"><span class="icon-linkedin"></span></a>-->
						<!--<a href="https://api.whatsapp.com/send?phone=6285311321124&text=Halo%20Saya%20ingin%20bertanya%20tanya%20lebih%20lanjut%20dengan%20anda.%20Terima%20Kasih"-->
						<!--	class="p-3"><span class="icon-whatsapp"></span></a>-->
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart text-danger"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- .site-wrap -->



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		$('#myModal').modal('show');
	</script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="assets/js/jquery.fancybox.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/jquery.animateNumber.min.js"></script>
	<script src="assets/js/scrollax.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>