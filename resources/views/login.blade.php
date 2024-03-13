<<<<<<< HEAD
    <!DOCTYPE html>
    <!-- Created By CodingNepal -->
    <html lang="en" dir="ltr">
       <head>
          <meta charset="utf-8">
          <title>Transparent Login Form HTML CSS</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="{{ asset('assets/css/styles1.css') }}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       </head>
       <body>
          <div class="bg-img ">
             <div class="content">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <header>Login Form</header>
                <form action="/login" method="POST">
                    @csrf
                   <div class="field col-md-4">
                      <span class="fa fa-user"></span>
                      <input type="email" required placeholder="Email or Phone" name="email" class="form-control @error('email') is-invalid @enderror">
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                   </div>
                   <br>
                   <div class="field space">
                      <span class="fa fa-lock"></span>
                      <input type="password" class="pass-key" required placeholder="Password" name="password" autofocus>
                      <span class="show">SHOW</span>
                   </div>
                   <div class="pass">
                      <a href="#">Forgot Password?</a>
                   </div>
                   <div class="field">
                      <input type="submit" value="LOGIN">
                   </div>
                </form>

                <div class="signup">
                   Don't have account?
                   <a href="{{ url('register') }}">Signup Now</a>
                </div>
             </div>
          </div>
          <script>
             const pass_field = document.querySelector('.pass-key');
             const showBtn = document.querySelector('.show');
             showBtn.addEventListener('click', function(){
              if(pass_field.type === "password"){
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Masuk</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Email or Phone">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password">
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <a href="#">Lupa Password?</a>
                </div>
                <div class="field">
                    <input type="submit" value="MASUK">
                </div>
            </form>
            {{-- <div class="login">
                   Or login with
                </div>
                <div class="links">
                   <div class="facebook">
                      <i class="fab fa-facebook-f"><span>Facebook</span></i>
                   </div>
                   <div class="instagram">
                      <i class="fab fa-instagram"><span>Instagram</span></i>
                   </div>
                </div> --}}
            <div class="signup">
                Belum punya akun?
                <a href="{{ url('register') }}">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function() {
            if (pass_field.type === "password") {
>>>>>>> 06c3974cf18b70a678fa4fdbc705afa3cec18303
                pass_field.type = "text";
                showBtn.textContent = "HIDE";
                showBtn.style.color = "#3498db";
            } else {
                pass_field.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#222";
<<<<<<< HEAD
              }
             });
          </script>
=======
    {{-- <div class="box">
=======
            }
        });
    </script>
    =======
    <div class="box">
>>>>>>> 06c3974cf18b70a678fa4fdbc705afa3cec18303
        <div class="container">
            <div class="top-header">
                <h3 class="">Sudah punya akun?</h3>
                <h1>Daftar</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="username" name="username" class="input" id="username" placeholder="Username"
                            required autofocus>
                    </div>
                    <br>
                    <div class="input-field">
                        <input type="password" name="password" class="input" id="password" placeholder="Password"
                            required autofocus>
                    </div>
                    <br>
                    <div class="input-field">
                        <input type="submit" class="submit" value="Login">
                    </div>

                    <div class="buttom">
                        <div class="left">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                        </div>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="small" href="forgot-password">Lupa Password?</a>
                    </div>

                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="register">Need an account? Sign up!</a></div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html> --}}
