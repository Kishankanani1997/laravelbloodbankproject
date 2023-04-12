<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>National Blood Transfer Council | @yield('title_name') </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--CSS FILE START-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('assets/css/style.css')}}">
    <link rel="icon" type="text/icon" href="{{ asset('assets/images/favicon-icon/icon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--data table css file-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!--JS FILE START-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrit3y="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  

    <!--data table js file-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <!--HEADER FILE START-->  
    <div class="container-fluid p-1 text-danger bg-white header">
     <div class="row">

      <div class="col-md-4 mt-2">
        <b><h6 class="header-cont">GOVERNMENT OF INDIA</h6></b>
      </div>  

      <div class="col-md-4 mt-2">
        <b><h6 class="header-content">MINISTRY OF HEALTH AND FAMILY WELFARE</h6></b>
      </div>
    
      <div class="col-md-4 mt-2">
        <b><h6 class="float-right">FOLLOW ON : <i class="bi bi-facebook text-primary"></i> <i class="bi bi-instagram"></i> <i class="bi bi-twitter text-secondary"></i> <i class="bi bi-pinterest text-danger"></i></h6></b>
      </div>

     </div>   
    </div>
    <!--HEADER FILE CLOSE-->  
    

    <!--HEADER-1 FILE START-->  
    <div class="container-fluid p-1 bg-white">
        <h2 class="text-danger header-main ">NATIONAL BLOOD TRANSFER COUNCIL <img class="header-image" src="{{ asset('assets/images/extra/ministry.png')}}"> <img class="header-image2" src="{{ asset('assets/images/extra/naco.png')}}"> </h2>
    </div>
    <!--HEADER-1 FILE CLOSE-->  

    <!--NAVBAR START-->
    <nav class="navbar navbar-expand-lg sticky-top"> 
    
    <h2 class="mx-auto text-white fw-bolder">Admin Page</h2>

    {{-- <ul class="navbar-header navlogo">
      <!--COLLAPSIBLE BUTTON-->
      <button type="button" class="navbar-toggler  btn-sm btn-black" data-bs-toggle="collapse" data-bs-target="#NavbarToggle">
      <i class="bi bi-grid"></i>
      </button>
    
      <div class="collapse navbar-collapse" id="NavbarToggle">
       <ul class="navbar-link nav-image hide-xs">

               
      </ul> <!--navbar link-->
    </ul> <!--navlogo--> --}}
  </nav>
<!--NAVBAR END-->
  

  @yield('content')


</body>
</html>