@extends('user.layout')
@section('title_name')
    Register-Here Page
@endsection
@section('content')
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

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
                        <label>Password</label>
                        <input class="block mt-1 w-full form-control" type="password" name="password"
                            placeholder="Enter Your Password">
                    </div>

                    <div class="form-group mt-3">
                        <label>Confirm Password</label>
                        <input class="block mt-1 w-full form-control" type="password" name="password_confirmation"
                            placeholder="Enter Your Confirm Password">
                    </div>

                    
                    <div class="flex items-center justify-end mt-4 mb-5">

                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="rsest" name="reset" class="btn btn-danger">Reset</button>

                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
