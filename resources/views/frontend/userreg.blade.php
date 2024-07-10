<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body
        {
            text-align: center;
            background-size: cover;
            background-image: url('/images/ambb1.jpeg');
            font-weight:bold;
        }
        *{
            box-sizing:border-box;
        }
        .jumbotron
        {
            background-color: white;
            opacity:0.7;
            width:500px;
            height:900px;
        }
    </style>
</head>
<body>
<div class="container">
   
    
            
                <h2 style="text-align:center">REGISTRATION </h2>
        


      <div class="row">
         <div class="col-md-4"></div>
             <div class="col-md-4"> 
             <div class="jumbotron">
             <form action="/userregAction" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" class="form-control">
                </div>

                <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" class="form-control">
                </div>

                <div class="form-group">
                <label for="purpose">Purpose:</label>
                <input type="text" id="purpose" name="purpose" class="form-control">
                </div>

                <div class="form-group">
                <label for="hospital">hospital:</label>
                <input type="text" id="hospital" name="hospital" class="form-control">
                </div>

                <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                
                <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" class="form-control">
                </div>

                <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
                </div>


                <input type="submit" value="REGISTER" name="submit" class="btn btn-primary">

                </form>
      </div> 
      </div>
      <div class="col-md-4"></div>
      </div>
    
    
    </div>
</div>
</body>
</html>