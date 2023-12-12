<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/login-new.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h3 class="text-center fw-bold text-primary">Welcome To Website Biodata</h3>
                <h3 class="card-title text-center mb-3">Please Login</h3>
                <form>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                    <a href="#" class="float-end text-decoration-none">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Login</button>
                  <div class="text-center">
                    <a href="#" class="btn btn-light mt-3 google"><i class="fa-brands fa-google"></i> Login with Google</a>
                    <a href="#" class="btn btn-light mt-3 google">Register</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/3bf8feb25e.js" crossorigin="anonymous"></script>
</body>
</html>