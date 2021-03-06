<?php 

if ( function_exists( 'date_default_timezone_set' ) ) {
    date_default_timezone_set('Asia/Jakarta');
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Sinar Baru</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> 	
    	<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/icon.png">
      <!-- CSS Global Compulsory -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	  <!-- CSS Unify -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify.css">

	 

	  <!-- CSS Unify -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-core.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-components.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-globals.css">


	  <!-- plugin css -->
	  <link  rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icon-hs/style.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hs.megamenu.css">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hamburgers.min.css">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typed.css">
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	   <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.min.css">

	   <link rel="stylesheet" href="<?php echo base_url();?>assets/js/slick-carousel/slick/slick.css">
	   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
	   <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">


	  
</head>
<body style="font-family: 'Space Mono', monospace;">

	<header id="js-header" class="u-header u-header--abs-top u-header--show-hide u-header--change-appearance" data-header-fix-moment="500" data-header-fix-effect="slide">
      <div class="u-header__section u-header__section--dark g-bg-primary g-py-5" data-header-fix-moment-exclude="g-bg-primary" >
		        <nav class="js-mega-menu navbar navbar-expand-lg">
		          <div class="container">
		            <!-- Responsive Toggle Button -->
		            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
		              <span class="hamburger hamburger--slider">
		            <span class="hamburger-box">
		              <span class="hamburger-inner"></span>
		              </span>
		              </span>
		            </button>
		            <!-- End Responsive Toggle Button -->

		            <!-- Logo -->
		            <a href="<?php echo base_url()?>" class="navbar-brand g-color-white">
		              <img src="<?php echo base_url()?>assets/img/content/logo-SB-putih.png">
		            </a>
		            <!-- End Logo -->

		            <!-- Navigation -->
		            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
		              <ul class="navbar-nav ml-auto text-uppercase  g-font-weight-600 u-main-nav-v2 u-sub-menu-v2">
		                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
		                  <a href="<?php echo base_url()?>" class="nav-link g-color-white"> Home</a>
		                </li>
		                
		                 <li class="nav-item hs-has-sub-menu g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
			                  <a href="#!" class="nav-link" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1">Produk</a>
			                  <!-- Submenu -->
			                  <ul class="hs-sub-menu list-unstyled g-mt-17--lg g-mt-7--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1">
			                    <li><a href="<?php echo base_url()?>Home/displayBata">Pavin Block</a>
			                    </li>
			                    
			                    <li><a href="<?php echo base_url()?>Home/displayCacing">Kansteen</a>
			                    </li>
			                    <li><a href="<?php echo base_url()?>Home/displaySegienam">Grass Block</a>
			                    </li>
			                    <li><a href="<?php echo base_url()?>Home/displayTrihex">Batako Press</a>
			                    </li>
			                    
			                    <li><a href="<?php echo base_url()?>Home/displayBeton">Buis Beton</a>
			                    </li>
			                    <li><a href="<?php echo base_url()?>Home/displayBetonbelah">U dith</a>
			                    </li>
			                  </ul>
			                  <!-- End Submenu -->
			            </li>
			            <li class="nav-item hs-has-sub-menu g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
			                  <a href="#!" class="nav-link" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1">Services</a>
			                  <!-- Submenu -->
			                  <ul class="hs-sub-menu list-unstyled g-mt-17--lg g-mt-7--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1">
			                    <li><a href="<?php echo base_url()?>Home/jasaPaving">Jasa Pemasangan Paving Block</a>
			                    </li>
			                    
			                    
			                  </ul>
			                  <!-- End Submenu -->
			            </li>
		                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
		                  <a href="<?php echo base_url()?>Home/about" class="nav-link g-color-white">Tentang Kami</a>
		                </li>
 						<li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
		                  <a href="<?php echo base_url()?>Home/kontak" class="nav-link g-color-white">Kontak Kami</a>
		                </li>
		               
		              
		                
		              </ul>
		            </div>
		            <!-- End Navigation -->
		          </div>
		        </nav>
		      </div>
		    </header>


		   
		    	<?php  $this->load->view($main); ?>

		 




	<footer class="footer text-center g-bg-black">
      <div class="container">
        <span class="text-muted g-color-white">2018 &copy; Sinar Baru Conblock Bogor</span>
      </div>
    </footer>	


	<!-- JS Global Compulsory -->
	  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery-migrate.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery.easing.js"></script>
	  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

	  <!-- jQuery UI Core -->
      <script  src="<?php echo base_url();?>assets/js/widget.js"></script>
      

	    <!-- JS Implementing Plugins -->
	  <script  src="<?php echo base_url();?>assets/js/appear.js"></script>
	  <script  src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/slick-carousel/slick/slick.js"></script>
  	  <script src="<?php echo base_url();?>assets/js/hs.megamenu.js"></script>
  	  <script src="<?php echo base_url();?>assets/js/typed.min.js"></script>

	  <!-- JS Unify -->
	  <script src="<?php echo base_url();?>assets/js/hs.core.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.header.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.hamburgers.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.onscroll-animation.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.carousel.js"></script>
	  <script  src="<?php echo base_url();?>assets/js/hs.counter.js"></script>
	   <script  src="<?php echo base_url();?>assets/js/hs.popup.js"></script>
	   <script  src="<?php echo base_url();?>assets/js/hs.datepicker.js"></script>

	   <!-- jQuery UI Widgets -->
       


	  <!-- plugin commons -->
	  
  
	  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.text-slideshow.js"></script>
	  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>


  	   <script type="text/javascript">
        $(document).ready(function(){
            $('#material').DataTable({
              scrollX : true
            });
           
          });
    </script>
	  
	  <script type="text/javascript">
	  		$(document).ready(function(){
			      $('.slider').bxSlider({
			      	mode : 'vertical',
			      	auto : true,
			      	touchEnabled : true,
			      	controls : false
			      });
			    });
	  </script>
	  <script type="text/javascript">
	  		$(document).on('ready', function () {
                // initialization of scroll animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
                // initialization of popups
    			$.HSCore.components.HSPopup.init('.js-fancybox');
    			 $.HSCore.components.HSCarousel.init('.js-carousel');
                // initialization of text animation (typing)
		        
		        // initialization of counters
                var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');



              });

	  		 $(window).on('load', function () {
			      // initialization of header
			      $.HSCore.components.HSHeader.init($('#js-header'));
			      $.HSCore.helpers.HSHamburgers.init('.hamburger');
			      $('.js-mega-menu').HSMegaMenu({
			        event: 'hover',
			        pageContainer: $('.container'),
			        breakpoint: 991
			      });
			     
			    });

	  </script>

	 
</body>
</html>
