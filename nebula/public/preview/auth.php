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
        <svg class="left-art-svg" viewBox="0 0 312 550" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <filter id="preview-shadow-upper" x="-25%" y="-25%" width="150%" height="150%">
              <feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#3d051f" flood-opacity="0.34"/>
            </filter>
            <filter id="preview-shadow-lower" x="-25%" y="-25%" width="150%" height="150%">
              <feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#3d051f" flood-opacity="0.28"/>
            </filter>
            <filter id="preview-shadow-corner" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="3" dy="-3" stdDeviation="4" flood-color="#480725" flood-opacity="0.20"/>
            </filter>
          </defs>
          <rect width="312" height="550" fill="#e2abc4"/>
          <polygon points="56,215 312,471 312,550 0,550 0,271" fill="#9c3062" filter="url(#preview-shadow-lower)"/>
          <polygon points="0,268 282,550 0,550" fill="#b95080" filter="url(#preview-shadow-corner)"/>
          <polygon points="188,0 271,0 0,271 0,188" fill="#b24879" filter="url(#preview-shadow-upper)"/>
          <polygon points="0,0 188,0 0,188" fill="#902859"/>
        </svg>

        <div class="seam-tabs">
          <div class="tab-indicator" id="tabIndicator"></div>
          <button type="button" class="seam-tab-btn active" id="tabLogin" onclick="setMode('login')">LOGIN</button>
          <button type="button" class="seam-tab-btn" id="tabSignUp" onclick="setMode('signup')">SIGN UP</button>
        </div>
      </div>

      <!-- Right Form Panel -->
      <div class="right-panel">
        <div class="form-main" id="formMain">
          <div class="avatar-badge" id="avatarBadge">
            <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="32" cy="22.5" r="8.8" stroke="#ffffff" stroke-width="2.7"/>
              <path d="M16.5 46.5c1.5-8 6.9-12.3 15.5-12.3s14 4.3 15.5 12.3c.2 1.1-.6 2-1.8 2.2-4.1.7-8.9 1-13.7 1s-9.6-.3-13.7-1c-1.2-.2-2-1.1-1.8-2.2Z" stroke="#ffffff" stroke-width="2.7" stroke-linejoin="round"/>
              <path d="M26.5 34.8c1.6 1.7 3.5 2.5 5.5 2.5s3.9-.8 5.5-2.5" stroke="#ffffff" stroke-width="2.3" stroke-linecap="round"/>
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

          <div class="input-group signup-only" id="usernameGroup" style="display: none;">
            <span class="field-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10.5" fill="#7e8287"/>
                <circle cx="12" cy="9.3" r="3.3" fill="#ffffff"/>
                <path d="M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z" fill="#ffffff"/>
              </svg>
            </span>
            <input type="text" placeholder="Username" class="auth-input" />
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

          <div class="input-group signup-only" id="confirmGroup" style="display: none;">
            <span class="field-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 10V7a4 4 0 0 1 8 0v3" fill="none" stroke="#7e8287" stroke-width="2.3" stroke-linecap="round"/>
                <rect x="5" y="10" width="14" height="11" rx="2.2" fill="#7e8287"/>
                <circle cx="12" cy="15.5" r="1.7" fill="#ffffff"/>
              </svg>
            </span>
            <input type="password" placeholder="Confirm Password" class="auth-input" />
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
        var tabSignUp = document.getElementById('tabSignUp');
        var heading = document.getElementById('authHeading');
        var submitBtn = document.getElementById('submitBtn');
        var usernameGroup = document.getElementById('usernameGroup');
        var confirmGroup = document.getElementById('confirmGroup');
        var formMain = document.getElementById('formMain');
        if (mode === 'signup') {
          indicator.style.transform = 'translateY(68px)';
          tabLogin.classList.remove('active');
          tabSignUp.classList.add('active');
          heading.textContent = 'SIGN UP';
          submitBtn.textContent = 'SIGN UP';
          usernameGroup.style.display = 'flex';
          confirmGroup.style.display = 'flex';
          formMain.classList.add('is-signup');
        } else {
          indicator.style.transform = 'translateY(0px)';
          tabSignUp.classList.remove('active');
          tabLogin.classList.add('active');
          heading.textContent = 'LOGIN';
          submitBtn.textContent = 'LOGIN';
          usernameGroup.style.display = 'none';
          confirmGroup.style.display = 'none';
          formMain.classList.remove('is-signup');
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
        background: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .auth-card {
        width: min(800px, calc(100vw - 32px));
        height: 550px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 26px 65px rgba(18, 2, 10, 0.55);
        display: flex;
        overflow: hidden;
      }
      .left-panel {
        position: relative;
        width: 312px;
        min-width: 312px;
        height: 100%;
        background: #e2abc4;
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
        top: 162px;
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
        width: 106px;
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
        top: -24px;
        width: 24px;
        height: 24px;
        border-bottom-right-radius: 24px;
        box-shadow: 12px 12px 0 12px #ffffff;
      }
      .tab-indicator::after {
        content: "";
        position: absolute;
        right: 0;
        bottom: -24px;
        width: 24px;
        height: 24px;
        border-top-right-radius: 24px;
        box-shadow: 12px -12px 0 12px #ffffff;
      }
      .seam-tab-btn {
        position: relative;
        z-index: 2;
        width: 106px;
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
        margin-top: 14px;
      }
      .seam-tab-btn.active {
        color: #111111;
      }
      .right-panel {
        width: 488px;
        height: 100%;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .form-main {
        flex: 1;
        padding: 42px 58px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .form-main.is-signup {
        padding: 22px 58px 12px;
      }
      .avatar-badge {
        width: 82px;
        height: 82px;
        border-radius: 50%;
        margin: 0 auto 14px;
        background: radial-gradient(circle at 38% 22%, #e5bed2 0%, #c3749b 38%, #9b3567 76%, #7b1d4b 100%);
        border: 1.5px solid rgba(255, 255, 255, 0.82);
        box-shadow: 0 7px 16px rgba(120, 24, 70, 0.36), inset 0 2px 5px rgba(255, 255, 255, 0.48);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form-main.is-signup .avatar-badge {
        width: 64px;
        height: 64px;
        margin-bottom: 8px;
      }
      .auth-heading {
        text-align: center;
        color: #7d1e4d;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 0.03em;
        margin: 0 0 36px;
      }
      .form-main.is-signup .auth-heading {
        margin-bottom: 18px;
      }
      .input-group {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 0 12px 10px 10px;
        border-bottom: 1.5px solid #9a9ea4;
        margin-bottom: 28px;
      }
      .form-main.is-signup .input-group {
        padding-bottom: 6px;
        margin-bottom: 14px;
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
        padding-left: 10px;
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
        height: 36px;
        min-width: 118px;
        padding: 0 30px;
        box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32);
        cursor: pointer;
      }
      .bottom-social-bar {
        height: 76px;
        background: #ffffff;
        border-top: 1px solid #f2eef0;
        box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 48px;
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
