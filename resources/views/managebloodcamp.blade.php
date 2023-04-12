@extends('user.master')
@section('title_name')
Manager-Bloodcamp Page
@endsection
@section('content')

<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage-BloodCamp</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


    
    <div class="container bg-white mt-5">
        <div class="row">
            <div class="col-md-12">

            <div class="mt-5 mb-5 table table-responsive">
            <table class="mt-5" id="example" style="width:100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Camp Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Contact</th>
                    <th>Conducted By</th>
                    <th>Organized By</th>
                </tr>
                </thead>
                <tbody>

            @foreach($data as $row)  
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->cname}}</td>
                    <td>{{$row->cdate}}</td>
                    <td>{{$row->ctime}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->statename}}</td>
                    <td>{{$row->cityname}}</td>
                    <td>{{$row->number}}</td>
                    <td>{{$row->conductedby}}</td>
                    <td>{{$row->organizedby}}</td>
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
