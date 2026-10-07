<?php

// login.php - Staff Login - para sa backend.

?>

<!DOCTYPE html>

<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Staff Sign In | Metro Rizal Doctors Hospital</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <link rel="stylesheet" href="login.css">
</head>

<body>

      <main class="login-container">

            <!-- Left Panel - Hospital Branding -->
            <section class="hero" aria-label="Metro Rizal Doctors Hospital">

                  <!-- Hospital Brand -->
                  <div class="brand">
                        <span class="brand-mark">
                              <img src="metrodocs_logo.png" alt="Metro Rizal Doctors Hospital">
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
                              equipment using QR codes.
                        </p>
                  </div>

                  <!-- Hero Features -->
                  <div class="hero-foot">

                        <div class="hero-badge">
                              <span class="badge-icon" aria-hidden="true">
                                    <i class="fa-solid fa-qrcode"></i>
                              </span>

                              <div class="badge-details">
                                    <strong>QR-based</strong>
                                    <span>One scan to check in or out</span>
                              </div>
                        </div>

                        <div class="hero-badge">
                              <span class="badge-icon" aria-hidden="true">
                                    <i class="fa-solid fa-list-check"></i>
                              </span>

                              <div class="badge-details">
                                    <strong>Audit-ready</strong>
                                    <span>Every action is logged</span>
                              </div>
                        </div>

                  </div>

            </section>

            <!-- Right Panel - Login Form -->
            <section class="login-panel">

                  <div class="card">

                        <!-- Login Header -->
                        <header class="card-header">
                              <h2>
                                    Staff Sign In
                              </h2>
                              <p>
                                    Sign in with your hospital-issued account
                                    to access the equipment management system.
                              </p>
                        </header>

                        <!-- Alert -->
                        <div class="alert" id="form-alert" role="alert" hidden></div>

                        <!-- Login Form -->
                        <form id="login-form" method="POST" action="" novalidate>

                              <!-- CSRF Token -->
                              <input type="hidden" name="csrf"
                                    value="<?= htmlspecialchars($_SESSION['csrf'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

                              <!-- Staff ID -->
                              <div class="field">
                                    <label for="staff-id">
                                          Staff ID
                                    </label>

                                    <div class="input-wrapper">
                                          <span class="input-icon" aria-hidden="true">
                                                <i class="fa-solid fa-user"></i>
                                          </span>

                                          <input id="staff-id"
                                                name="staff_id"
                                                type="text"
                                                autocomplete="username"
                                                placeholder="Enter your Staff ID"
                                                aria-describedby="staff-id-error"
                                                required>
                                    </div>

                                    <div class="error-message"
                                          id="staff-id-error"
                                          role="alert"
                                          hidden>
                                    </div>
                              </div>

                              <!-- Password -->
                              <div class="field">
                                    <label for="password">
                                          Password
                                    </label>

                                    <div class="input-wrapper">
                                          <span class="input-icon" aria-hidden="true">
                                                <i class="fa-solid fa-lock"></i>
                                          </span>

                                          <input id="password"
                                                name="password"
                                                type="password"
                                                autocomplete="current-password"
                                                placeholder="Enter your password"
                                                aria-describedby="password-error"
                                                required>

                                          <button type="button"
                                                class="toggle-password"
                                                id="pw-toggle"
                                                aria-label="Show password"
                                                aria-pressed="false">
                                                <i class="fa-regular fa-eye"></i>
                                          </button>
                                    </div>

                                    <div class="error-message"
                                          id="password-error"
                                          role="alert"
                                          hidden>
                                    </div>
                              </div>

                              <!-- Remember Me / Forgot Password -->
                              <div class="form-row">

                                    <label class="checkbox-label">
                                          <input type="checkbox"
                                                name="remember"
                                                id="remember">

                                          <span>
                                                Remember me
                                          </span>
                                    </label>

                                    <a href="forgot-password.php" class="forgot-link">
                                          Forgot password?
                                    </a>

                              </div>

                              <!-- Sign-In Button -->
                              <button type="submit"
                                    class="btn btn-primary"
                                    id="signin-btn">

                                    <span id="signin-text">
                                          Sign in
                                    </span>

                                    <span class="btn-icon" aria-hidden="true">
                                          <i class="fa-solid fa-arrow-right"></i>
                                    </span>

                                    <span class="spinner"
                                          id="signin-loader"
                                          hidden>
                                    </span>

                              </button>

                        </form>

                        <!-- Footer -->
                        <footer class="card-footer">
                              <small>
                                    Need access? Contact your IT or Biomedical Administrator.
                              </small>
                        </footer>

                  </div>

            </section>

      </main>

      <!-- JavaScript - waley pa to, nilagay langs -->
      <script src="script.js"></script>

</body>

</html>