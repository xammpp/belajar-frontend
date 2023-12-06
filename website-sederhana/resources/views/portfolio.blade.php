<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- DevIcons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body class="bg-secondary">
    {{-- Card Header --}}
    <div class="container mt-5 mb-5">
        <div class="card text-center shadow mb-3">
            <div class="card-body px-4 py-4">
                <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Logo" class="rounded-circle w-50 border border-5">
                <h1 class="mb-0">Bagus Daffa Firmansyah</h1>
                <span class="fw-light d-block mb-3">Design UI/UX</span>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, possimus?</p>
            </div>
            <div class="card-footer bg-white fs-3">
                <a href="https://twitter.com/" class="text-secondary"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.facebook.com/" class="text-secondary"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/" class="text-secondary"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://web.telegram.org/" class="text-secondary"><i class="fa-brands fa-telegram"></i></a>
            </div>
        </div>
        <div class="card shadow mb-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row">
                    <div class="col-4">Email</div>
                    <div class="col-8 text-end text-muted">bagusdaffaf01@gmail.com</div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                    <div class="col-4">Whatsapp</div>
                    <div class="col-8 text-end text-muted">+62-813-3670-3009</div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                    <div class="col-4">GitHub</div>
                    <div class="col-8 text-end text-muted">https://github.com/xammpp</div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="row">
                    <div class="col-4">Country</div>
                    <div class="col-8 text-end text-muted">Indonesia</div>
                </div>
              </li>
            </ul>
        </div>

        <div class="card shadow mb-3">
            <div class="card-header bg-light fw-bold">Programming Language</div>
            <div class="card-body">
                <div class="row row-cols-5 fs-1 text-secondary text-center">
                    <div class="col"><i class="devicon-html5-plain"></i></div>
                    <div class="col"><i class="devicon-css3-plain"></i></div>             
                    <div class="col"><i class="devicon-javascript-plain"></i></div>
                    <div class="col"><i class="devicon-react-original"></i></div>
                    <div class="col"><i class="devicon-android-plain"></i></div>
                    <div class="col"><i class="devicon-php-plain"></i></div>
                    <div class="col"><i class="devicon-mysql-plain"></i></div>
                    <div class="col"><i class="devicon-bootstrap-plain"></i></div>
                    <div class="col"><i class="devicon-java-plain"></i></div>
                    <div class="col"><i class="devicon-tailwindcss-original-wordmark"></i></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-light fw-bold">Skill</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p class="mb-0">Problem Solving</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                </div>
              </li>
              <li class="list-group-item">
                <p class="mb-0">Public Speeking</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                </div>
              </li>
              <li class="list-group-item">
                <p class="mb-0">Time Management</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 85%"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="container mt-3 text-end">
            <a href="/website" class="btn btn-primary">Kembali</a>
          </div>
    </div>
    
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/3bf8feb25e.js" crossorigin="anonymous"></script>
</body>
</html>