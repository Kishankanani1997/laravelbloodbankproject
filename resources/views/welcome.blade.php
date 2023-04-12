
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
</div>

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
    <nav class="navbar navbar-expand-lg sticky-top p-1"> 
    <!--LOGO START-->
    <a href=""><img src="{{ asset('assets/images/extra/blood1.png')}}" class="drop-logo" style="width: 70px; height: 66px;"></a>  
    <ul class="navbar-header navlogo">
      <!--COLLAPSIBLE BUTTON-->
      <button type="button" class="navbar-toggler  btn-sm btn-black" data-bs-toggle="collapse" data-bs-target="#NavbarToggle">
      <i class="bi bi-grid"></i>
      </button>
    
      <div class="collapse navbar-collapse" id="NavbarToggle">
       <ul class="navbar-link nav-image hide-xs">

        <li><a href="/"><b>HOME</b></a></li>
        <li><a href="/Our-Facility"><b>FACILITY</b></a></li>
        <li><a href="/FindBlood-Bank"><b>FIND BLOOD BANK</b></a></li>

        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif

          <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href=""><b>ACCOUNT</b></a>
            <ul class="dropdown-menu text-white" style="min-width:260px">
              <li><a href="/Register-Here">REGISTER <i class="bi bi-person-badge text-dark"></i></a></li>
              <li><a href="/Login-Here">LOGIN <i class="bi bi-person-badge text-dark"></i></a></li>             
              <li><a href="/Manage-Donor">MANAGE DONOR<i class="bi bi-person-badge text-dark"></i></a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href=""><b>MORE</b></a>
            <ul class="dropdown-menu text-white" style="min-width:265px">
              <li><a href="About-Us">ABOUT US <i class="bi bi-info-circle text-dark"></i></a></li>
              <li><a href="Contact-Us">CONTACT US <i class="bi bi-telephone text-dark"></i></a></li>
              <li><a href="Donate-Blood">FIND A DONOR <i class="bi bi-droplet-half text-dark"></i></a></li>
              <li><a href="Request-Blood">REQUEST BLOOD <i class="bi bi-journal-bookmark text-dark"></i></a></li>
            </ul>
          </li>        
      </ul> <!--navbar link-->
    </ul> <!--navlogo-->
  </nav>
  </div>
<!--NAVBAR END-->

@yield('content')

<!--FOOTER START-->
<div class="container-fluid mt-2 footer">
  <div class="row">
    <div class="col-md-8">
      <div class="row">

        <div class="col-md-3 ftstyle">
          <ul class="nav">
            <li class="nav-item mt-3">
              <h5><a class="nav-link text-white" href="#">Quick Links</a></h5>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Find Blood Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Locate Donors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Gallery</a>
            </li>
          </ul>
        </div>

        <div class="col-md-3">
        <ul class="nav">
            <li class="nav-item mt-3">
              <h5><a class="nav-link text-white" href="#">Get Engaged</a></h5>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">As a Donor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Organize Blood Drive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Donate to Trust</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Donate to Patient</a>
            </li>
          </ul>
        </div>

        <div class="col-md-6">
          <ul class="nav">
              <li class="nav-item mt-3">
                <h5><a class="nav-link text-white mx-5" href="#">Download Mobile App</a></h5>
              </li>
          </ul>
            <img class="footer-image1 mt-1" src="{{ asset('assets/images/footer/google play.webp')}}" style="width: 38%; height: 60px;">
            <img class="footer-image2 mt-1" src="{{ asset('assets/images/footer/apple play.png')}}" style="width: 38%; height: 60px;">
            <img class="footer-image3 mt-4" src="{{ asset('assets/images/footer/windows store.png')}}" style="width: 38%; height: 60px;">
            <img class="footer-image4 mt-4" src="{{ asset('assets/images/footer/blackberry1.jpg')}}" style="width: 38%; height: 60px;">
        </div>
      </div>
     </div>

          <div class="col-md-4 text-white float-end">
          <ul class="nav">
              <li class="nav-item mt-3">
                <h5><a class="nav-link text-white" href="#">Get in Touch</a></h5>
              </li>
          </ul>
             <p class="footer-text mt-0">National Blood Transfer Council <br>
              9th Floor, Chanderlok Building <br>
              36-Janpath, New Delhi - 110001, India. <br>
              Ph.no: 011-43509999, 011-34561234 <br>
              Fax.no: 011-23732345 <br>
              Email: nbtc@gmail.com
             </p> 
          </div>
          
          <div class="row">
            <div class="col-md-12 text-center text-white p-3 mt-4">
              <h6>Terms and Conditions  |  Terms of Use  |  Privacy Policy  |  Hyperlinking Policy  |  Disclaimer  |  Sitemap</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 text-center mt-3 mb-2 p-1">
              <h6 class="text-white"> Copyright: Kishan Kanani <i class="bi bi-c-circle text-white bi-lg"></i> 2023 All Rights Reserved.</h6>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--FOOTER END-->
</body>
</html>