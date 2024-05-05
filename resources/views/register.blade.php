<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Daftar</header>
            <form action="/register" method="post">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="username" required placeholder="Username" name="username" id="username" value="{{old('username')}}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Nama" name="name" id="name" value="{{old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="email" required placeholder="Email" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="string" required placeholder="Phone" name="phone" id="phone" value="{{old('phone')}}">
                  @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" required placeholder="Password-max 8 char" name="password" id="password">
                  <span class="show">SHOW</span>
               </div>
               <div class="field">
                  <input type="submit" value="Daftar">
               </div>
            </form>
            <div class="signup">
                Sudah punya akun?
                <a href="{{ url('login') }}">Masuk Sekarang</a>
            </div>
        </div>
    </div>
    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function() {
            if (pass_field.type === "password") {
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if($message = Session::get('success'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
    @endif

   </body>
</html>

