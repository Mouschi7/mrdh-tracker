<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Staff Login - Metro Rizal Doctors Hospital Equipment Tracking Management">
    <title>Staff Login | Metro Rizal Doctors Hospital</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-page">
        <div class="split-screen">
            <!-- Left Side: Hospital Branding & Stats -->
            <div class="split-screen__left" id="branding-panel">
                <div class="branding-panel__content">
                    <div class="branding-panel__logo" id="hospital-logo"></div>
                    <div class="branding-panel__tagline" id="hospital-tagline"></div>
                    <div class="branding-panel__stats" id="hospital-stats">
                        <div class="stat-item" id="stat-equipment"></div>
                        <div class="stat-item" id="stat-departments"></div>
                        <div class="stat-item" id="stat-active-users"></div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Staff Login Form -->
            <div class="split-screen__right" id="login-panel">
                <div class="login-panel__content">
                    <header class="login-panel__header">
                        <h1 class="login-panel__title" id="login-title"></h1>
                        <p class="login-panel__subtitle" id="login-subtitle"></p>
                    </header>

                    <form id="login-form" class="login-form" novalidate>
                        <div class="form-group" id="email-group">
                            <label for="email" class="form-label" id="email-label"></label>
                            <input type="email" id="email" name="email" class="form-input" autocomplete="email">
                            <div class="form-error" id="email-error"></div>
                        </div>

                        <div class="form-group" id="password-group">
                            <label for="password" class="form-label" id="password-label"></label>
                            <div class="password-wrapper">
                                <input type="password" id="password" name="password" class="form-input" autocomplete="current-password">
                                <button type="button" class="password-toggle" id="password-toggle" aria-label="Toggle password visibility"></button>
                            </div>
                            <div class="form-error" id="password-error"></div>
                        </div>

                        <div class="form-options">
                            <div class="checkbox-wrapper" id="remember-wrapper">
                                <input type="checkbox" id="remember" name="remember" class="form-checkbox">
                                <label for="remember" class="checkbox-label" id="remember-label"></label>
                            </div>
                            <a href="#" class="forgot-password" id="forgot-password-link"></a>
                        </div>

                        <button type="submit" class="btn btn--primary btn--full-width" id="signin-btn">
                            <span class="btn__text" id="signin-text"></span>
                            <span class="btn__loader" id="signin-loader" hidden></span>
                        </button>
                    </form>

                    <footer class="login-panel__footer">
                        <p class="footer-text" id="footer-text"></p>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>