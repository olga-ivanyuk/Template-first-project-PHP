<?php
require_once ('connection.php');
include_once ('post-views.php');

$sql = "SELECT id, title, description, image, view FROM posts";
$result = $connection->query($sql);

$posts = [];

foreach ($result as $post){
    $object = new $post['view']($post['title'],$post['description'],$post['image'],$post['id']);
    $posts[] = $object;
}
//print_r($posts);
?>

<!DOCTYPE html>

<html lang="en-us"><head>
  <meta charset="utf-8">
  <title>Reader | Hugo Personal Blog Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />
  
  <!-- theme meta -->
  <meta name="theme-name" content="reader" />

  <!-- plugins -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css" media="screen">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>
<body>
  <!-- navigation -->
<header class="navigation fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
      <a class="navbar-brand order-1" href="index.html">
        <img class="img-fluid" width="100px" src="images/logo.png"
          alt="Reader | Hugo Personal Blog Template">
      </a>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Homepage</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="/create.php">Create post</a>
            </li>
        </ul>
      </div>

      <div class="order-2 order-lg-3 d-flex align-items-center">
        <select class="m-2 border-0 bg-transparent" id="select-language">
          <option id="en" value="" selected>En</option>
          <option id="fr" value="">Fr</option>
        </select>
        
       
        <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
          <i class="ti-menu"></i>
        </button>
      </div>

    </nav>
  </div>
</header>
<!-- /navigation -->

<!-- start of banner -->
<div class="banner text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <h1 class="mb-5">What Would You <br> Like To Read Today?</h1>
        <ul class="list-inline widget-list-inline">
          <li class="list-inline-item"><a href="tags.html">City</a></li>
          <li class="list-inline-item"><a href="tags.html">Color</a></li>
          <li class="list-inline-item"><a href="tags.html">Creative</a></li>
          <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
          <li class="list-inline-item"><a href="tags.html">Demo</a></li>
          <li class="list-inline-item"><a href="tags.html">Elements</a></li>
          <li class="list-inline-item"><a href="tags.html">Fish</a></li>
          <li class="list-inline-item"><a href="tags.html">Food</a></li>
          <li class="list-inline-item"><a href="tags.html">Nice</a></li>
          <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
          <li class="list-inline-item"><a href="tags.html">Season</a></li>
          <li class="list-inline-item"><a href="tags.html">Taste</a></li>
          <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
          <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
          <li class="list-inline-item"><a href="tags.html">Wow</a></li>
        </ul>
      </div>
    </div>
  </div>

  
  <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
      stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
      stroke-miterlimit="10" />
  </svg>
  
  <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_d)">
      <path class="path"
        d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
      <path
        d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
        stroke="#040306" stroke-miterlimit="10" />
    </g>
    <defs>
      <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
        <feOffset dy="4" />
        <feGaussianBlur stdDeviation="2" />
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
      </filter>
    </defs>
  </svg>

  
  <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
      stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
      stroke-miterlimit="10" />
  </svg>

  
  <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
      stroke-width="2" />
  </svg>
</div>
<!-- end of banner -->

<section class="section-sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8  mb-5 mb-lg-0">
  <h2 class="h5 section-title">Recent Post</h2>

          <?php foreach ($posts as $post){
            $post->showPost();
          }
          ?>

  <ul class="pagination justify-content-center">
    <li class="page-item page-item active ">
        <a href="#!" class="page-link">1</a>
    </li>
    <li class="page-item">
        <a href="#!" class="page-link">2</a>
    </li>
    <li class="page-item">
        <a href="#!" class="page-link">&raquo;</a>
    </li>
  </ul>
