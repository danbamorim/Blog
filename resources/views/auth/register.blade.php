@extends('layouts.app')

@section('content')
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: red;
        text-align: left;
        background-color: red;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .06);
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .card-header {
        color: red;
    }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if ($errors->any())
                            <div class="alert alert-danger">
                                There were some errors with your request.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>

    <form action=" "></form>
    <main class="register-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>

                        

                        <form action="{{route('register')}}" method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>
                                <div class="col-md-6"> 
                                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            @csrf
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>

                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"> Password Confirmation</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>


                                    </div>


                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>

                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>


</body>

</html>

@endsection