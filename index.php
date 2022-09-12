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
                <a href="http://localhost/ambulance/login.php" style="text-decoration: none; color: white;">
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

      <!-- START COVER -->
      <div
        class="p-5"
        style="
          background-image: url('img/Ambulance\ -\ Copy.png');
          background-color: #283b7f;
          height: 500px;
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row">
            <div class="col"></div>
            <div
              class="col-7 border border-3 rounded-3 text-center bg-light bg-opacity-80"
            >
              <h1>
                Book a <span style="color: rgb(255, 0, 8)">Ambulance</span> to
                your Destination
              </h1>
              <h4>Ride Anywhere, Anytime</h4>
            </div>
            <div class="col"></div>
          </div>
          <div class="row">
            <div class="col"></div>
            <div
              class="col-md-7 border border-3 rounded-3 bg-light bg-opacity-50"
            >
              <div class="row bg-light" style="">
                <h6>Find Your Perfect Trip</h6>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <i class="fa-solid fa-location-dot"></i>
                    <label for="Ambulance_Type">Pick-Up location</label>
                    <div>
                      <input
                        required=""
                        type="text"
                        class="form-control datepicker"
                        name="Pick-Up Location"
                        placeholder="Enter your location"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <i class="fa-solid fa-location-dot"></i>
                    <label for="Ambulance_Type">Pick-Of location</label>
                    <input
                      required=""
                      type="text"
                      class="form-control datepicker"
                      name="Pick-Of location"
                      placeholder="Enter your location"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <i class="fa-solid fa-calendar"></i>
                    <label for="From">Pick-Up Date</label>
                    <input
                      required=""
                      type="text"
                      class="form-control"
                      name="Pick-Up Date"
                      placeholder="Enter Pick-Up Date"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <i class="fa-solid fa-clock"></i>
                    <label for="To">Pick-Up Time</label>
                    <input
                      required=""
                      type="text"
                      class="form-control"
                      name="time"
                      placeholder="Enter Pick-Up Time"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
      <!-- END COVER -->
      <!-- START Blog -->
      <div
        class="breadcrumb p-5 text-center"
        style="
          background-image: url('');
          background-color: #283b7f;
          height: 200px;
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <h1 class="m-auto" style="color: #fff">Blog - Ambulance</h1>
      </div>

      <div class="row">
        <div class="col"></div>

        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-1.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>List Of Ambulance Service</h3>
          </div>
        </div>
        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-2.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>What Is Emergency Ambulance Service</h3>
          </div>
        </div>
        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-3.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>History Of Ambulance Service</h3>
          </div>
        </div>

        <div class="col"></div>
      </div>

      <div class="row">
        <div class="col"></div>
        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-4.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>Why Do People Call An Ambulance During Emergency Time</h3>
          </div>
        </div>
        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-5.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>Emergency Ambulance Service Number In Dhaka</h3>
          </div>
        </div>
        <div
          class="col-3 border border-3 rounded-3 bg-light bg m-4 shadow p-3 mb-5 bg-body rounded"
        >
          <div class="row-3">
            <img src="img/Blog-6.webp" alt="" width="100%" />
          </div>
          <div class="row">
            <h6 class="text-secondary">Aug 20, 2022 | Writer_Name</h6>
          </div>
          <div class="row">
            <h3>Ambulance Service In Dhaka</h3>
          </div>
        </div>

        <div class="col"></div>
      </div>
      <!-- END Blog -->
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
