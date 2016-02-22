<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<script src="<?php echo base_url(); ?>login/js/ie/html5.js"></script>
<script src="<?php echo base_url(); ?>login/js/ie/respond.min.js"></script>
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->


<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <title>Auto Click-No1 automobile online store</title>
    <meta name="description" content="your description">
    <meta name="keywords" content="your keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="../img/favicon.png" rel="icon" type="image/png">

    <!-- Bootstrap style -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen" />

    <!-- Font Awesome Style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" media="screen" />

    <!-- Animate Style -->
    <link href="../css/animate.css" rel="stylesheet" media="screen" />

    <!-- Flexslider Style -->
    <link href="../css/flexslider.css" rel="stylesheet" media="screen" />

    <!-- Lightbox -->
    <link href="../css/magnific-popup.css" rel="stylesheet" media="screen" />

    <!-- Style css -->
    <link href="../css/style.css" rel="stylesheet" media="screen" />

    <!-- Components css -->
    <link href="../css/components.css" rel="stylesheet" media="screen" />

    <!-- Color style css -->
    <link href="../css/color/color-1.css" rel="stylesheet" media="screen" id="color" />

    <!-- Responsive css -->
    <link href="../css/responsive.css" rel="stylesheet" media="screen" />

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>

    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript"
            src="<?php echo base_url(); ?>backend_resources/js/jquery-1.4.2.min.js"></script>

    <!-- Modernizr js -->
    <script src="../js/modernizr.js"></script>

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
                <a href="my.php" title="Home" class="logo pull-left"><img src="../img/logo.png " alt="logo"></a>
                <!-- logo ends -->

                <!-- Menu -->
                <ul class="nav pull-left" id="nav">
                    <li ><a href="my.php" title="">Home</a></li>
                    </li>
                    <li class="selected"><a href="change.php.php" title="">change</a></li>
                    </li>

                </ul>
                <!-- Menu ends -->

            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="singInForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <form onsubmit="return false" method="post" id="login_form">
                    <div class="top_b">Add in to Admin Panel</div>
                    <div class="form-group">
                        <input
                            type="text" id="username" name="username" placeholder="Username"
                            value="" />
                    </div>
                    <div class="form-group">
                        <input
                            type="email" id="email" name="email" placeholder="E-mail"
                            value="" />
                    </div>
                    <div class="form-group">
                        <input
                            type="text" id="contact" name="contact" placeholder="contact"
                            value="" />
                    </div>
                    <div class="form-group">
                        <input
                            type="password" id="password" name="password"
                            placeholder="Password" value="" />
                    </div>

                    <div class="btm_b clearfix">
                        <button class="btn btn-inverse pull-right" type="submit">Sign Up</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script
        src="<?php echo base_url(); ?>/login/js/jquery.min.js"></script>
    <script
        src="<?php echo base_url(); ?>login/js/jquery.actual.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/login/lib/validation/jquery.validate.js"></script>
    <script
        src="<?php echo base_url(); ?>/login/bootstrap/js/bootstrap.min.js"></script>

    <script>

        // Validation of addmin form

        $('#singInForm').validate({
            onkeyup: false,
            errorClass: 'error',
            validClass: 'valid',
            rules: {
                username: {required: true, minlength: 3},
                password: {required: true, minlength: 3}
            },
            highlight: function(element) {
                $(element).closest('div').addClass("f_error");
                setTimeout(function() {
                    boxHeight()
                }, 200)
            },
            unhighlight: function(element) {
                $(element).closest('div').removeClass("f_error");
                setTimeout(function() {
                    boxHeight()
                }, 200)
            },
            errorPlacement: function(error, element) {
                $(element).closest('div').append(error);
            },



        });
    </script>






</header>

<section>




    <div class="row spacer50"></div>
    <div class="row"><div class="col-md-12"><hr class="small-line"></div></div>
    <div class="row spacer80"></div>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-female"></i>
                    <h4>HTML / CSS</h4>
                </div>
                <div class="services-2-text">

                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-bell-o"></i>
                    <h4>MODERN GRAPHIC DESIGN</h4>
                </div>
                <div class="services-2-text">
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-gamepad"></i>
                    <h4>SERVER OPTIMALIZATION</h4>
                </div>
                <div class="services-2-text">
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-cloud-upload"></i>
                    <h4>CLOUD HOSTING</h4>
                </div>
                <div class="services-2-text">
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-exchange"></i>
                    <h4>RESPONSIVE LAYOUT</h4>
                </div>
                <div class="services-2-text">
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="services-2">
                <div class="services-2-icon">
                    <i class="fa fa-bolt"></i>
                    <h4>SOCIAL MARKETING</h4>
                </div>
                <div class="services-2-text">
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row spacer80"></div>
    </div>







    <div class="spacer80"></div>




</section> <!-- section ends -->






<div class="col-sm-3 col-xs-6">
    <h4>Follow us</h4>
    <ul class="colored-social-icons-2">
        <li><a href="#" rel="external" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" rel="external" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" rel="external" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" rel="external" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#" rel="external" class="instagram"><i class="fa fa-instagram"></i></a></li>
    </ul>

</div>
</div>
</div>
</div>



<!-- Footer ends -->
<a href="#" class="back-to-top"><span></span></a>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.fitvids.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/retina.js"></script>
<script src="../js/respond.min.js"></script>
<script src="../js/jquery.parallax-1.1.3.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/ion.rangeSlider.min.js"></script>
<script src="../js/selectnav.js"></script>
<script src="../js/responsive-tabs.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/functions.js"></script>
</body>
</html>
