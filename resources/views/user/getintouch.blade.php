@extends('user.master')
@section('title_name')
Getin-Touch Page
@endsection
@section('content')

<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Request Blood</li>
                </ol>
            </nav>
            <center>
                <h4 class="mt-2">
                <b><i class="bi bi-envelope text-primary"></i> Get in Touch With Us <i class="bi bi-envelope text-primary"></i></b>
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
                @if(Session('bloodsucc'))
                    <div class="alert alert-success col-md-6 mx-auto mt-5 alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span class="text-dark">{{ session('bloodsucc')}}</span>
                    </div>
                @endif
            
            <form method="post" enctype="multipart/form-data">
                @csrf
        
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
        
                            <div class="form-group mt-5">
                                <label>Name</label>
                                <input class="block mt-1 w-full form-control" type="text" name="name"
                                    placeholder="Enter Your Name">
                            </div>
        
                            <div class="form-group mt-3">
                                <label>Number</label>
                                <input class="block mt-1 w-full form-control" type="text" name="number"
                                    placeholder="Enter Your Number">
                            </div>
        
                            <div class="form-group mt-3">
                                <label>Email</label>
                                <input class="block mt-1 w-full form-control" type="email" name="email"
                                    placeholder="Enter Your Email">
                            </div>

                            <div class="form-group mt-3">
                                <label>Subject</label>
                                <input class="block mt-1 w-full form-control" type="text" name="subject"
                                    placeholder="Enter Your Subject">
                            </div>

                            <div class="form-group mt-3">
                                <label>Message</label>
                                <textarea name="message" class="form-control" type="text" placeholder="Enter Your Message"></textarea>
                            </div>

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