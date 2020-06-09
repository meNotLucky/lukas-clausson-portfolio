<?php 

// Read Projects JSON
$projects_data = file_get_contents('content/projects.json');
$projects = json_decode($projects_data);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lukas Clausson - Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="scss/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="scss/style.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="index.php">Portfolio<span class="text-primary"></span> </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <!-- <li><a href="#what-we-do-section" class="nav-link">Games</a></li> -->
                    <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                    <li><a href="#about-section" class="nav-link">About Me</a></li>
                    <!-- <li><a href="#studio-section" class="nav-link">Gallery</a></li> -->
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->
    
    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide">
            <img src="images/headshot_1.jpg" alt="Image">  
          </div>
          <div class="slide">
            <img src="images/ofthesky_header.jpg" alt="Image">  
          </div>
          <div class="slide">
            <img src="images/happyhomemaker_header.jpg" alt="Image">  
          </div>
          <div class="slide">
            <img src="images/colossalchaos_header.jpg" alt="Image">  
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto align-self-center">
            <div class="intro">
              <div class="heading">
                <h1>Lukas Clausson</h1>
              </div>
              <div class="text">
                <p class="sub-text mb-5">Game Programmer & Designer</p>
                <!-- <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Start a project</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END .site-blocks-cover -->

    <!-- <div class="site-section" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Games</span>
            <h2 class="title text-primary">The games I have been a part of developing</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 ml-left">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Of the Sky</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Happy Homemaker</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Colossal Chaos</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <p><a href="#" class="readmore">Learn more</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- END .site-section -->

    <!-- PROJECTS BEGIN -->

    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Portfolio</span>
            <h2 class="title text-primary mb-3">Latest Games & Projects</h2>
          </div>
        </div>

        <?php
        $flip = true;
        foreach($projects as $proj) :
        ?>

        <div class="row mb-5">

          <?php echo ($flip ? "<div class='col-lg-6 mb-4 mb-lg-0'>" : "<div class='col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0'>"); ?>

            <img src="<?php echo $proj->splash; ?>" alt="Image" class="img-fluid">
            <p></p>
            <div class="owl-carousel slide-one-item normal-slider">

            <?php foreach($proj->screenshots as $path) { echo "<div class='slide'><img src='{$path}' alt='Image' class='img-fluid'></div>"; } ?>
            
          </div>
            <table style="margin-top: 40px;" class="table table-striped table-borderless">
              <thead>
                <th>Specifications</th>
              </thead>
              <tbody>
                <tr>
                  <th>Engine</th>
                  <th><?php echo $proj->specs->engine; ?></th>
                </tr>
                <tr>
                  <th>Platform(s)</th>
                  <th><?php echo $proj->specs->platform; ?></th>
                </tr>
                <tr>
                  <th>Input</th>
                  <th><?php echo $proj->specs->input; ?></th>
                </tr>
              </tbody>
            </table>
          </div>

          <?php echo ($flip ? "<div class='col-lg-5 h-100 jm-sticky-top ml-auto'>" : "<div class='col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1'>"); ?>
            
          <h3><?php echo $proj->title; ?></h3>
            <p class="sub-text mb-4"><strong><?php echo $proj->position; ?></strong></p>
            <?php
            foreach($proj->text as $p)
            {
              echo "<p class='mb-4'>{$p}</p>";
            }
            ?>

            <p><a data-fancybox data-ratio="2" href="<?php echo $proj->trailer ?>" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the trailer</span></a></p>
            <p class="mb-4"><a href="<?php echo $proj->website ?>" class="readmore" target="blank">Visit Game Website</a></p>
            <div class="testimonial h-100">
              <blockquote class="mb-3">
                <p>&ldquo;<?php echo $proj->quote->text ?>&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="<?php echo $proj->quote->author_img ?>" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block"><?php echo $proj->quote->author ?></span>
                  <span class="position"><?php echo $proj->quote->author_title ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <?php

        $flip = !$flip;
        endforeach;

        ?>

      </div>
    </div>

    <!-- PROJECTS END -->

    <!-- ABOUT ME BEGIN -->

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-left">
          <div class="col-lg-6 mb-5">
            <img src="images/headshot_1.jpg" alt="Image" class="img-fluid">
            <p></p>
            <!-- SnapWidget -->
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <div style="position:relative;">
              <iframe src="https://snapwidget.com/embed/835783" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
              <a href="https://www.instagram.com/lukasclausson/" style="position:absolute; top:0; left:0; display:inline-block; width:100%; height:100%; z-index:5;" target="blank"></a>
            </div>
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block">About Me</span>
            <h2 class="title text-primary mb-3">That Programmer from Gothenburg</h2>
            <p class="mb-4">I was born in 1999 and grew up with my family in Gothenburg, Sweden. My interest in games and technology started at an early age, but really took off when I was around 12 years old. I had saved up to buy my first computer, which (to my mothers great dismay) I immediately took apart to figure out the inner workings and puzzle that it is. I did manage to put it back together though.</p>
            <p class="mb-4">Games have always been a big part of my life. I remember getting lost for hours in beautiful RPGs with amazing stories, as well as the satisfaction of getting to the highest prestige in multiplayer FPS games. But I never really concidered creating them as a career until pretty late in my educational life.</p>
            <p class="mb-4">In high school I studied design and web development. But in the third year I started messing around with application programming, and eventually find my way into Unity3D where I learned C#. I immediately got hooked on the thought of making my own games for a living, and after graduating high school I went on to study Game Design and Programming at Uppsala University, Campus Gotland. This was the start of my game creation journey.</p>
            <p class="d-flex align-items-center">
              <a href="https://www.facebook.com/LukasClausson" class="pl-0 pr-3" target="blank"><span style="font-size: 2em;" class="icon-facebook"></span></a>
              <a href="https://www.instagram.com/lukasclausson/" class="pl-3 pr-3" target="blank"><span style="font-size: 2em;" class="icon-instagram"></span></a>
              <a href="https://github.com/meNotLucky" class="pl-3 pr-3" target="blank"><span style="font-size: 2em;" class="icon-github"></span></a>
              <a href="https://www.linkedin.com/in/lukasclausson/" class="pl-3 pr-3" target="blank"><span style="font-size: 2em;" class="icon-linkedin"></span></a>
            </p>
            <!-- <p class="mb-4"><strong>Competences:</strong></p> -->
            <!-- <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <li>C++</li>
                <li>C#</li>                
              </ul>
              <ul class="list-unstyled ul-check success">
                <li>Unreal Engine 4</li>
                <li>Unity 3D</li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- ABOUT ME END -->

    <!-- CONTACT ME BEGIN -->    
    
    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="mailto:lukas.clausson@hotmail.com" class="contact-form" method="post" enctype="text/plain">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Contact</span>
            <h2 class="title text-primary">Get In Touch With Me</h2>
          </div>

          <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
              <input type="text" name="FirstName" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" name="LastName" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" name="Message" class="form-control" placeholder="Email">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-md">Send Message</button>
            </div>
          </div>

        </form>
      </div>
    </div> 

    <!-- CONTACT ME END -->

    <!-- FOOTER BEGIN -->
  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Me</h3>
                <p>I was born in 1999 and grew up with my family in Gothenburg, Sweden. My interest in games and technology started at an early age, but really took off when I was around 12 years old. I had saved up to buy my first computer...</p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#portfolio-section" class="smoothscroll">Portfolio</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Me</a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

          <!-- <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter full name" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div> -->

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
              <a href="https://www.facebook.com/LukasClausson" class="pl-0 pr-3" target="blank"><span class="icon-facebook"></span></a>
              <a href="https://www.instagram.com/lukasclausson/" class="pl-3 pr-3" target="blank"><span class="icon-instagram"></span></a>
              <a href="https://github.com/meNotLucky" class="pl-3 pr-3" target="blank"><span class="icon-github"></span></a>
              <a href="https://www.linkedin.com/in/lukasclausson/" class="pl-3 pr-3" target="blank"><span class="icon-linkedin"></span></a>
            </div>
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

    <!-- FOOTER END -->

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

     
  </body>
</html>