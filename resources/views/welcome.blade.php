<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="">
	<title>Task management</title>
</head>

<body>
  <!-------- Navbar -------------> 
    <nav class="navbar nav-tabs bg-success navbar-expand-sm">
      <div class="container-fluid">
        <h1><strong><span class="text-danger ">L</span>asyl<span class="text-danger">D</span>esigns</strong></h1>
      </div>    
      <div class="col-sm-6 mr-0">
        <ul class="navbar-nav justify-content-end">
          {{-- <li class="nav-item"><a class="nav-link text-white" href="{{ url('#')}}"><strong>Home</strong> </a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('#')}}"><strong>About</strong> </a></li>
          <li class="nav-item"><a href="" class="nav-link text-white" type="submit"><strong> Logout </strong></a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/')}}"><strong>Login</strong></a></li>       --}}
        </ul>
      </div>   
    </nav>
  <!-------- End Navbar -------------> 
 
    <div class="containter">
      <div class="row">
        @yield ('home')
      </div>
    </div>
        
  <!-------- Start Footer -------------> 
    
  <!-------- End Footer -------------> 



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/b723bd9b3f.js"></script>


</body>
</html>