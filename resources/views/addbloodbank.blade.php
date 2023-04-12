@extends('user.layout')
@section('title_name')
Add Blood-Bank Page
@endsection
@section('content')

<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Blood-Bank</li>
                </ol>
            </nav>
            <center>
                <h4 class="mt-2">
                <b><i class="bi bi-droplet text-danger"></i> Add Blood Bank Here <i class="bi bi-droplet-fill text-danger"></i></b>
                </h4>
            </centre>
        </div>
    </div>
</div>
                    <!--validation message-->
                    @if ($errors->any())
                        <div class="alert alert-danger col-md-6 mx-auto mt-5 alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <!--here we pass flash data message-->
                @if(Session('bbsuccess'))
                    <div class="alert alert-success col-md-6 mx-auto mt-5 alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span class="text-dark">{{ session('bbsuccess')}}</span>
                    </div>
                @endif
            
            <form method="post" enctype="multipart/form-data">
                @csrf
        
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
        
                            <div class="form-group mt-5">
                                <label>Name</label>
                                <input class="block mt-1 w-full form-control" type="text" name="bbname"
                                    placeholder="Enter Bloodbank Name">
                            </div>

                            <div class="form-group mt-3">
                                <label>Address</label>
                                <textarea class="form-control" type="text" placeholder="Enter Bloodbank Address" name="bbaddress"></textarea>
                            </div>
        
                            <div class="form-group mt-3">
                                <label>Phone</label>
                                <input class="block mt-1 w-full form-control" type="text" name="bbnumber"
                                    placeholder="Enter Bloodbank Number">
                            </div>
        
                            <div class="form-group mt-3">
                                <label>Email</label>
                                <input class="block mt-1 w-full form-control" type="email" name="bbemail"
                                    placeholder="Enter Bloodbank Email">
                            </div>

                            <label class="mt-4"><b>Select Blood Bank Type</b></label><br>
                                <input type="radio" name="bbtype" value="Trust">
                                <label>Trust</label><br>
                                <input type="radio"  name="bbtype" value="Private">
                                <label>Private</label><br>
                                <input type="radio"  name="bbtype" value="Government">
                                <label>Government</label>
  

                            <div class="flex items-center justify-end mt-4 mb-5">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                <button type="reset" name="reset" class="btn btn-danger">Reset</button>  
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            


<!--CONTENT END-->
@endsection