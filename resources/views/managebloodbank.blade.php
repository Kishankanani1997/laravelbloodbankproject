@extends('user.master')
@section('title_name')
FindBloodBank-Page
@endsection
@section('content')

<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Find Blood Bank</li>
                </ol>
            </nav>
            <center><h3 class="fw-bolder text-dark">Find Blood Banks of India</h3></center>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">

                <div class="table-responsive mt-4 mb-4">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->number}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->bbtype}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


        
        

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<!--CONTENT END-->
@endsection
