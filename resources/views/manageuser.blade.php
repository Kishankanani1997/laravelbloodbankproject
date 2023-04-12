@extends('user.layout')
@section('title_name')
Manager-User Page
@endsection
@section('content')

<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage-User</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


    
    <div class="container bg-white mt-5">
        <div class="row">
            <div class="col-md-12">

                <!--here we pass flash data message-->
                @if(Session('deles'))
                    <div class="alert alert-success alert-dismissible mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span class="text-dark">{{ session('deles')}}</span>
                    </div>
                @endif


            <div class="mt-5 mb-5 table table-responsive">
            <table class="mt-5" id="example" style="width:100%">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
            @foreach($data as $row)
                    
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->subject}}</td>
                    <td>{{$row->message}}</td>
                    <td><a href='{{ URL("/delete/".$row->id)}}' onclick="return confirm('Are You Sure You Want to Delete The Mail?')"><i class="bi bi-trash text-danger fw-bolder fs-3"></i></a></td>
                </tr>
            @endforeach
                </tbody>
            </table>
        </div>

            </div>
        </div>    
    </div>
</div>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
@endsection
