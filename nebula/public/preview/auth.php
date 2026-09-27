<?php
  require __DIR__ . '/../../../../../vendor/autoload.php';
  $app = require_once __DIR__.'/../../../../../bootstrap/app.php';
  $app->make(Illuminate\Contracts\Http\Kernel::class)->handle(Illuminate\Http\Request::capture());

  use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Client\BlueprintClientLibrary as BlueprintExtensionLibrary;
  $settings = app()->make('Pterodactyl\Contracts\Repository\SettingsRepositoryInterface');
  $blueprint = app()->make(BlueprintExtensionLibrary::class, ['settings' => $settings]);

  $userId = Auth::id();
  $user = Auth::user();

  if($user == false) { echo('401 Unauthorized'); return; }
  if($user->root_admin != 1) { echo('403 Forbidden'); return; }
?>
<!DOCTYPE html>
<html lang="en" view="auth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auth Preview</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/extensions/nebula/libraries/authWatermark.css">
  </head>
  <body>
    <div class="auth-card">
      <!-- Left Geometric Ribbon Panel -->
      <div class="left-panel">
        <svg class="left-art-svg" viewBox="0 0 330 540" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <filter id="preview-shadow-1" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#480926" flood-opacity="0.32"/>
            </filter>
            <filter id="preview-shadow-2" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#480926" flood-opacity="0.26"/>
            </filter>
          </defs>
          <rect width="330" height="540" fill="#e3aac3"/>
          <polygon points="0,255 285,540 0,540" fill="#b85080"/>
          <polygon points="46,208 330,492 330,540 266,540 0,274 0,254" fill="#9d3163" filter="url(#preview-shadow-2)"/>
          <polygon points="168,0 252,0 0,252 0,168" fill="#ad4374" filter="url(#preview-shadow-1)"/>
          <polygon points="0,0 168,0 0,168" fill="#902859"/>
        </svg>

        <div class="seam-tabs">
          <div class="tab-indicator" id="tabIndicator"></div>
          <button type="button" class="seam-tab-btn active" id="tabLogin" onclick="setMode('login')">LOGIN</button>
          <button type="button" class="seam-tab-btn" id="tabSignIn" onclick="setMode('signin')">SIGN IN</button>
        </div>
      </div>

      <!-- Right Form Panel -->
      <div class="right-panel">
        <div class="form-main">
          <div class="avatar-badge">
            <svg width="46" height="46" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="32" cy="23" r="9" stroke="#ffffff" stroke-width="2.8"/>
              <path d="M16 46.5c1.6-8.2 7.2-12.5 16-12.5s14.4 4.3 16 12.5c.2 1.1-.6 2-1.8 2.2-4.2.7-9.2 1.1-14.2 1.1s-10-.4-14.2-1.1c-1.2-.2-2-1.1-1.8-2.2Z" stroke="#ffffff" stroke-width="2.8" stroke-linejoin="round"/>
              <path d="M26.5 34.8c1.6 1.7 3.5 2.5 5.5 2.5s3.9-.8 5.5-2.5" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
          </div>
          <h2 class="auth-heading" id="authHeading">LOGIN</h2>

          <div class="input-group">
            <span class="field-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10.5" fill="#7e8287"/>
                <circle cx="12" cy="9.3" r="3.3" fill="#ffffff"/>
                <path d="M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z" fill="#ffffff"/>
              </svg>
            </span>
            <input type="email" placeholder="Email" class="auth-input" />
          </div>

          <div class="input-group">
            <span class="field-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 10V7a4 4 0 0 1 8 0v3" fill="none" stroke="#7e8287" stroke-width="2.3" stroke-linecap="round"/>
                <rect x="5" y="10" width="14" height="11" rx="2.2" fill="#7e8287"/>
                <circle cx="12" cy="15.5" r="1.7" fill="#ffffff"/>
              </svg>
            </span>
            <input type="password" placeholder="Password" class="auth-input" />
          </div>

          <div class="action-row">
            <a href="#forgot" class="forgot-link">Forgot Password?</a>
            <button type="button" class="login-pill-btn" id="submitBtn">LOGIN</button>
          </div>
        </div>

        <div class="bottom-social-bar">
          <span class="social-label">Or Login With</span>
          <button type="button" class="social-btn">
            <span class="social-icon-google">
              <svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#EA4335" d="M12 10.2v3.9h5.5c-.2 1.3-1.6 3.8-5.5 3.8-3.3 0-6-2.7-6-6s2.7-6 6-6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 6.7 2.4 2.4 6.7 2.4 12s4.3 9.6 9.6 9.6c5.5 0 9.2-3.9 9.2-9.4 0-.6-.1-1.1-.2-1.6H12z"/>
                <path fill="#34A853" d="M3.5 7.4l3.2 2.4C7.6 7.5 9.6 6 12 6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 8.3 2.4 5.1 4.5 3.5 7.4z"/>
                <path fill="#FBBC05" d="M12 21.6c2.5 0 4.7-.8 6.2-2.3l-2.9-2.4c-.8.6-1.9 1-3.3 1-3.8 0-5.2-2.5-5.5-3.8l-3.2 2.5c1.6 3.1 4.9 5 8.7 5z"/>
                <path fill="#4285F4" d="M21.2 12.2c0-.6-.1-1.1-.2-1.6H12v3.9h5.5c-.3 1.3-1.1 2.4-2.2 3.1l2.9 2.4c1.7-1.6 3-4.1 3-7.8z"/>
              </svg>
            </span>
            <span>Google</span>
          </button>
          <button type="button" class="social-btn">
            <span class="social-icon-facebook">
              <svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V6.65c0-1.05.29-1.73 1.76-1.73Z"/>
              </svg>
            </span>
            <span>Facebook</span>
          </button>
        </div>
      </div>
    </div>

    <script>
      function setMode(mode) {
        var indicator = document.getElementById('tabIndicator');
        var tabLogin = document.getElementById('tabLogin');
        var tabSignIn = document.getElementById('tabSignIn');
        var heading = document.getElementById('authHeading');
        var submitBtn = document.getElementById('submitBtn');
        if (mode === 'signin') {
          indicator.style.transform = 'translateY(66px)';
          tabLogin.classList.remove('active');
          tabSignIn.classList.add('active');
          heading.textContent = 'SIGN IN';
          submitBtn.textContent = 'SIGN IN';
        } else {
          indicator.style.transform = 'translateY(0px)';
          tabSignIn.classList.remove('active');
          tabLogin.classList.add('active');
          heading.textContent = 'LOGIN';
          submitBtn.textContent = 'LOGIN';
        }
      }
    </script>

    <style>
      * { box-sizing: border-box; }
      html, body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        background: radial-gradient(circle at 50% 45%, #751541 0%, #630f35 55%, #4d0a28 100%);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .auth-card {
        width: min(880px, calc(100vw - 32px));
        height: 540px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 26px 65px rgba(20, 2, 11, 0.48);
        display: flex;
        overflow: hidden;
      }
      .left-panel {
        position: relative;
        width: 37.5%;
        height: 100%;
        background: #e3aac3;
        overflow: hidden;
        flex-shrink: 0;
      }
      .left-art-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
      }
      .seam-tabs {
        position: absolute;
        right: 0;
        top: 158px;
        width: 112px;
        z-index: 5;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
      }
      .tab-indicator {
        position: absolute;
        right: 0;
        top: 0;
        width: 104px;
        height: 54px;
        background: #ffffff;
        border-radius: 999px 0 0 999px;
        transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1);
        z-index: 1;
      }
      .tab-indicator::before {
        content: "";
        position: absolute;
        right: 0;
        top: -22px;
        width: 22px;
        height: 22px;
        border-bottom-right-radius: 22px;
        box-shadow: 10px 10px 0 10px #ffffff;
      }
      .tab-indicator::after {
        content: "";
        position: absolute;
        right: 0;
        bottom: -22px;
        width: 22px;
        height: 22px;
        border-top-right-radius: 22px;
        box-shadow: 10px -10px 0 10px #ffffff;
      }
      .seam-tab-btn {
        position: relative;
        z-index: 2;
        width: 104px;
        height: 54px;
        border: 0;
        background: transparent;
        font-family: 'Poppins', sans-serif;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.04em;
        color: #ffffff;
        cursor: pointer;
        transition: color 0.25s ease;
      }
      .seam-tab-btn + .seam-tab-btn {
        margin-top: 12px;
      }
      .seam-tab-btn.active {
        color: #111111;
      }
      .right-panel {
        width: 62.5%;
        height: 100%;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .form-main {
        flex: 1;
        padding: 46px 68px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .avatar-badge {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 0 auto 14px;
        background: radial-gradient(circle at 36% 24%, #dfb4ca 0%, #bf6f97 40%, #9b3568 78%, #7d1e4d 100%);
        border: 1.5px solid rgba(255, 255, 255, 0.75);
        box-shadow: 0 7px 16px rgba(125, 30, 77, 0.36), inset 0 2px 5px rgba(255, 255, 255, 0.45);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .auth-heading {
        text-align: center;
        color: #7d1e4d;
        font-size: 21px;
        font-weight: 700;
        letter-spacing: 0.03em;
        margin: 0 0 36px;
      }
      .input-group {
        display: flex;
        align-items: center;
        gap: 14px;
        padding-bottom: 10px;
        border-bottom: 1.5px solid #9a9ea4;
        margin-bottom: 28px;
      }
      .field-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }
      .auth-input {
        width: 100%;
        border: 0;
        outline: none;
        background: transparent;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #2b2b2b;
      }
      .auth-input::placeholder {
        color: #8b8f96;
      }
      .action-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 2px;
      }
      .forgot-link {
        color: #9e4770;
        font-size: 11.5px;
        font-weight: 500;
        text-decoration: none;
      }
      .login-pill-btn {
        border: 0;
        border-radius: 999px;
        background: linear-gradient(180deg, #b55784 0%, #a44673 100%);
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 11.5px;
        font-weight: 600;
        letter-spacing: 0.05em;
        padding: 9px 30px;
        box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32);
        cursor: pointer;
      }
      .bottom-social-bar {
        height: 74px;
        background: #ffffff;
        border-top: 1px solid #f2eef0;
        box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 56px;
      }
      .social-label {
        color: #222222;
        font-size: 11.5px;
        font-weight: 600;
      }
      .social-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        border: 0;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: #222222;
        cursor: pointer;
      }
      .social-icon-google {
        width: 25px;
        height: 25px;
        border-radius: 5px;
        background: #ffffff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.14);
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }
      .social-icon-facebook {
        width: 25px;
        height: 25px;
        border-radius: 5px;
        background: #3b5998;
        box-shadow: 0 2px 6px rgba(59, 89, 152, 0.28);
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }
    </style>
  </body>
</html>
