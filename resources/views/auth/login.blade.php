@extends('user.layout')
@section('title_name')
    Login-Page
@endsection
@section('content')
    <div class="container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <div class="form-group mt-5">
                            <label>Email</label>
                            <input class="block mt-1 w-full form-control" type="email" name="email"
                                placeholder="Enter Your Email">
                        </div>


                        <div class="form-group mt-4">
                            <label>Password</label>
                            <input class="block mt-1 w-full form-control" type="password" name="password"
                                placeholder="Enter Your Password">
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-3">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>


                        <div class="flex items-center justify-end mt-3 mb-5">
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            <button type="rsest" name="reset" class="btn btn-danger">Reset</button>

                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 fw-bolder rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mx-3"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
