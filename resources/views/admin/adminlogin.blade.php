<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
    body{
        background-color:lightgrey ;
        background-size:cover;
        background-image: url('/images/ambb1.jpeg');
        }
        *{
            box-sizing:border-box;
            text-align: center;
        }
        input[type=text],
        select,textarea{
            width:100%;
            padding:12px;
            border:none;
            box-shadow:10px 5px 5px lightgrey;
            border-radius:8px;
            background-color::lightgray;
            
        }
        input[type=password],
        select,textarea{
            width:50%;
            padding:12px;
            border:none;
            border-radius:8px;
            box-shadow:10px 5px 5px lightgrey;
            background-color:lightskyblue;
            
        
        }
        input[type=username],
        select,textarea{
            border-radius:8px;
            border:none;
            width:50%;
            background-color:lightskyblue;
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
            margin-top:40px;
            margin-left:665px;
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


 <div class="container">
    <form action="/adminloginAction" method="post">
        @csrf
    
            <div class="form">
            <h2>LOGIN PAGE</h2>
            </div>
        <div class="row">
            <div class="col-1">
                <label for="username"><b>Username</b></label>
           </div>
            <div class="col-2">
                <input type="username" id="username" name="username" required>
           </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="password"><b>Password</b></label>
            </div>
            <div class="col-2">
                <input type="password" id="password" name="password" required><br><br>
        </div>
       
        </div>
        <div class="row">
        <div class="col-1">
        <input  type="submit" id="login" name="login">
        </div>   
        </div>
    </form>

    </div>
        
@if(session('error'))
<p style="color:blue">
{{session('error')}}
</p>
@endif
</body>
</html>