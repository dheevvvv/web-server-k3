<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Incident</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background: rgb(219, 226, 226); 
      }
      .row{
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px gray;
        font-family: 'Poppins', sans-serif;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      
    </style>
  </head>
  <body>
    
    <section class="form my-4 mx-5">

        <div class="container">
          <div class="row g-0">
            <div class="col-lg-5">
              <img src="img/eincidentpng.png" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-7 px-5 pt-5">
              @if(session()->has('pesanberhasildaftar'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('pesanberhasildaftar') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @if(session()->has('logingagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('logingagal') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <h1><img src="img/logo.png" alt=""></h1>
              <h4 class="fw-bold py-3 " style="color: #1178B3">Masuk</h4>
              <form action="/login" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-lg-7">
                    <input type="email" name="email" placeholder="Email" class="form-control my-3 p-2 @error('email') is-invalid @enderror"   value="{{ old('email') }}">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
        
                      </div>
                    @enderror
                  </div>
        
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <input type="password" name="password" placeholder="Kata Sandi" class="form-control my-3 p-2  @error('password') is-invalid @enderror"   value="{{ old('password') }}">
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
        
                      </div>
                    @enderror
                  </div>
                </div>
        

                <div class="form-row">
                  <div class="col-lg-7">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </div>
                <br>
                <small>Belum punya akun? <a href="/register" class="fw-bold" style="color: #9095A3;">Daftar</a></small>

              </form>
            </div>

          </div>

        </div>

    </section>
    

    













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>