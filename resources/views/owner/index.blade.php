<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>The Plaza - eCommerce Template</title>
  <meta charset="UTF-8">
  <meta name="description" content="The Plaza eCommerce Template">
  <meta name="keywords" content="plaza, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="/css/owl.carousel.css"/>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/animate.css"/>


  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  
  <!-- Header section -->
  <header class="header-section">
    <div class="container-fluid">
      <!-- logo -->
      <div class="site-logo">
        <img src="/img/logo.png" alt="logo">
      </div>
      <!-- responsive -->
      <div class="nav-switch">
        <i class="fa fa-bars"></i>
      </div>
      <div class="header-right">
        <a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
        <a href="#" class="search"><img src="img/icons/search.png" alt=""></a>
      </div>
      <!-- site menu -->
      <ul class="main-menu">
        <li><a href="#">Home</a></li>
        <li><a href="{{route('owner.addproduct')}}">Add product</a></li>
        <li><a href="#">Man</a></li>
        <li><a href="#">LookBook</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </header>
  <!-- Header section end -->


  <!-- Hero section -->
  <section class="hero-section set-bg" data-setbg="/img/bg.jpg">
    <div class="hero-slider owl-carousel">
      <div class="hs-item">
        <div class="hs-left"><img src="/img/slider-img.png" alt=""></div>
        <div class="hs-right">
          <div class="hs-content">
            <div class="price">from $19.90</div>
            <h2><span>2018</span> <br>summer collection</h2>
            <a href="" class="site-btn">Shop NOW!</a>
          </div>  
        </div>
      </div>
      <div class="hs-item">
        <div class="hs-left"><img src="/img/slider-img.png" alt=""></div>
        <div class="hs-right">
          <div class="hs-content">
            <div class="price">from $19.90</div>
            <h2><span>2018</span> <br>summer collection</h2>
            <a href="" class="site-btn">Shop NOW!</a>
          </div>  
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end -->

  
  <!-- Intro section -->
  




  <!-- Product section -->
  <section class="product-section spad">
    <div class="container">
      <ul class="product-filter controls">
          <li class="control" data-filter=".new">computer components</li>

     
      </ul>


       @foreach($iac as $val)
  <section class="product-section spad">
    <div class="container">
    
      <div class="row" id="product-filter">
        <div class="mix col-lg-3 col-md-6 best">
          <div class="product-item">
            <figure>
              <img src="/images/{{$val['image']}}" alt="">
              <div class="pi-meta">
                <div class="pi-m-left">
                  <img src="/img/icons/eye.png" alt="">
                  <p>quick view</p>
                </div>
                <div class="pi-m-right">
                  <img src="/img/icons/heart.png" alt="">
                  <p>save</p>
                </div>
              </div>
            </figure>
            <div class="product-info">
          
              <h5>{{$val['name']}}</h6>
              <h6>{{$val['model']}}</h6>
              <p> ${{$val['price']}} </p>
              <p> {{$val['description']}} </p>
              <a href="#" class="site-btn btn-line">ADD TO CART</a>
            </div>
          </div>
        </div>

                @endforeach

       
           
        
        
        </div>
      </div>
    </div>
  </section>
  <!-- Product section end -->


  <!-- Blog section --> 

  <!-- Blog section end --> 


 
  <!-- Footer section end -->


  <!--====== Javascripts & Jquery ======-->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/mixitup.min.js"></script>
  <script src="/js/sly.min.js"></script>
  <script src="/js/jquery.nicescroll.min.js"></script>
  <script src="/js/main.js"></script>
    </body>
</html>