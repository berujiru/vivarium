<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vivarium</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{url('/frontend/img/fav.png')}}" type="image/png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{url('/frontend/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/frontend/fonts/font-awesome/css/font-awesome.css')}}">
<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{url('/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/frontend/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/frontend/css/nivo-lightbox/default.css')}}">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-code"></i> Crypto-Vivarium by Bergel</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#portfolio" class="page-scroll">Collection</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Vivariums</h1>
          <p>Forest • Savannas •  Desert •  Grasslands • Tundra</p>
          <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="{{url('/frontend/img/owner.jpg')}}" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>I am Bergel C. just recently married, fairly managing finances but still hasn't found security in my job as an IT. I found joy in drawings and I hope that this hobby will turn into something profitable.</p>
          <p>Feel free to browse my simple collection, you can support me by buying any of my cupcake world for just few $ on Opensea.</p>
          <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy</a>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll">My Collection</a>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Collection</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".forest">Forest</a></li>
            <li><a href="#" data-filter=".savannas">Savannas</a></li>
            <li><a href="#" data-filter=".desert">Desert</a></li>
            <li><a href="#" data-filter=".grasslands">Grasslands</a></li>
            <li><a href="#" data-filter=".tundra">Tundra</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 forest">
          <div class="portfolio-item">
            <div class="hover-bg"><a href="{{url('/frontend/img/lots/lot1.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot1.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 desert">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot2.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot2.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 forest">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot3.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot3.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 forest">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot4.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot4.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 desert">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot5.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot5.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 savannas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot6.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot6.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 savannas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot7.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot7.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 forest">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot8.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot8.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 desert">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot9.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot9.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 savannas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{url('/frontend/img/lots/lot10.png')}}" title="Buy it on opensea" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Click to Expand</h4>
                <a href="https://opensea.io/collection/crypto-vivarium" class="btn btn-default btn-lg ">Buy/View on Opensea</a>
              </div>
              <img src="{{url('/frontend/img/lots/lot10.png')}}" class="img-responsive" alt="Click to Expand"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Get In Touch</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-codepen"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2018 Hangover. Designed by <a href="https://codelatte.org/" rel="nofollow">Codelatte</a>.</p>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{url('/frontend/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/jquery.isotope.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/jqBootstrapValidation.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/contact_me.js')}}"></script> 
<script type="text/javascript" src="{{url('/frontend/js/main.js')}}"></script>
</body>
</html>
