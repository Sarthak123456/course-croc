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
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//rawgit.com/bassjobsen/Bootstrap-3-Typeahead/master/bootstrap3-typeahead.js"></script>

  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>

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

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
   

      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html">
              <img alt="" src="images/margo.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a href="#container" ><i class="fa fa-angle-up big"></i></a>
              
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="index.html">Home</a>
                <ul class="dropdown">
                  <li><a class="active" href="index.html">Home Main Version</a>
                  </li>
                  <li><a href="index-01.html">Home Version 1</a>
                  </li>
                  <li><a href="index-02.html">Home Version 2</a>
                  </li>
                  <li><a href="index-03.html">Home Version 3</a>
                  </li>
                  <li><a href="index-04.html">Home Version 4</a>
                  </li>
                  <li><a href="index-05.html">Home Version 5</a>
                  </li>
                  <li><a href="index-06.html">Home Version 6</a>
                  </li>
                  <li><a href="index-07.html">Home Version 7</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="about.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="about.html">About</a>
                  </li>
                  <li><a href="services.html">Services</a>
                  </li>
                  <li><a href="right-sidebar.html">Right Sidebar</a>
                  </li>
                  <li><a href="left-sidebar.html">Left Sidebar</a>
                  </li>
                  <li><a href="404.html">404 Page</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Shortcodes</a>
                <ul class="dropdown">
                  <li><a href="tabs.html">Tabs</a>
                  </li>
                  <li><a href="buttons.html">Buttons</a>
                  </li>
                  <li><a href="action-box.html">Action Box</a>
                  </li>
                  <li><a href="testimonials.html">Testimonials</a>
                  </li>
                  <li><a href="latest-posts.html">Latest Posts</a>
                  </li>
                  <li><a href="latest-projects.html">Latest Projects</a>
                  </li>
                  <li><a href="pricing.html">Pricing Tables</a>
                  </li>
                  <li><a href="animated-graphs.html">Animated Graphs</a>
                  </li>
                  <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="portfolio-3.html">Portfolio</a>
                <ul class="dropdown">
                  <li><a href="portfolio-2.html">2 Columns</a>
                  </li>
                  <li><a href="portfolio-3.html">3 Columns</a>
                  </li>
                  <li><a href="portfolio-4.html">4 Columns</a>
                  </li>
                  <li><a href="single-project.html">Single Project</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - right Sidebar</a>
                  </li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                  </li>
                  <li><a href="single-post.html">Blog Single Post</a>
                  </li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.html">Home</a>
            <ul class="dropdown">
              <li><a class="active" href="index.html">Home Main Version</a>
              </li>
              <li><a href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="animated-graphs.html">Animated Graphs</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
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
          <div class="item active">
            <img class="img-responsive" src="images/slider/2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span>Why you are waiting</span>
                            </h3>
                            <b><br><br>
                            <form action="course.php" method="GET">
                            <input type="text" data-provide="typeahead" name="search_bar" id="search_bar" class="typeahead form-control se"   placeholder="Search" />
                          
                            <input type="radio" name="type" value="courses" onclick="javascript: submit()" autocomplete="off">Courses
                        

                            <input type="radio" name="type" id="content" onclick="javascript: submit()" autocomplete="off">Content
                     

                          </form>
               <div class="">
                  <!--<a class="animated4 slider btn btn-system btn-large btn-min-block" href="search.php">Courses</a>
                  <a class="animated4 slider btn btn-default btn-min-block" href="#">Content</a>-->
                  
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
        <div class="row sidebar-page">

          <!-- Page Content -->
          <div class="col-md-9 page-content">

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
         <label class="checkbox-inline"><input type="checkbox" value="">Add to compare</label>

         </div>
         
    
 
    
    </div>
     </form>
              </div>
            </div>

            <div class="portfolio-item item">
              
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Rating" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa "><div class="star-ratings-css">
  <div class="star-ratings-css-top" style="width: 54%"><span>★</span><span>★</span><span>★</span><span>★</span><span></span></div>
 
</div></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
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
                    <img alt="" src="images/portfolio-1/3.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
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
                    <img alt="" src="images/portfolio-1/4.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Website</span>
                    <span>Ilustration</span>
                  </a>
                </div>
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
                        <span>Modern</span>
                        <span>Clean</span>
                        <span>Awesome</span>
                        <span>Cool</span>
                        <span>Great</span>
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
    <footer>
      <div class="container">
        <div class="row footer-widgets">


          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget twitter-widget">
              <h4>Twitter Feed<span class="head-line"></span></h4>
              <ul>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget flickr-widget">
              <h4>Flicker Feed<span class="head-line"></span></h4>
              <ul class="flickr-list">
                <li>
                  <a href="images/flickr-01.jpg" class="lightbox">
                    <img alt="" src="images/flickr-01.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-02.jpg" class="lightbox">
                    <img alt="" src="images/flickr-02.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-03.jpg" class="lightbox">
                    <img alt="" src="images/flickr-03.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-04.jpg" class="lightbox">
                    <img alt="" src="images/flickr-04.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-05.jpg" class="lightbox">
                    <img alt="" src="images/flickr-05.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-06.jpg" class="lightbox">
                    <img alt="" src="images/flickr-06.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-07.jpg" class="lightbox">
                    <img alt="" src="images/flickr-07.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-08.jpg" class="lightbox">
                    <img alt="" src="images/flickr-08.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-09.jpg" class="lightbox">
                    <img alt="" src="images/flickr-09.jpg">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2014 Margo - All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a>
                </li>
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


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