<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QORE - Quantum Optoelectronics Research and Engineering</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
  <script>
    $(function() {
      $.scrollify({
        section : ".scroll-section",
        easing: "easeOutExpo",
        scrollSpeed: 1100,
        offset : 0,
        scrollbars: false,
        updateHash: false,
        touchScroll:true,
        before:function() {},
        after:function() {},
        afterResize:function() {},
        afterRender:function() {}
      });
    });
  </script>

</head>

<body >
  <!-- Navigation -->
  <nav class="navbar fixed-top mb-2 navbar-expand-lg navbar-dark bg-dark " >
    <div class="container">
        <a class="navbar-brand" href="#"><span class="m-2 logo-text">QORE</span> <span style="font-size:0.7em; font-weight:normal;">Quantum Optoelectronics Research and Engineering</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/login">Login</a>
                  </li>
            </ul>
        </div>
    </div>
</nav>


  <!-- Services Section -->
  <section class="page-section section services-section scroll-section" id="services" style="height: 100vh; background-image: url('images/services-bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
      <h2 class="mb-4">Our Services</h2>
      <div class="row">
        <div class="col-md-4">

          <div class="card">
            <div class="card-body">
              <i class="fas fa-microscope fa-3x mb-3"></i>
              <h4 class="card-title"><a class="underline-on-hover" href="research">Research</a>
              </h4>
              <p class="card-text">Our team of experts conducts research in the field of quantum optoelectronics to explore new technologies and develop innovative devices.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-lightbulb fa-3x mb-3"></i>
              <h4 class="card-title">Design</h4>
              <p class="card-text">We design cutting-edge optoelectronic devices using the latest technologies and techniques to meet the needs of our clients.</p>
            </div>
          </div>
        </div>
        <div class="col-md
        <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-cogs fa-3x mb-3"></i>
                <h4 class="card-title">Engineering</h4>
                <p class="card-text">We specialize in engineering optoelectronic devices and systems for a wide range of applications, from telecommunications to medical imaging.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="gradient-section portfolio-section py-5 scroll-section">
      <div class="container ">
        <h2 class="mb-1 mt-5">Our Portfolio</h2>
        <div class="row d-flex align-items-center">
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="images/portfolio-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Tactile Laser Feedback</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor magna non gravida ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor magna non gravidipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor magna non gravid vehicula.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="images/portfolio-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Subataomic Image Injection </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor magna non gravida vehicula.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="images/portfolio-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Cognitive Targeting</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. vehicula.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 pt-5 scroll-section testimonial-section gradient-section2">
      <div class="container">
        <h2 class="mb-4 mt-5">What our clients say</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"As a Pentagon official, I want to express my sincere gratitude to the team at QORE for their exceptional research work. QORE's insightful analysis and detailed reports have been instrumental in shaping our decision-making processes.

                    Their ability to provide a comprehensive understanding of complex issues has been invaluable to our operations. I have been particularly impressed by their attention to detail and commitment to accuracy, which has helped us make informed and strategic decisions.
                </p>
                <div class="mt-3">
                  <img src="img/client-1.jpg" alt="" class="img-fluid rounded-circle mr-3">
                  <span class="text-primary">John Smith</span>
                  <span> US Pentagon</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"The QORE scientists are to be commended for their groundbreaking research that has the potential to transform the way we approach complex issues. Their innovative methods and tireless dedication to discovering new solutions have pushed the boundaries of scientific knowledge and opened up exciting new avenues for exploration. With their incredible breakthroughs and cutting-edge technologies, the QORE team has demonstrated the enormous potential of science to positively impact the world and create a better future for us all. Their work is truly inspiring and a testament to the power of human ingenuity and innovation."</p>
                <div class="mt-3">
                  <img src="img/client-2.jpg" alt="" class="img-fluid rounded-circle mr-3">
                  <span class="text-primary">Jane Doe</span>
                  <span>CTO, ABC Company</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"We were very impressed with QORE's attention to detail and ability to understand our unique needs. Their customized solutions have helped us achieve our goals and improve our bottom  Their customized solutions have helped us achieve our goals and improve our bottom line."</p>
                <div class="mt-3">
                  <img src="img/client-2.jpg" alt="" class="img-fluid rounded-circle mr-3">
                  <span class="text-primary">Jane Doe</span>
                  <span>CTO, ABC Company</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 pt-5 bg-dark text-white scroll-section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2 class="mb-2 mt-5">Contact Us</h2>
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-3">
            <h2 class="mb-2 mt-5">Visit Us</h2>
            <address>
              <strong>QORE</strong>
              <br>
              123 Main St.
              <br>
              Suite 200
              <br>
              Anytown, USA 12345
            </address>
            <div class="social mt-4">
              <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
              <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
              <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
              <a href="#"><i class="fab fa-github fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>&copy; 2023 QORE - Quantum Optoelectronics Research and Engineering</p>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="social">
              <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
              <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
              <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
              <a href="#"><i class="fab fa-github fa-2x"></i></a>
            </div>
        </div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

</body>

</html>
