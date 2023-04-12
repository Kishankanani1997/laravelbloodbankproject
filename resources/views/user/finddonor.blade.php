@extends('user.master')
@section('title_name')
Find-Donor Page
@endsection
@section('content')

<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Find A Donor</li>
                </ol>
            </nav>

            <center >
                <h1 class="mt-2">We Are Here To Help You</h1>
                <h3 class="mt-2">Our Organizations has partnered with other NGOs & Trust to help you reach out to more and more potential donors. Fill the below form to reach out to our partner organisations. </h3>
            </center>



        </div>
    </div>
</div>

    <div class="col-md-6 mx-auto mt-5">

           <!--here we pass flash data message for validation-->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--here we pass flash data message-->
                @if(Session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span class="text-dark">{{ session('success')}}</span>
                    </div>
                @endif

                <!--here we pass flash data message-->
                @if(Session('delesuc'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span class="text-dark">{{ session('delesuc')}}</span>
                    </div>
                @endif
 
    <form method="post" class="form-group">
       @csrf
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Your Name*" class="form-control" > <br>

            <label>Surname</label>
            <input type="text" name="surname" placeholder="Enter Your Surname*" class="form-control" ><br>

            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter Your Email*" class="form-control" ><br>

            <label>Verify Email Address</label>
            <input type="text" name="verifyemail" placeholder="Verify Your Email*" class="form-control" ><br>
           
            <label>Phone No.</label>
            <input type="text" name="phone" placeholder="Enter Your Phone*" class="form-control" ><br>

            <label>Occupation</label>
            <input type="text" name="occupation" placeholder="Enter Your Occupation*" class="form-control" ><br>

            <label>Address</label>
            <textarea type="text" name="address" placeholder="Enter Your Address*" class="form-control" ></textarea>

            <label class="mt-4"><b>Select Your Gender</b></label><br>
            <input type="radio" name="gender" value="Male">
            <label>Male</label><br>
            <input type="radio"  name="gender" value="Female">
            <label>Female</label><br>

            <label class="mt-4"><b>Select Blood Group:</b></label>
            <select name="blood" class="form-control" >
                <option value="">-Blood Group-</option>
                @foreach($data as $row)
                    <option value="{{ $row->id}}">{{$row->blood_type}}</option>
                @endforeach 
            </select> <br>

            <label><b>Select State:</b></label>
                <select name="statelist" class="form-control" >
                    <option value="">-State-</option> 
                @foreach($data1 as $row)
                    <option value="{{ $row->id}}">{{ $row->statename}}</option>
                @endforeach
            </select> 

            <!-- <label class="mt-4"><b>Select City:</b></label>
                <select name="city" class="form-control" >
                    <option value="">-City-</option> 
                </select>        -->

            <label class="mt-4"><b>Have you done a blood donation before?</b></label><br>
            <input type="radio" name="donate" value="Yes">
            <label>Yes</label><br>
            <input type="radio"  name="donate" value="No">
            <label>No</label><br>

            <label class="mt-4"><b>Have you had any disease?</b></label><br>
            <input type="radio" name="disease" value="Yes">
            <label>Yes</label><br>
            <input type="radio"  name="disease" value="No">
            <label>No</label><br>

            <label class="mt-4"><b>Do you have any allergies?</b></label><br>
            <input type="radio" name="allergy" value="Yes">
            <label>Yes</label><br>
            <input type="radio"  name="allergy" value="No">
            <label>No</label><br>

            <label class="mt-4"><b>What was the last time you donated blood?</b></label><br>
            <input type="date" class="form-control" name="date">
                
            <input type="submit" name="create" class="btn btn-success btn-md mt-4 mb-4" value="Submit">
            <input type="reset" name="reset" class="btn btn-danger btn-md mt-4 mb-4" value="Reset"> <br>
    </form>
</div>
<!--CONTENT END-->
@endsection