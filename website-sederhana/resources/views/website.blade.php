<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website IT</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-lg fixed-top">
            <div class="container">
              <a class="navbar-brand fw-bold" href="#home">IT Support</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="#home" onclick="changeActive(this)">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about" onclick="changeActive(this)">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service" onclick="changeActive(this)">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#portfolio" onclick="changeActive(this)">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#staf" onclick="changeActive(this)">Staf</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact" onclick="changeActive(this)">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    {{-- Home --}}
        <div class="container-fluid home">
            <div class="container-banner text-center">
                <h1>Welcome to Website IT Support</h1>
                <h1>Hallo!</h1>
                <a href="#home" id="#home">
                    <button class="btn btn-primary btn-lg text-white" type="button">Detail</button>
                </a>
            </div>
        </div>
    
    {{-- About --}}
    <div class="container-fluid about pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="about">About</h2>
        <img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" alt="Logo">
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo accusamus dolores quis nulla aperiam, voluptate magnam veniam nesciunt ullam! Dolorem laborum similique nobis dignissimos recusandae ex culpa laboriosam id quisquam.</p>
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
            <div class="card crop-img">
              <img src="/img/foto1.png" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://media.suara.com/pictures/480x260/2020/04/18/15789-cara-membuat-website.jpg" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://trinetprimasolusi.net/wp-content/uploads/2019/11/Management-Information-System.jpg" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://accounting.binus.ac.id/files/2019/07/KSInformationSystem-1515206840.jpg" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://i0.wp.com/quipperhome.wpcomstaging.com/wp-content/uploads/2019/04/45a18-template-image-blog-white-4.png?resize=800%2C533" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img src="https://duta-training.com/wp-content/uploads/2021/07/Manfaat-Teknologi-Omnichannel-untuk-Mengoptimalkan-Bisnis-Ritel-Online-scaled.jpg" class="card-img-top" width="200" height="200" alt="Logo">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, culpa..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Staf --}}
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staf">Staf</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ducimus molestiae autem, sequi nulla nobis amet ad. Tempora, praesentium repudiandae?</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg" alt="Logo" class="rounded-circle mb-3">
            <h4><a href="/portfolio" class="text-decoration-none nama">Jonh Smith</a></h4>
            <p>Web Design</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-twitter"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-facebook"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-linkedin-in"></i></i></a>
            </p>
          </div>

          <div class="col-md-4 text-center tim">
            <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Logo" class="rounded-circle mb-3">
            <h4><a href="/portfolio" class="text-decoration-none nama">Donald Smith</a></h4>
            <p>Programming</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-twitter"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-facebook"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-linkedin-in"></i></i></a>
            </p>
          </div>

          <div class="col-md-4 text-center tim">
            <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png" alt="Logo" class="rounded-circle mb-3">
            <h4><a href="/portfolio" class="text-decoration-none nama">Brian Smith</a></h4>
            <p>IT Support</p>
            <p>
              <a href="" class="social"><i class="fa-brands fa-twitter"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-facebook"></i></i></a>
              <a href="" class="social"><i class="fa-brands fa-linkedin-in"></i></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    {{-- Client --}}
    <div class="container-fluid pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img src="https://i.pinimg.com/564x/91/92/1c/91921cec4f8a8cbe3d09e596e0659d81.jpg" width="200" alt="Logo">
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/564x/91/92/1c/91921cec4f8a8cbe3d09e596e0659d81.jpg" width="200" alt="Logo">
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/564x/60/41/99/604199df880fb029291ddd7c382e828b.jpg" width="200" alt="Logo">
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/564x/60/41/99/604199df880fb029291ddd7c382e828b.jpg" width="200" alt="Logo">
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/564x/60/41/99/604199df880fb029291ddd7c382e828b.jpg" width="200" alt="Logo">
          </div>
        </div>
      </div>
    </div>

    {{-- Contact --}}
    <div class="container-fluid pt-5 pb-5 bg-light contact">
      <div class="container">
        <h2 class="display-3 text-center" id="contact">Contact Us</h2>
        <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, reprehenderit?</p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Name">
            <input type="email" class="form-control form-control-lg mb-3" placeholder="Email">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Number Phone">
            <input type="text" class="form-control form-control-lg" placeholder="Question ?">
          </div>
          <div class="col-md-6">
            <textarea name="question" class="form-control form-control-lg" id="question" rows="8"></textarea>
          </div>
        </div>
        <div class="col-md-3 mt-3 mx-auto text-center">
          <button class="btn btn-primary btn-lg">Kirim</button>
        </div>
      </div>
    </div>

    <div class="container text-center pt-5 pb-5">
      All Copyright &copy; 2023
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3bf8feb25e.js" crossorigin="anonymous"></script>

    <script src="/js/style.js"></script>
</body>
</html>