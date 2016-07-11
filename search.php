<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">


<head>

  <!-- Basic -->
  <title>Margo | Home</title>

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
  <link rel="stylesheet" type="text/css" href="css/cssd.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
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
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type="text/javascript">
  $.fn.stars = function() {
    return this.each(function(i,e){$(e).html($('<span/>').width($(e).text()*16));});
};



$('.stars').stars();
  </script>

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      

      <!-- Start Header ( Logo & Naviagtion ) -->
    <?php
    include"header.php"
    ?>
    <!-- End Header -->
    <br>
    <br>


<form action="search.php" method="get">
<ul class="container-fluid">
        
          <li class="col-md-3">
          <select class="form-control dropdown-toggle" data-toggle="dropdown" name="select_category">
         
           <option value="category">Select Category</option>
                        
                       
                    </select>
        </li>
   <li class="col-md-3">
          <select class="form-control dropdown-toggle" data-toggle="dropdown" name="select_course">
        
              <option value="course">Select Course</option>
                          
                      
                    </select>

   
        </li>
            <li class="col-sm-3">
            <select class="form-control dropdown-toggle"  name="select_subject">
          
           <option value="subjects">Select Subjects</option>
            
            </select> 
          
       
  </li>
         
<li class="col-md-3">
              <button type="submit" name="filter" class="btn form-control btn-primary" >Filter Results</button>
            </li>

       
    </ul>
</form>
 

   
       
    <!-- Start HomePage Slider -->

   
      <!-- Carousel -->
     
    <!-- Start Content -->
    <div id="content">
      <div class="container-fluid">

        <!-- Start Services Icons -->
        <div class="row">

          <!-- Start Service Icon 1 -->
        
   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
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

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal"><span class="rating-static rating-30"></span></a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

   <form method="GET">
                           
      <div class="col-md-3 photo-grid " style="float:left">
              
            <div class="well well-sm">
             <figure>
       <img class="img" alt="PDF" src="uiui">
       <figcaption id="hide"> <p> <a href="#" data-toggle="modal" data-target="#myModal">Preview</a></p></figcaption>    
      </figure>
           <a href="" target="_blank">
            <h4><small>This is a sample title</small></h4>
           </a>
         <br>
         <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> University/website</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Money</i></li>
         <hr>         
         </ul>
          <ul style="list-style: none;align:center" class="container-fluid">
         
         
         <li class="col-md-12"><i class="fa fa-eye pull-left" aria-hidden="true"> Date</i></li>
         <hr>         
         </ul>

         </div>
         
    
 
    
    </div>
     </form>

          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
         
          <!-- End Service Icon 4 -->

        </div>
        <!-- End Services Icons -->

        <!-- Divider -->
        <div class="hr1 margin-top"></div>

       
        <div class="hr1 margin-60"></div>

        </div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>



    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>