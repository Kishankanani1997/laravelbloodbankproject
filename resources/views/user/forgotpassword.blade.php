@extends('user.master')
@section('title_name')
ForgotPassword-Page
@endsection
@section('Content')
<div class="row">
    <h2 style="color:black; text-align: center"; class="mt-5">Have You Forgot Password?</h2>
    <div class="col-md-4">
        <img src="{{ asset('assets/images/forgotpassword/f1.gif')}}" class="img-fluid mx-5 mb-5">
    </div> 
    <div class="col-md-6">
        <form method="post" enctype="multipart/form-data">

            <label style="margin-top:20px"> Email:</label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Your Email" required> <br> 
            
            <input type="submit" name="forgot" class="btn btn-danger btn-md mb-3" value="Submit">
        </form> 
        
        <h6 class="text-black mt-2"><b>Remember Your Login Credentials? Then</b> <a href="/Login-Here"><b>Login Here</b></a></h6>

    </div>
</div>
@endsection