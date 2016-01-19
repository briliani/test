<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="lotus, acupuncture, akupuntur, semarang">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lotus Acupuncture Center</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--Tambahan link untuk slider-->
	<link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BERANDA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Akupuntur</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#teams">Tim Kami</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#portfolio">Paket Terapi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimoni">Testimoni</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
					<li>
                        <a class="page-scroll" href="admin/login.html">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Carousel================================================== -->
	<section class="no-padding" id="headweb">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div id="sliderFrame">
        <div id="slider">
            <img  src="img/slider/Logo.png" />
            <img src="img/slider/lobby.jpg" />
            <!--<img src="img/slider/rpraktek1.jpg" />
            <img src="img/slider/rpraktek2.JPG" />-->
        </div>
        <!--Custom navigation buttons on both sides-->
        <!--<div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>-->
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>

    <script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>
                
            </div>
        </div>
    </section>

	<!-- /.carousel -->
	
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Lotus Acupuncture Center</h2>
                    <hr class="light">
					<img src="img/selengkapnya.jpg" width="250px" height="180px"/><br/>
                    <p class="text-faded">Akupuntur adalah pengobatan alternatif yang merupakan 
				cabang utama dari ilmu kedokteran tradisional negara Cina. Terapi akupuntur 
				menggunakan jarum yang ditusukkan pada beberapa titik spesifik tubuh. Proses 
				ini dipercaya dapat menyesuaikan dan mengubah aliran energi menuju pola yang 
				lebih sehat dan digunakan untuk mengatasi berbagai macam penyakit dan keluhan 
				kesehatan.</p>
					<!--Masukkan Link Selengkapnya-->
					<a href="#more" class="btn btn-default btn-xl" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">Selengkapnya</div>
                        </div>
                    </a>
					<!--Membuka halaman baru-->
					<div class="portfolio-modal modal fade" id="more" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
						<!--<div class="container"</div>
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">-->
<section class="bg-primary" class="modal-body" id="more">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Lotus Acupuncture Center</h2>
				<hr class="light">
				
				<p class="text-faded">Akupuntur adalah pengobatan alternatif yang merupakan 
				cabang utama dari ilmu kedokteran tradisional negara Cina. Terapi akupuntur 
				menggunakan jarum yang ditusukkan pada beberapa titik spesifik tubuh. Proses 
				ini dipercaya dapat menyesuaikan dan mengubah aliran energi menuju pola yang 
				lebih sehat dan digunakan untuk mengatasi berbagai macam penyakit dan keluhan 
				kesehatan.</p>
				<br/>
				<h3 class="section-heading">Bagaimana akupuntur bekerja?</h3>
				<p class="text-faded">Penusukan menggunakan jarum pada titik-titik akupunktur 
				merangsang sistem syaraf manusia untuk melepaskan zat-zat di otot, tulang 
				belakang, dan otak. Zat-zat tersebut akan mengubah ambang rasa nyeri atau 
				memicu pelepasan zat kimia dan hormon yang dapat mempengaruhi sistem regulasi 
				internal tubuh. Keseimbangn energi dan biokimia yang meningkat akan merangsang 
				kemampuan penyembuhan alami tubuh. Meningkatkan kondisi kesehatan fisik dan emosi.</p>
				<br/>
				<h3 class="section-heading">Mengapa memilih akupuntur di Lotus Acupuncture Center?</h3>
				<p class="text-faded">Lotus Acupuncture Center adalah sebuah klinik 
				akupuntur kesehatan dan kecantikan pertama di Semarang, Jawa Tengah, 
				yang menawarkan berbagai program kesehatan dan kecantikan yang terbaik 
				dikelasnya. Didirikan pada tahun 2014 oleh drg. Arini Jannata, MM., 
				Lotus berdiri dengan kesadaran akan pentingnya kesehatan dan kecantikan 
				tubuh yang ideal bagi setiap manusia.
				Dengan memadukan penggunaan teknologi terbaru, fasilitas terbaik, dan 
				terapis profesional yang kompeten di bidang akupuntur, Lotus berkomitmen 
				untuk dapat selalu memberikan pelayanan kesehatan dan kecantikan terbaik 
				bagi seluruh pasiennya.</p>
				</hr>
				<br/><br/>
				<button type="button" class="btn btn-default" data-dismiss="modal"><!--<i class="fa fa-times"></i>--> Kembali</button>
			</div>
		</div>
	</div>
