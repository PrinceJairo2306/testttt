<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <body>
    <div class="main-container">
      {{-- header --}}
        <div class="top-header p-4 p-md-3 bg-dark text-white d-flex justify-content-between justify-content-md-start">
            <img src="{{ asset('images/day1-logo-white.png') }}" style="max-width: 50px" alt="Logo Image">
            <p class="my-auto"> Lorem ipsum dolor sit.</p>
        </div>
        {{-- logo --}}
        <div class="d-md-none text-center p-5">
          <div class="">
            <img src="{{ asset('images/day1-logo.png') }}" style="max-width: 72px" alt="Logo Image">
          </div>
        </div>
        <div class="inner-container container d-flex justify-content-between p-md-5">
            <div class="col-md-6 d-none d-sm-block">
              <div class="text-center">
                <img src="{{ asset('images/day1-logo.png') }}" style="max-width: 500px" alt="Logo Image">
              </div>
            </div>
            {{-- form --}}
            <div class="col-12 col-md-6 p-4 my-auto">
                <div class="login-container card p-4 py-md-5">
                    <form action="{{ url('login') }}" class="form margin-bottom-40" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                          <input type="text" name="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"  required>
                        </div>
                        <div class="form-group mb-3">
                          <input type="password" name="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password"  autocomplete="new-password" required>
                        </div>
                        <button type="submit" class="btn btn-dark col-12 rounded-0">Login</button>
                      </form>
                </div>
            </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

