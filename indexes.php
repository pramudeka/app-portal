<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top" class=" d-flex h-100 flex-column">
        <!-- Portfolio Grid-->
        <section class="page-section bg-light flex-grow-1" id="portfolio">
	    	<div class="text-center headers">
	    		<img src="assets/img/logo-header.png" class="img-fluid logo-header" alt="Mall Pelayanan Publik Kab. BLitar">
	    	</div>
                <div class="text-center sticky-top mb-4 kat" hidden>
                    <h3 class="section-heading text-uppercase" >Kategori</h3>
		            <ul id="portfolio-flters">
		              <li data-filter="all" class="filter-active">All</li>
		              <li data-filter="filter-kab">Pemkab</li>
		              <li data-filter="filter-info">Informasi</li>
		              <li data-filter="filter-surat">Surat</li>
		              <li data-filter="filter-ijin">Perijinan</li>
		              <li data-filter="filter-daftar">Pendaftaran</li>
		              <li data-filter="filter-bayar">Pembayaran</li>
		              <li data-filter="filter-extra">Lain-lain</li>
		            </ul>
		        </div>
            <div class="container">
            	<?php include('app.php')?>
                <div class="row item-list" >
                	<?php foreach($apl as $key => $value): ?>
                    <div class="col-lg-2 col-sm-6 mb-4 portfolio-item <?=$value['kat']?>">
                        <!-- Portfolio item 1-->
                            <a class="portfolio-link" href="<?=$value['link']?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=$value['ikon']?>" alt="<?=$value['nama']?> | <?=$value['desc']?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$value['nama']?></div>
                                <div class="portfolio-caption-subheading "><?=$value['desc']?></div>
                            </div>
                    </div>
                	<?php endforeach;?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                    </div>
                    <div class="col-lg-4 text-lg-end">
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