</div>
      <aside class="col-lg-4 sidebar-home">
  <!-- Search -->
  <div class="widget">
    <h4 class="widget-title"><span>Search</span></h4>
    <form action="#!" class="widget-search">
      <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
      <i class="ti-search"></i>
      <button type="submit" class="btn btn-primary btn-block">Search</button>
    </form>
  </div>

  <!-- authors -->
  <div class="widget widget-author">
    <h4 class="widget-title">Authors</h4>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/john-doe.jpg">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">Charls Xaviar</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/kate-stone.jpg">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">Kate Stone</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
    <div class="media align-items-center">
      <div class="mr-3">
        <img class="widget-author-image" src="images/john-doe.jpg" alt="John Doe">
      </div>
      <div class="media-body">
        <h5 class="mb-1"><a class="post-title" href="author-single.html">John Doe</a></h5>
        <span>Author &amp; developer of Bexer, Biztrox theme</span>
      </div>
    </div>
  </div>
  <!-- Search -->
  
  <div class="widget">
    <h4 class="widget-title"><span>Never Miss A News</span></h4>
    <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
      class="widget-search">
      <input class="mb-3" id="search-query" name="s" type="search" placeholder="Your Email Address">
      <i class="ti-email"></i>
      <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe now</button>
      <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
      </div>
    </form>
  </div>

  <!-- categories -->
  <div class="widget widget-categories">
    <h4 class="widget-title"><span>Categories</span></h4>
    <ul class="list-unstyled widget-list">
      <li><a href="tags.html" class="d-flex">Creativity <small class="ml-auto">(4)</small></a></li>
      <li><a href="tags.html" class="d-flex">Demo <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Elements <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Food <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Microwave <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Natural <small class="ml-auto">(3)</small></a></li>
      <li><a href="tags.html" class="d-flex">Newyork city <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Nice <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Tech <small class="ml-auto">(2)</small></a></li>
      <li><a href="tags.html" class="d-flex">Videography <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Vlog <small class="ml-auto">(1)</small></a></li>
      <li><a href="tags.html" class="d-flex">Wondarland <small class="ml-auto">(1)</small></a></li>
    </ul>
  </div><!-- tags -->
  <div class="widget">
    <h4 class="widget-title"><span>Tags</span></h4>
    <ul class="list-inline widget-list-inline widget-card">
      <li class="list-inline-item"><a href="tags.html">City</a></li>
      <li class="list-inline-item"><a href="tags.html">Color</a></li>
      <li class="list-inline-item"><a href="tags.html">Creative</a></li>
      <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
      <li class="list-inline-item"><a href="tags.html">Demo</a></li>
      <li class="list-inline-item"><a href="tags.html">Elements</a></li>
      <li class="list-inline-item"><a href="tags.html">Fish</a></li>
      <li class="list-inline-item"><a href="tags.html">Food</a></li>
      <li class="list-inline-item"><a href="tags.html">Nice</a></li>
      <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
      <li class="list-inline-item"><a href="tags.html">Season</a></li>
      <li class="list-inline-item"><a href="tags.html">Taste</a></li>
      <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
      <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
      <li class="list-inline-item"><a href="tags.html">Wow</a></li>
    </ul>
  </div><!-- recent post -->
  <div class="widget">
    <h4 class="widget-title">Recent Post</h4>

    <!-- post-item -->
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-10.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post/elements/">Elements That You Can Use In This Template.</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>15 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
    
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-3.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
    
    <article class="widget-card">
      <div class="d-flex">
        <img class="card-img-sm" src="images/post/post-7.jpg">
        <div class="ml-3">
          <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
          <ul class="card-meta list-inline mb-0">
            <li class="list-inline-item mb-0">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
          </ul>
        </div>
      </div>
    </article>
  </div>

  <!-- Social -->
  <div class="widget">
    <h4 class="widget-title"><span>Social Links</span></h4>
    <ul class="list-inline widget-social">
      <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
    </ul>
  </div>
</aside>
    </div>
  </div>
</section>

<footer class="footer">
  <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
      stroke-width="2" />
  </svg>
  
  <div class="container">
      <div class="row align-items-center">
      <div class="col-md-5 text-center text-md-left mb-4">
          <ul class="list-inline footer-list mb-0">
            <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="terms-conditions.html">Terms Conditions</a></li>
          </ul>
      </div>
      <div class="col-md-2 text-center mb-4">
          <a href="index.html"><img class="img-fluid" width="100px" src="images/logo.png" alt="Reader | Hugo Personal Blog Template"></a>
      </div>
      <div class="col-md-5 text-md-right text-center mb-4">
          <ul class="list-inline footer-list mb-0">
          
          <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
          
          </ul>
      </div>
      <div class="col-12">
          <div class="border-bottom border-default"></div>
      </div>
      </div>
  </div>
  </footer>


  <!-- JS Plugins -->
  <script src="plugins/jQuery/jquery.min.js"></script>

  <script src="plugins/bootstrap/bootstrap.min.js"></script>

  <script src="plugins/slick/slick.min.js"></script>

  <script src="plugins/instafeed/instafeed.min.js"></script>


  <!-- Main Script -->
  <script src="js/script.js"></script></body>
</html>
