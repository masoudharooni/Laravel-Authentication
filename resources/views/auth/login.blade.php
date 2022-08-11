@extends('layouts.auth.master')

@section('title')
    Login Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">
                <h4>Login</h4>
                <hr>
                @extends('layouts.errors.message')
                <form action="{{ route('auth.loginUser') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email . . ."
                            value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter a password . . ."
                            value="{{ old('password') }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.register') }}">Register Page!</a>
                </form>
            </div>
        </div>
    </div>
@endsection
