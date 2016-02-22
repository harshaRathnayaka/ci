<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootsrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://maxcdn.bootsrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <title>Auto Click-No1 automobile online store</title>
	<meta name="description" content="your description">
	<meta name="keywords" content="your keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png">
  <!-- Bootstrap style -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <!-- Font Awesome Style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" media="screen" />
  <!-- Animate Style -->
  <link href="css/animate.css" rel="stylesheet" media="screen" />
  <!-- Flexslider Style -->
  <link href="css/flexslider.css" rel="stylesheet" media="screen" />       
  <!-- Lightbox -->
  <link href="css/magnific-popup.css" rel="stylesheet" media="screen" />     
	<!-- Style css -->
  <link href="css/style.css" rel="stylesheet" media="screen" /> 
	<!-- Components css -->
  <link href="css/components.css" rel="stylesheet" media="screen" /> 
	<!-- Color style css -->
  <link href="css/color/color-1.css" rel="stylesheet" media="screen" id="color" /> 
	<!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet" media="screen" />
  <!-- Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'> 
  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- Modernizr js -->        
	<script src="js/modernizr.js"></script>
</head>

<body class="no-main-slider">

	<div id="loading-wrap">
		<div id="loading">
      <i class="fa fa-cog fa-spin"></i>
    </div>
	</div>

  <header class="home-header"> <!-- header -->
    
    <nav class="navbar navbar-default" role="navigation">
	    <div class="container">
        <div class="navbar-inner">          
          <!-- logo-->                       
					<a href="adminpanel.php" title="Home" class="logo pull-left"><img src=" logo.png " alt="logo"></a>
          <!-- logo ends -->         
          
          <!-- Menu --> 
          <ul class="nav pull-left" id="nav">
            <li class="selected"><a href="adminpanel.php" title="">home</a></li>
            <li><a href="catalog-right.html" title="">ads</a>
              <ul>
                <li><a href="ads.php">approve ads</a></li>
                <li><a href="catalog-left.html">band user/Ads</a></li>
                <li><a href="catalog.html">update ads</a></li>
              </ul>
            </li>
            <li><a href="#" title="">website</a>
              <!-- sub menu -->
              <ul>
                <li><a href="components.html" title="">edit webpage</a></li>
                <li><a href="about-us.html" title="">gallery</a></li>
                <li><a href="services.html" title="">Services</a></li>
                <li ><a href="gallery-4.html" title="">about us</a>
                  <!-- sub sub menu -->  

                  <!-- sub sub menu ends -->
                </li>                
              </ul>
              <!-- sub menu ends -->
            </li>
            <li><a href="shop-right.html" title="">settings</a>
              <ul>
                <li><a href="shop-product-detail.html">Shop Product detail</a></li>
                <li><a href="shop-cart.html">Cart</a></li>
                <li><a href="shop-checkout.html">Checkout</a></li>
              </ul>            
            </li>            
            <li><a href="blog-right.html" title="">statistics</a>
              <ul>
                <li><a href="blog-left.html">user Report</a></li>
                <li><a href="blog.html">annual REPORT</a></li>
              </ul>            
            </li> 
            <li><a href="contact.html" title="">security</a></li>                        
          </ul>
          <!-- Menu ends -->
          <div class="menu-right-bar">
            <ul class="menu-right-bar-ul">
            <li class="text hidden-sm hidden-xs">1-800-555-6789</li>
            <li><a href="shop-cart.html" class="button btn btn-primary" role="button"><i class="fa fa-shopping-cart"></i> (2)</a></li> 
            <li><a href="home_view.php" class="button btn btn-primary" role="button">logout</a></li>
            </ul>
          </div>
        </div>  
      </div>           
    </nav>         
    <!-- Modal -->
    <div class="modal fade" id="addadmin" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" action="adminpanel.php">
      <div class="modal-dialog modal-sm" >
        <div class="modal-content">
          <form action="ads.php" method="post" role="form">

            <span id="close" onclick="close();" class="glyphicon glyphicon-remove-circle pull-right"></span>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter Username" >
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="Re-password">Re Enter Password</label>
              <input type="Re-password" class="form-control" id="Re-password" placeholder=" Re-Enter Password">
            </div>
            <button type="submit" class="btn btn-success">Create Admin</button>
            <button type="reset"  class="btn btn-warning" >Close</button>

          </form>
        </div>
      </div>
    </div>

    <!--jquery script of validation-->
<script type="text/javascript">
  $(document).ready(function(){

    $("#login").on('click',function(){

      $('#addadmin').modal({show:true});

    });

    $("#close").on('click',function(){

      $('#addadmin').modal('hide');
    });
   });

</script>

  </header>
  


    <div class="container">
      
      <div class="r-bg">
      <div class="portfolio-masonry-all">
        
        <div class="row">
				  <div class="col-md-12">

				  </div>
			  </div>
        <div class="row">
          <div class="portfolio-masonry-container">

          <div class="col-xs-12 col-sm-3 col-md-3 portfolio-masonry-item web">
            <div class="gallery-item">
              <div class="media-content">
                <img src="img/favicon.png"><button id="login" class="btn btn-primary btn-lg" data-toggle="modal" >Add Admin</button>
              </div>           
            </div>          
          </div>          


          <div class="col-xs-12 col-sm-3 col-md-3 portfolio-masonry-item branding" >
            <div class="gallery-item">
              <div class="media-content">
                <a href="#" class="popup"  data-toggle="modal" data-target="#updateUser">
                  <h2>Update Admin</h2>
                <div class="overlay">
                  <h3>Update Admin</h3>
                  </div>
                </a>
              </div>           
            </div>           
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3 portfolio-masonry-item print">
            <div class="gallery-item">
              <div class="media-content">
                <a href="img/gallery/adduser.jpg" class="popup-link" title="title"><img src="img/gallery/adduser.jpg" alt="">
                  <h2>Delete Admin</h2>
                <div class="overlay">
                  <h3>Delete Admin</h3>
                  </div>
                </a>
              </div>           
            </div>         
          </div>

          </div>
        </div>

      </div>
    
      </div>
      
    </div>

  </section> <!-- section ends -->

    <div class="footer-bottom">
      <div class="footer-bottom-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h4>Info</h4>
              <p>Sri Lankan MOST popular vehicle PORTAL online STORE</p>
              <div class="spacer50"></div>
              <div class="spacer1"></div>
              <p>� Auto Click 2016 � Created by <a href="#">dreamEYEcreations</a>.</p>
            </div>
            <div class="col-sm-3">
              <h4>Address</h4>
              <ul class="list-3">
                <li>920 Reserve Dr. Suite 140</li>
                <li>Roseville, CA 95678</li>
                <li>&nbsp;</li>
                <li>(415) 496-9612</li>
                <li>&nbsp;</li>
                <li><a href="mailto:info@domain.com">dreameye.com</a></li>
              </ul>

            </div>
            <div class="col-sm-3">
              <h4>Contact</h4>
              <ul class="list-3">
                <li>(415) 496-9612</li>
                <li>(415) 496-9613</li>
                <li>(415) 496-9614</li>
              </ul>
              <div class="spacer15"></div>
              <a class="btn btn-default" href="mailto:email@example.com" role="button">Email us</a>              
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
  </footer> <!-- Footer ends -->
  <a href="#" class="back-to-top"><span></span></a>  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/retina.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/ion.rangeSlider.min.js"></script>
  <script src="js/selectnav.js"></script>
  <script src="js/responsive-tabs.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/myone.js"></script>
	</body>
</html>



