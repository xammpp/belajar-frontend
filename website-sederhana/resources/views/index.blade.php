<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website IT</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-lg fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Website IT</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    {{-- Home --}}
        <div class="container-fluid home">
            <div class="container-banner text-center">
                <h2>Welcome to Website IT Support</h2>
                <h1>Hallo!</h1>
                <a href="#home">
                    <button class="btn btn-primary btn-lg text-white" type="button">Detail</button>
                </a>
            </div>
        </div>
    
    {{-- About --}}
    <div class="container-fluid about pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="about">About</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo accusamus dolores quis nulla aperiam, voluptate magnam veniam nesciunt ullam! Dolorem laborum similique nobis dignissimos recusandae ex culpa laboriosam id quisquam.</p>
      </div>
    </div>
    
    {{-- Service --}}
    <div class="container-fluid service pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="service">Service</h2>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="circle"><i class="fas fa-code fa-5x"></i></span>
            <h3 class="mt-3">Programming</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, aliquam!</p>
          </div>
          <div class="col-md-4">
            <span class="circle"><i class="fas fa-wifi fa-5x"></i></span>
            <h3 class="mt-3">Networking</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, aliquam!</p>
          </div>
          <div class="col-md-4">
            <span class="circle"><i class="fas fa-palette fa-5x"></i></span>
            <h3 class="mt-3">UI/UX Design</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, aliquam!</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Portfolio --}}
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portfolio">Portfolio</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, commodi?</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card">
              <img src="/img/foto1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>