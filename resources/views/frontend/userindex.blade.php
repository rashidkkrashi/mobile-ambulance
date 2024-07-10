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
        margin-top:250px;
        margin-left:300px;
        margin-right:300px;
        margin-bottom:250px;

    }
    body{
        background-color:lightgrey ;
        background-size:cover;
        background-image: url('/images/ambb1.jpeg');
        }
       
        input[type=text],
        select,textarea{
            width:40%;
            padding:12px;
            border:none;
            box-shadow:10px 5px 5px lightgrey;
            border-radius:8px;
            background-color::lightgray;
            
        }
       .col-md-3
       {
        background-color: white;
        height: 700px;
        opacity: 0.6;
       
       }

       .design{
        margin-top: 150px;
        
       }
    
  </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">
         
          <div class="col-md-3">
           <center><a href="#profile"  data-toggle="collapse" class="btn btn-primary text-white design"><b>Profile</b></a><br><br>
           <a href="#search"  data-toggle="collapse" class="btn btn-primary text-white design"><b>Search</b></a><br><br>
           <a href="/userlogout" class="btn btn-primary text-white design"><b>Logout</b></a>  </center> 

           </div> 
          

        <div class="col-md-9">
         <div class="container">
            <div id="profile" class="collapse" data-target="_self">
              @foreach ($profileview as $value)
              
             
             <form action="/userprofileAction/{{$value->id}}" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$value->name}}">
                </div>

                <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" class="form-control" value="{{$value->age}}">
                </div>

                <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" class="form-control" value="{{$value->place}}">
                </div>

                <div class="form-group">
                <label for="purpose">Purpose:</label>
                <input type="text" id="purpose" name="purpose" class="form-control" value="{{$value->purpose}}">
                </div>

                <div class="form-group">
                <label for="hospital">hospital:</label>
                <input type="text" id="hospital" name="hospital" class="form-control" value="{{$value->hospital}}">
                </div>

                <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{$value->phone}}">
                </div>
                
                <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" class="form-control" value="{{$value->address}}">
                </div>

                <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" value="{{$value->username}}">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" value="{{$value->password}}">
                </div>
             </form>
             @endforeach
            </div>
          </div>


        <div class="container">
        <div id="search" class="collapse" data-target="_self">
            <div class="row">
                <div class="card w-75">
                <div class="card-header">
                <div class="card-text">Search ambulance here...</div>
                </div>
                <div class="card-body">
                    
                    <!-- <a href="/ambulancedata" class="btn btn-success">Search</a> -->
                    <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Search
    </button>
    <div class="dropdown-menu">
        @foreach($place as $value)
      <a class="dropdown-item" href="/detailsview/{{$value->id}}">{{$value->place}}</a>
       @endforeach
    </div>
  </div>
</div>
                </div>
                </div>

            </div>
        </div>

        </div>

    </div>
           
</div>
    
</body>
</html>