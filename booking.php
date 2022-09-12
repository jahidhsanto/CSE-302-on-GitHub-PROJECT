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
    <script src="JavaScript.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#destination").on("input", function(){
          // Print entered value in a div box
          $("#disp").text($(this).val());
        });
        });
    </script>
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
          <div class="col-8">
            <div
              class="card p-5 shadow p-3 mb-5 bg-body rounded"
              style="border-radius: 15px"
            >
              <h2 class="text-uppercase text-center mb-2">
                <div class="row">
                  <div class="col">
                    <img
                      src="img/booking-1.png"
                      alt="booking-1"
                      width="100px"
                    />
                  </div>
                  <div class="col">
                    <img
                      src="img/booking-2.png"
                      alt="booking-2"
                      width="100px"
                    />
                  </div>
                  <div class="col">
                    <img
                      src="img/booking-3.png"
                      alt="booking-3"
                      width="100px"
                    />
                  </div>
                </div>
              </h2>

              <div class="mb-3">
                <div style="background-color: gainsboro">Online Booking</div>
                <div class="row">
                  <div class="col form-group">
                    <i class="fa-solid fa-location-dot"></i>
                    <label for="Ambulance_Type">Pick-Up location</label>
                    <input
                      required=""
                      type="text"
                      class="form-control datepicker"
                      name="Pick-Of location"
                      placeholder="Enter your location"
                    />
                  </div>
                  <div class="col form-group">
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
                  <div class="col form-group">
                    <i class="fa-solid fa-map-pin"></i>
                    <label for="Ambulance_Type">Estimated destination</label>
                    <input
                      required=""
                      type="text"
                      class="form-control datepicker"
                      name="Pick-Of location"
                      placeholder="Enter estimated destination"
                      id="destination"
                    />
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div style="background-color: gainsboro">Date & Time</div>
                <div class="row">
                  <div class="col form-group">
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
                  <div class="col form-group">
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

              <div class="mb-3">
                <div style="background-color: gainsboro">
                  <div class="form-check d-flex mb-2">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3cg"
                    />
                    <label class="form-check-label" for="form2Example3g">
                      Wait & Return Journey required
                    </label>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary">
                      <div>Total Journey Time</div>
                      <div><span id="disp"> 0.0 </span> KM × 70৳(per KM)</div>
                    </button>
                  </div>
                  <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary" onclick="myFunction()">
                      <div>Total Cost</div>
                      <div id="total">BDT 0.00৳</div>
                    </button>
                  </div>
                  <div class="col d-flex justify-content-center">
                    <button
                      type="button"
                      class="btn btn-outline-primary"
                      style="background-color: #f8676c; color: white"
                    >
                      <div>Personal Details ></div>
                    </button>
                  </div>
                </div>
              </div>
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
