<?php

require_once ('connection.php');
$id = $_GET['id'];

$sql = "SELECT id, title, image, body FROM posts
        WHERE id ='$id'";

$result = $connection->query($sql);

$post = $result->fetch();

$sql = "SELECT * FROM comments 
        WHERE post_id ='$id'";
$result = $connection->query($sql);
$comments = [];
foreach ($result as $comment){
    $comments[] = $comment;
}


//print_r($post);
//print_r($comments);

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

<div class="py-4"></div>
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9   mb-5 mb-lg-0">
        <article>
          <div class="post-slider mb-4">
            <img src="<?=$post['image']?>" class="card-img" alt="post-thumb">
          </div>
          
          <h1 class="h2"><?=$post['title']?></h1>
          <ul class="card-meta my-3 list-inline">
            <li class="list-inline-item">
              <a href="author-single.html" class="card-meta-author">
                <img src="images/john-doe.jpg">
                <span>Charls Xaviar</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="tags.html">Color</a></li>
                <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                <li class="list-inline-item"><a href="tags.html">Fish</a></li>
              </ul>
            </li>
          </ul>
          <div class="content"><p><?=$post['body']?></p>
          </div>
        </article>
        
      </div>

      <div class="col-lg-9 col-md-12">
          <div class="mb-5 border-top mt-4 pt-5">
              <h3 class="mb-4">Comments</h3>
<?php foreach ($comments as $comment): ?>
              <div class="media d-block d-sm-flex mb-4 pb-4">
                  <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                      <img src="images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                  </a>
                  <div class="media-body">
                      <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>

                      <p><?= $comment['text'] ?></p>
                      
                      <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                      <a class="text-primary font-weight-600" href="#!">Reply</a>
                  </div>
              </div>
                <div class="mb-4">
                    <form method="POST" action="comments/store.php">
                        <div class="row">
                            <input type="text" name="post_id" value="<?=$post['id']?>" hidden>
                            <input type="text" name="comment_id" value="<?=$comment['id']?>" hidden>
                            <div class="form-group col-md-12">
                                <textarea class="form-control shadow-none" name="text" rows="7" required></textarea>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary" type="submit">Comment Now</button>
                    </form>
                </div>
<?php endforeach;?>
          </div>

          <div>
              <h3 class="mb-4">Leave a Reply</h3>
              <form method="POST" action="comments/store.php">
                  <div class="row">
                      <input type="text" name="post_id" value="<?=$post['id']?>" hidden>
                      <div class="form-group col-md-12">
                          <textarea class="form-control shadow-none" name="text" rows="7" required></textarea>
                      </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Comment Now</button>
              </form>
          </div>
      </div>
      
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