</section>
									<!--</div>
								</div>
							</div>
						</div>-->
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
	
    <!--<section id="teams">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tim Lotus Acupuncture Center</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img width="125px" height="125px" src="img/tim/tim1.png" />
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img width="125px" height="125px" src="img/tim/tim2.png" />
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img width="125px" height="125px" src="img/tim/tim3.png" />
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img width="125px" height="125px" src="img/tim/tim4.png" />
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
	
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark" >
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Mahal? Tentu tidak</h2>
                
				<a href="#harga" class="btn btn-default btn-xl" data-toggle="modal">
						<div class="caption">
                            <div class="caption-content">Minta Informasi Harga</div>
                        </div>
					</a>
                </div>
					<!--Membuka halaman baru-->
					<div class="portfolio-modal modal fade" id="harga" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
						
<section class="bg-dark" class="modal-body" id="Komentar">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Lotus Acupuncture Center</h2>
				<hr class="light"></hr>
					
				<br/><br/>
				<button type="button" class="btn btn-default" data-dismiss="modal"><!--<i class="fa fa-times"></i>--> Kembali</button>
			</div>
		</div>
	</div>
            </div>
        </div>
            </div>
        </div>
    </aside>

	<section class="bg-primary" id="testimoni">
        <div class="no-padding">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Mereka bilang ...</h2>
                    <hr class="light">
						<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-female wow bounceIn text-dark"></i>
                        <h3>Marissa, Mahasiswi</h3>
                        <p class="text-muted" style="color:white">Sakit menjelang dan saat haid teratasi setelah setelah terapi setelah akupuntur di Lotus. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
						<i class="fa fa-4x fa-female wow bounceIn text-dark"></i>
                        <h3>Laila, Pengusaha</h3>
                        <p class="text-muted" style="color:white">Asma yang menggangu selama bertahun - tahun kini tidak pernah kambuh lagi setelah menjalani terapi akupuntur di Lotus.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-male wow bounceIn text-dark"></i>
                        <h3>Fariz, Pengusaha</h3>
                        <p class="text-muted" style="color:white">Sulit tidur hipertensi, dan vertigo hilang setelah rutin akupunktur di Lotus.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-male wow bounceIn text-dark"></i>
                        <h3>Marcell, Karwayan</h3>
                        <p class="text-muted" style="color:white">Terapi akupunktur mengatasi rambut rontok yang saya alami, hasilnya nyata dan luar biasa.</p>
                    </div>
                </div><br/>
					<!--<a href="#komentar" class="btn btn-default btn-xl" data-toggle="modal">
						<div class="caption">
                            <div class="caption-content">Beri Testimoni</div>
                        </div>
					</a>-->
                </div>
					<!--Membuka halaman baru-->
					<div class="portfolio-modal modal fade" id="komentar" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
								<div class="lr">
									<div class="rl">
									</div>
								</div>
							</div>
						
<section class="bg-dark" class="modal-body" id="Komentar">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Lotus Acupuncture Center</h2>
				<hr class="light"></hr>
					
				<br/><br/>
				<button type="button" class="btn btn-default" data-dismiss="modal"><!--<i class="fa fa-times"></i>--> Kembali</button>
			</div>
		</div>
	</div>
            </div>
        </div>
    </section>
	
	

	
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Konsultasi ke Lotus</h2>
                    <hr class="primary">
                    <p>Memiliki keluhan kesehatan? Tidak ingin mengkonsumsi obat dengan bahan kimia yang tidak anda ketahui efeknya? Lebih suka pengobatan alternatif? Hubungi kami melalui</p>
                </div>
            <div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone wow bounceIn text-primary"></i>
                        <h3>Telpon</h3>
                        <p class="text-muted">024-76671458 / 085102671176</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope-o wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Email</h3>
                        <p class="text-muted">lotusacupuncturecenter@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-marker wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Datang ke Klinik</h3>
                        <p class="text-muted"><a href="google.com">Lihat Peta</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-group wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Social Media</h3>
                        <p class="text-muted">Line : @</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>