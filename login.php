<?php
// login.php - Staff Login
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Staff Login | Metro Rizal Doctors Hospital</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <link rel="stylesheet" href="login.css">
</head>

<body>

      <main class="login-container">

            <!-- LEFT SIDE - HOSPITAL BRANDING -->
            <section class="hero" aria-label="Metro Rizal Doctors Hospital">

                  <!-- Decorative graphic -->
                  <div class="hero-graphic" aria-hidden="true">
                        <i class="fa-solid fa-heart-pulse"></i>
                  </div>

                  <!-- Hospital Brand -->
                  <div class="brand">

                        <span class="brand-mark" aria-hidden="true">
                              <i class="fa-solid fa-heart-pulse"></i>
                        </span>

                        <span class="brand-name">
                              Metro Rizal Doctors Hospital
                        </span>

                  </div>


                  <!-- Hero Text -->
                  <div class="hero-content">

                        <h1>
                              Equipment Tracking &amp; Management Portal
                        </h1>

                        <p>
                              Track, borrow, return, repair, and audit hospital
                              equipment with QR codes, from all over the hospital.
                        </p>

                  </div>


                  <!-- Hero Features -->
                  <div class="hero-foot">

                        <div class="hero-badge">
                              <strong>QR-based</strong>
                              <span>One scan to check in or out</span>
                        </div>

                        <div class="hero-badge">
                              <strong>Audit-ready</strong>
                              <span>Every action is logged</span>
                        </div>

                  </div>

            </section>


            <!-- =====================================================
             RIGHT SIDE - LOGIN FORM
             ===================================================== -->
            <section class="login-panel">

                  <div class="card">

                        <!-- Login Header -->
                        <header class="card-header">

                              <h2>
                                    Staff Login
                              </h2>

                              <p>
                                    Use your hospital-issued account credentials
                                    to access the system.
                              </p>

                        </header>


                        <!-- Alert -->
                        <div class="alert" id="form-alert" role="alert" hidden></div>


                        <!-- Login Form -->
                        <form id="login-form" method="POST" action="" novalidate>

                              <!-- CSRF Token -->
                              <input type="hidden" name="csrf"
                                    value="<?= htmlspecialchars($_SESSION['csrf'] ?? '', ENT_QUOTES, 'UTF-8') ?>">


                              <!-- =================================================
                         STAFF ID
                         ================================================= -->
                              <div class="field">

                                    <label for="staff-id">
                                          Staff ID
                                    </label>

                                    <div class="input-wrapper">

                                          <span class="input-icon" aria-hidden="true">
                                                <i class="fa-solid fa-user"></i>
                                          </span>

                                          <input id="staff-id" name="staff_id" type="text" autocomplete="username"
                                                placeholder="Enter your Staff ID" aria-describedby="staff-id-error"
                                                required>

                                    </div>

                                    <div class="error-message" id="staff-id-error" role="alert" hidden></div>

                              </div>


                              <!-- =================================================
                         PASSWORD
                         ================================================= -->
                              <div class="field">

                                    <label for="password">
                                          Password
                                    </label>

                                    <div class="input-wrapper">

                                          <span class="input-icon" aria-hidden="true">
                                                <i class="fa-solid fa-lock"></i>
                                          </span>

                                          <input id="password" name="password" type="password"
                                                autocomplete="current-password" aria-describedby="password-error"
                                                placeholder="Enter your password" required>

                                          <button type="button" class="toggle-password" id="pw-toggle"
                                                aria-label="Show password" aria-pressed="false">
                                                <i class="fa-regular fa-eye"></i>
                                          </button>

                                    </div>

                                    <div class="error-message" id="password-error" role="alert" hidden></div>

                              </div>


                              <!-- =================================================
                         REMEMBER ME / FORGOT PASSWORD
                         ================================================= -->
                              <div class="form-row">

                                    <label class="checkbox-label">

                                          <input type="checkbox" name="remember" id="remember">

                                          <span>
                                                Remember me
                                          </span>

                                    </label>


                                    <a href="forgot-password.php" class="forgot-link">
                                          Forgot password?
                                    </a>

                              </div>


                              <!-- =================================================
                         SIGN IN BUTTON
                         ================================================= -->
                              <button type="submit" class="btn btn-primary" id="signin-btn">

                                    <span id="signin-text">
                                          Sign in
                                    </span>

                                    <span class="btn-icon" aria-hidden="true">
                                          <i class="fa-solid fa-arrow-right"></i>
                                    </span>

                                    <span class="spinner" id="signin-loader" hidden></span>

                              </button>

                        </form>


                        <!-- Footer -->
                        <footer class="card-footer">

                              <small>
                                    Need access? Contact the IT or biomedical administrator.
                              </small>

                        </footer>

                  </div>

            </section>

      </main>


      <!-- JavaScript -->
      <script src="script.js"></script>

</body>

</html>