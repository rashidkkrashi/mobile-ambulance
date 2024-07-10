<!-- @extends('frontend.layout.main')  
 @section('main.container') 
  -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <style>
        body{
        background-color:lightyellow;
        background-size:cover;
        }
        *{
            box-sizing:border-box;
        }
        input[type=submit]{
            background-color:#009FC2;
            color:black;
            padding:20px 20px;
            padding-top:10px;
            width:100px;
            border-radius:20px;
            height:10px;
            border:none;
            float:left;
            cursor:pointer;
            margin-top:5px;
            margin-left:400px;

        }
        input[type=username],
        select,textarea{
            border-radius:8px;
            border:10px;
            width:30%;
            background-color:#C1E3FF;
            box-shadow:10px 5px 5px lightgrey;
            padding:10px;
           


        }
        label{
            padding:12px 12px 12px 0;
            display:inline-block;
            color:black;
            margin-left:200px;

            
        }
        input[type=password],
        select,textarea{
            width:30%;
            border:10px;
            padding:10px;
            border-radius:8px;
            box-shadow:10px 5px 5px lightgrey;
            background-color:#C1E3FF;
        }

        .col-1{
            float:left;
            width:25%;
            margin-top:5px;
            color:black;
        }
        .col-2{
            float:left;
            width:75%;
            margin-top:6px;
        }
        .row::after{
            content:"";
            display:table;
            clear: both;
        }
        .form{
            color:black;
            text-align:center;
            margin-bottom:60px;
            text-decoration:none;
            margin-right:400px;
        }
        </style> -->
</head>
<body>
<div class="container">
    <form action="/userloginAction" method="post">
    
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
        <input type="submit" id="login" name="login">
        </div>   
        </div>
    </form>
</div>
    
</body>
</html> 
































 <!-- MAKE AN APPOINTMENT -->
    <!-- <section id="appointment" data-stellar-background-ratio="">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6"> -->
                         <!-- CONTACT FORM HERE -->
                     <!-- <form id="appointment-form" role="form" method="post" action="#"> -->

                              <!-- SECTION TITLE -->
                            <!-- <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>LoGiN...</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter Your passwd">
                                   </div> 

                                  

                                  
                                  

                                
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
                    </div> -->

               <!-- </div>
          </div>
     </section>  -->
<!-- @endsection -->