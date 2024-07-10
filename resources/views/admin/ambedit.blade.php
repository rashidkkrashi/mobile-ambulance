

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
    body{
        background-color:lightgrey ;
        background-size:cover;
        background-image: url('/images/ambb1.jpeg');
        }
        *{
            box-sizing:border-box;
        }
        input[type=text],
        select,textarea{
            width:87%;
            padding:12px;
            border:none;
            box-shadow:10px 5px 5px white;
            border-radius:8px;
            background-color:lightskyblue;
          
        }
        input[type=password],
        select,textarea{
            width:67%;
            padding:12px;
            border:none;
            border-radius:8px;
            box-shadow:10px 5px 5px lightgrey;
            background-color:#C1E3FF;
        }
        input[type=username],
        select,textarea{
            border-radius:8px;
            border:none;
            width:87%;
            background-color:#C1E3FF;
            box-shadow:10px 5px 5px lightgrey;
            padding:10px;
        }
        label{
            padding:12px 12px 12px 0;
            display:inline-block;
            color:black;
            
         }
        input[type=submit]{
            background-color:#009FC2;
            color:black;
            padding:20px 20px;
            padding-top:10px;
            width:200px;
            border-radius:20px;
            height:10px;
            border:none;
            float:left;
            cursor:pointer;
            margin-top:30px;
            margin-left:150px;
        }
        
        .form{
            color:blue;
            text-align:center;
            margin-bottom:60px;
            text-decoration:none;
            length:100%;
        }
        a
        {
          background-color:#009FC2;
            color:black;
            padding:20px 20px;
            padding-top:10px;
            width:110px;
            border-radius:20px;
            height:10px;
            border:none;
            float:left;
            cursor:pointer;
            margin-top:10px;
            margin-left:320px;
        }
        </style>
     
</head>
<body>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Edit Ambulance</h3>
              </div></div>

              @foreach($result as $value)
                <form action="/ambeditAction/{{$value->id}}" method="post">
                 @csrf
                
                 <!-- <table>
       
                 <tr> -->
                 <div class="form-group">
                 <label for="name">Name</label></td>
                  <input type="text" id="name" name="name" value="{{$value->name}}" class="form-control">
                  </div> 
                  <div class="form-group">
                  <label for="number">Number</label>
                  <input type="text" id="number" name="number" value="{{$value->number}}" class="form-control">
                  </div>
                 
                  <div class="form-group">
                  <label for="place">Place</label>
                  <input type="text" id="place" name="place" value="{{$value->place}}" class="form-control"> 
                  </div>
                  
                  <div class="form-group">
                  <label for="name">Driver Name</label>
                  <input type="text" id="name" name="name" value="{{$value->name}}" class="form-control"> 
                  </div>

                  <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" value="{{$value->phone}}" class="form-control"> 
                  </div>
                

                <tr>
                 <td></td>
                 <td ><input type="submit" name="upload" value="EDIT"></td>
                </tr>
        
               </table>
             </form>   
             @endforeach

             </div>
          </div>
        </div>
     
</section>  
    </div>
</body>
</html> 
              
        
        