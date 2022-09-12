<html>
  <head>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/d2d98d90ea.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

    <div class="container0">
      
      <header>
        <!-- As a link -->
        <nav class="navbar navbar-light bg-dark text-white">
          <div class="col"></div>
          <div class="col-6">
            <div class="row">
              <div class="col">
                <a href="tel:+8801878959101" style="text-decoration: none; color: white;">
                  <i class="fa-solid fa-phone"></i> +880 1878 959101
                </a>
              </div>
              <div class="col">
                <a href="registration.php" style="text-decoration: none; color: white;">
                  <i class="fa-solid fa-user"></i> Create account
                </a>
              </div>
              <div class="col">
                <a href="login.php" style="text-decoration: none; color: white;">
                <i class="fa-solid fa-lock"></i> Login
              </a>
            </div>  
            </div>
          </div>
          <div class="col"></div>
        </nav>
        <!-- As a heading -->
        <nav
          class="navbar navbar-expand-lg bg-light"
          style="background-image: linear-gradient(to right, #2c86f0, #2c51c9)"
        >
          <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
              <img src="img/LoGo.png" alt="logo" style="width: 50px" />
            </a>

            <ul class="nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PACKAGES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ'S</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">CONTACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php"
                  ><i class="fa-solid fa-user"></i>
                  <!-- ######################################## -->
                  Account
                </a>
                <p >
                    <a href="registration.php" style="color: white;">Register</a>
                  </span>
                  <span> or </span>
                    <a href="login.php" style="color: white;">Login</a>
                </p>
                <!-- ######################################## -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">
                  <button type="button" class="btn btn-primary btn-danger">
                    BOOKING
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ####################################################################################################################### -->

      <div class="container">
      <div class="row d-flex justify-content-center align-items-center mt-5">
         <div class="col"></div>
         <div class="col-6 btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
              <label class="btn btn-outline-primary" for="btnradio1">User</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio2">Hospital</label>
            
              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio3">Driver</label>
          </div>
          <div class="col"></div>
        </div>
        <div class="row d-flex justify-content-center align-items-center mt-5">
          <div class="col"></div>
          <div class="col-6">
            <div
              class="card p-5 shadow p-3 mb-5 bg-body rounded"
              style="border-radius: 15px"
            >
              <h2 class="text-uppercase text-center mb-5">LOGIN</h2>

              <form action="loginbackend.php" method="post">
                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3cg">
                    Your Email
                  </label>
                  <input
                    type="email"
                    name="email"
                    id="form3Example3cg"
                    class="form-control form-control-lg"
                  />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example4cg">
                    Password
                  </label>
                  <input
                    type="password"
                    name="pass"
                    id="form3Example4cg"
                    class="form-control form-control-lg"
                  />
                </div>

                <div class="form-check d-flex justify-content-center mb-2">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    Remember password
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button
                    type="submit"
                    value="submit"
                    class="btn btn-success btn-block btn-lg text-body shadow m-1"
                    style="
                      background-image: linear-gradient(
                        to right,
                        #2c51c9,
                        #2c86f0
                      );
                    "
                  >
                    Log In
                  </button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">
                  Don't have any account?
                  <a href="registration.php" class="fw-bold text-body">
                    <u>Register here</u>
                  </a>
                </p>
              </form>
            </div>
          </div>
          <div class="col"></div>
        </div>
      </div>

      <!-- ####################################################################################################################### -->
      <footer
        class="bg-dark text-center text-white"
        style="background-image: linear-gradient(to right, #2c51c9, #2c86f0)"
      >
        <!-- Grid container -->
        <a href="#" class="navbar-brand">
          <img src="img/LoGo.png" alt="logo" style="width: 100px" />
        </a>
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="#!"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
        © 2022 Copyright:
          <a class="text-white" href="https://www.facebook.com/jahidhsanto/">
            jahidhsanto
            </a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
  </body>
</html>
