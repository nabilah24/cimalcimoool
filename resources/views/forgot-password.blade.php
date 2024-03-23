
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>LUPA PASSWORD</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
    <div class="bg-img ">
        <div class="content">
            <header>LUPA PASSWORD</header>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                    </div>
                @endif --}}
            </div>
            <div class="container">
                <form method="POST" action="/forgotpassword-act">
                    @csrf
                    <div class="field col-md-4">
                        <span class="fa fa-user"></span>
                        <input type="email" required placeholder="Email Terdaftar" name="email" class="form-control @error('email') is-invalid @enderror" autofocus>
                    </div>
                    @error('email')
                        <small> {{ $message }}</small>
                    @enderror
                    <br>
                    <div class="field">
                        <input type="submit" class="submit" value="Send link">
                    </div>

                </form>

            </div>
        </div>
        <script>
            const pass_field = document.querySelector('.pass-key');
            const showBtn = document.querySelector('.show');
            showBtn.addEventListener('click', function(){
             if(pass_field.type === "password"){
               pass_field.type = "text";
               showBtn.textContent = "HIDE";
               showBtn.style.color = "#3498db";
           } else {
               pass_field.type = "password";
               showBtn.textContent = "SHOW";
               showBtn.style.color = "#222";

             }
            });
         </script>



{{-- @extends('layout.account.master')
@section('title', 'Login Page')
@section('isi') --}}
<!-- resources/views/auth/passwords/email.blade.php -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> --}}

{{-- @if (session('status'))
<div>{{ session('status') }}</div>
@endif --}}
{{-- <div class="box">
    <div class="container">
        <div class="top-header">
            <h1>Reset Password</h1>


            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>



            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="input-field">
                    <input type="email" name="email" class="input" id="email" placeholder="Email" required
                        autofocus>
                </div> --}}
                                                    {{-- <input id="email" class="input" type="email" name="email" required autofocus> --}}
                {{-- <div class="input-field">
                    <input type="submit" class="submit" value="Send Reset Link">
                </div> --}}
                                                    {{-- <button type="submit">Send Reset Link</button> --}}
            {{-- </form>
        </div>
    </div>
</div> --}}



