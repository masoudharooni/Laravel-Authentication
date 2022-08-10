@extends('layouts.auth.master')

@section('title')
    Register Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">
                <h4>Register</h4>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your Full Name . . .">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email . . .">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter a password . . .">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="{{ route('auth.login') }}">Login Page!</a>
                </form>
            </div>
        </div>
    </div>
@endsection
