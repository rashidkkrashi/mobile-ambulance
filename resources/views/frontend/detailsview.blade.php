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
    .card{
        margin-top: 68px;
    }
    body{
        background: url('/images/ambu2.jpg');
        /* background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover; */
        
       
    }
    .home
    {
        margin-top:115px ;
        margin-left:150px ;
    }
    
    h2,h1{
        text-align: center;
        text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- <div class="container-fluid"> -->

<div class="container">
  <div class="row">
    <div class="col-md-4"> </div>
        <div class="col-md-4">
          
            <div class="card">
                <div class="card-header bg-info text-white">
                    <div class="card-text">
                        <h1>Ambulance</h1>
                        <h2> Details</h2></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="id">ID</label><br>
                            <label for="name">Name</label><br>
                            <label for="number">Number</label><br>
                            <label for="contact">Contact Number</label><br>
                            <label for="place">Place</label><br>
                        </div>
                        @foreach($dataview as $value)
                        <div class="col-sm-6">
                            <label for="id1">{{$value->id}}</label><br>
                            <label for="name1">{{$value->name}}</label><br>
                            <label for="number1">{{$value->number}}</label><br>
                            <label for="contact1">{{$value->phone}}</label><br>
                            <label for="place1">{{$value->place}}</label><br>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
               

</div> 
<a href="/home" class="btn btn-info text-white home">Home</a>
        </div>
    </div>
    <div class="col-md-4"></div>

  </div>


</body>
</html>