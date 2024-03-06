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
          <div class="bg-img">
             <div class="content">
                <header>Login Form</header>
                <form action="#">
                    <div class="field">
                        <span class="fa fa-user"></span>
                        <input type="text" required placeholder="Username">
                    </div>
                    <div class="field">
                        <span class="fa fa-user"></span>
                        <input type="text" required placeholder="Nama">
                    </div>
                    <div class="field">
                        <span class="fa fa-user"></span>
                        <input type="text" required placeholder="Email">
                    </div>
                   <div class="field">
                      <span class="fa fa-user"></span>
                      <input type="text" required placeholder="Phone">
                   </div>
                   <div class="field space">
                      <span class="fa fa-lock"></span>
                      <input type="password" class="pass-key" required placeholder="Password">
                      <span class="show">SHOW</span>
                   </div>
                   <div class="pass">
                      <a href="#">Forgot Password?</a>
                   </div>
                   <div class="field">
                      <input type="submit" value="LOGIN">
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
                   Do you have account?
                   <a href="{{ url('login') }}">Signup Now</a>
                </div>
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
              }else{
                pass_field.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#222";
              }
             });
          </script>
            </div>
        </div>
</body>

</html>