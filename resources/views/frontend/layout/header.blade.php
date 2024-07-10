<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>

    <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     

     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 -->

     <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{url('/css/animate.css')}}">
     <link rel="stylesheet" href="{{url('/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{url('/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{url('/css/tooplate-style.css')}}">

    <style>
     .containerpro
     {
          float: right;
     }

    
    

    </style> 
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <!-- <li><a href="/userlogin" class="smoothScroll" id="log">login</a></li> -->
                         <a href="#demo" class="btn btn-primary" data-toggle="collapse">Login</a>


                    </ul>                   
                         <!-- <a href="/userlogin" class="btn btn-primary">User Login</a> -->
                          
               </div>
             

          </div>
     </section>


     <!-- collapse -->
     <div class="container pro">
  <!-- <a href="#demo" class="btn btn-primary" data-toggle="collapse">Login</a> -->
  <div id="demo" class="collapse" style="float:right">
  <form action="/userloginAction" method="post">
    @csrf
    <div class="form">
     
    <h2>USER LOGIN</h2>
    </div>
<div class="row">
    <div class="col-1">
        <label for="username">Username</label>
   </div>
    <div class="col-2">
        <input type="username" id="username" name="username" required>
   </div>
</div>
<div class="row">
    <div class="col-1">
        <label for="password">Password</label>
    </div>
    <div class="col-2">
        <input type="password" id="password" name="password" required>
</div>
</div>
<div class="row">
<div class="col-1">
<input type="submit" id="login" name="login"> <a href="/userreg">Register Now?</a>
</div>   
</div>
</form>
     </div>
</div>
@if(session('error'))
<p style="color:blue">
{{session('error')}}
</p>
@endif

<!-- collapse -end -->

 
  <!-- HOME -->
  <!-- <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Your Health Benefits</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section> -->


<!-- carousel -->

     <!-- <div id="demo" class="carousel slide" data-ride="carousel"> -->

  <!-- Indicators -->
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  
  <!-- The slideshow -->
  <!-- <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/slider1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/images/slider2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/images/slider3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
   -->
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->