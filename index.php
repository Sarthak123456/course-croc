<?php
include 'includes/dbconfig.php';
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>CourseCroc</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
 

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->


  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
  <style>
.tt-query,
.tt-hint {
    width: 396px;
    height: 30px;
    padding: 8px 12px;
    font-size: 24px;
    line-height: 30px;
    border: 2px solid #ccc;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    outline: none;
}

.tt-query {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
    color: #999
}

.tt-dropdown-menu {
    width: 422px;
    margin-top: 12px;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
    padding: 3px 20px;
    font-size: 18px;
    line-height: 24px;
}

.tt-suggestion.tt-is-under-cursor {
    color: #fff;
    background-color: #0097cf;

}
</style>
  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />

  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script src="//rawgit.com/bassjobsen/Bootstrap-3-Typeahead/master/bootstrap3-typeahead.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#search_bar').typeahead({
          source: function (query, process) {
            $.ajax({
              url: 'includes/autocomplete.php',
              type: 'POST',
              dataType: 'JSON',
              data: 'query=' + query,
              success: function(data) {
                console.log(data);
                process(data);
              }
            });
          }
        });
      });
    </script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
   

      <!-- Start  Logo & Naviagtion  -->
      <?php 

      include "header.php";
      ?>
    <!-- End Header Section -->


    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
      
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
       
          <!--/ Carousel item end -->
         
          <!--/ Carousel item end -->
          <div class="paa">
           
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span>Why you are waiting</span>
                            </h3>
                            <b><br><br>
                            <input type="text"   name="search_bar" id="search_bar" class="form-control se"   placeholder="Search" />
               <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="search.php">Courses</a>
                  <a class="animated4 slider btn btn-default btn-min-block" href="#">Content</a>
                       <div class="btn-group" data-toggle="buttons">
  
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option2" autocomplete="off">Courses
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option3" autocomplete="off">Content
  </label>
</div>
                  <br><br><br><br><br><br>
                  <a href="#mid" class="clearfix"><i class="fa big fa-angle-down"></i></a>

                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>

       
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
 <div id="content">
      <div class="container">
        <div class="row">

          <!-- Page Content -->
          <div class="col-md-9">

            <!-- Start Recent Posts Carousel -->
             <div class="recent-projects" id="mid">
          <h4 class="title"><span>Related Courses</span></h4>
          <div class="projects-carousel touch-carousel">

            <div class="portfolio-item item">
              <div class="portfolio-border">
               <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <a href="search.php" class="btn btn-primary">View full course ></a>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <a href="search.php" class="btn btn-primary">View full course ></a>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
               <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
               <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/portfolio-1/1.png">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-02.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/5.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Drawing</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/6.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-03.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/7.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Website</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/8.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/9.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/10.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/11.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/12.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>


            </div>
            </div>
            </div>
            </div>
            <div id="content">
      <div class="container">
        <div class="row">

          <!-- Page Content -->
          <div class="col-md-9">

            <!-- Start Recent Posts Carousel -->
             <div class="recent-projects" id="mid">
          <h4 class="title"><span>Related Content</span></h4>
          <div class="projects-carousel touch-carousel">

            <div class="portfolio-item item">
              <div class="portfolio-border">
                   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <a href="search.php" class="btn btn-primary">View full course ></a>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
               <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/blog-04.jpg">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
               <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="panda">
             <figure>
       <img class="img" alt="PDF" src="images/portfolio-1/1.png">
       <figcaption id="hide"> <span class="rating-static rating-30"></span></figcaption>    
      </figure>
           <a href="final.php" target="_blank">
            <h4>This is a sample title</h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-university pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-usd  pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-calendar  pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-02.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/5.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Drawing</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/6.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-03.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/7.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Website</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/8.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/9.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/10.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/11.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/12.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Ilustration</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>


            </div>
            </div>
            </div>
            </div>

    <!-- Start Services Section -->
    
          <!-- End Service Icon 1 -->

         


    <!-- Start Purchase Section -->
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
          <h1 class="fittext wite-text uppercase tlt">
                      <span class="texts">
                        
                        <span>lol</span>
                         <span>Greacked upt</span>
                          <span>Saxy</span>
                      </span>
                        Margo Template is Ready for <br/>Business, Agency <strong>or</strong> Creative Portfolios
                    </h1>
          <!-- End Animations Text -->


          <!-- Start Buttons -->
          <a href="#" class="btn-system btn-large"><i class="fa fa-tasks"></i> Check Out Features</a>
          <a href="#" class="btn-system btn-large btn-wite"><i class="fa fa-download"></i> Purchase This Now</a>

        </div>
        <!-- End Section Content -->

      </div>
      <!-- .container -->
    </div>
    <!-- End Purchase Section -->


    <!-- Start Portfolio Section -->
    


    <!-- Start Client/Partner Section -->
    
    <!-- Start Footer Section -->
   <?php include"footer.php"
   ?>


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>