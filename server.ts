import express from 'express';
import path from 'path';
import fs from 'fs';

const app = express();
const PORT = 3000;

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve static assets from nebula/public
app.use('/extensions/nebula', express.static(path.join(process.cwd(), 'nebula/public')));
app.use('/public', express.static(path.join(process.cwd(), 'public')));

const renderAuthPage = (initialMode: 'login' | 'signin' = 'login') => `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berry Geometric Auth UI</title>
  <meta name="description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <meta property="og:title" content="Berry Geometric Auth UI" />
  <meta property="og:description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      width: 100%;
      height: 100%;
      min-height: 100vh;
      font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      background: radial-gradient(circle at 50% 45%, #751541 0%, #651037 52%, #4e0a29 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* Main Split Card Container matching the uploaded image */
    .auth-card-wrapper {
      position: relative;
      width: 880px;
      height: 540px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 28px 68px rgba(20, 2, 11, 0.48);
      display: flex;
      flex-direction: row;
      overflow: hidden;
      flex-shrink: 0;
    }

    /* Left Panel (37.5% width = 330px) with Layered Diagonal Ribbons */
    .left-panel {
      position: relative;
      width: 330px;
      min-width: 330px;
      height: 100%;
      background-color: #e3aac3;
      overflow: hidden;
      user-select: none;
    }

    .left-art-svg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      display: block;
      pointer-events: none;
    }

    /* Seam Tab Switcher ("LOGIN" / "SIGN IN") */
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

    /* Sliding White Protrusion Pill with Smooth Concave Fillets */
    .tab-indicator {
      position: absolute;
      right: 0;
      top: 0;
      width: 104px;
      height: 54px;
      background: #ffffff;
      border-radius: 999px 0 0 999px;
      transition: transform 0.34s cubic-bezier(0.22, 1, 0.36, 1);
      pointer-events: none;
      z-index: 1;
    }

    /* Top concave fillet joining the white right panel */
    .tab-indicator::before {
      content: "";
      position: absolute;
      right: 0;
      top: -22px;
      width: 22px;
      height: 22px;
      background: transparent;
      border-bottom-right-radius: 22px;
      box-shadow: 10px 10px 0 10px #ffffff;
    }

    /* Bottom concave fillet joining the white right panel */
    .tab-indicator::after {
      content: "";
      position: absolute;
      right: 0;
      bottom: -22px;
      width: 22px;
      height: 22px;
      background: transparent;
      border-top-right-radius: 22px;
      box-shadow: 10px -10px 0 10px #ffffff;
    }

    body[data-mode="signin"] .tab-indicator {
      transform: translateY(66px);
    }

    .seam-tab-btn {
      position: relative;
      z-index: 2;
      width: 104px;
      height: 54px;
      border: 0;
      background: transparent;
      padding: 0 6px 0 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: #ffffff;
      cursor: pointer;
      transition: color 0.25s ease;
      outline: none;
    }

    .seam-tab-btn + .seam-tab-btn {
      margin-top: 12px;
    }

    body[data-mode="login"] .seam-tab-btn[data-tab="login"],
    body[data-mode="signin"] .seam-tab-btn[data-tab="signin"] {
      color: #111111;
    }

    /* Right White Panel (62.5% width = 550px) */
    .right-panel {
      position: relative;
      width: 550px;
      height: 100%;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .form-content {
      flex: 1;
      padding: 46px 68px 20px 68px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* Glossy 3D Berry Circle Avatar Badge */
    .avatar-circle {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin: 0 auto 14px auto;
      background: radial-gradient(circle at 36% 24%, #dfb4ca 0%, #bf6f97 40%, #9b3568 78%, #7d1e4d 100%);
      border: 1.5px solid rgba(255, 255, 255, 0.78);
      box-shadow:
        0 7px 16px rgba(125, 30, 77, 0.36),
        inset 0 2px 5px rgba(255, 255, 255, 0.45);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    /* Main Title ("LOGIN" / "SIGN IN") */
    .form-title {
      text-align: center;
      color: #7d1e4d;
      font-size: 21px;
      font-weight: 700;
      letter-spacing: 0.03em;
      text-transform: uppercase;
      margin: 0 0 36px 0;
      transition: margin 0.25s ease;
    }

    body[data-mode="signin"] .form-title {
      margin-bottom: 24px;
    }

    /* Input Field Rows with Left Gray Icon + Full Underline */
    .field-row {
      display: flex;
      align-items: center;
      gap: 14px;
      padding-bottom: 10px;
      border-bottom: 1.5px solid #9a9ea4;
      margin-bottom: 30px;
      transition: border-color 0.2s ease, margin 0.25s ease;
    }

    body[data-mode="signin"] .field-row {
      margin-bottom: 20px;
    }

    .field-row:focus-within {
      border-bottom-color: #7d1e4d;
    }

    .field-row.extra-signup-field {
      display: none;
    }

    body[data-mode="signin"] .field-row.extra-signup-field {
      display: flex;
    }

    .field-icon {
      width: 22px;
      height: 22px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .field-input {
      width: 100%;
      border: 0;
      outline: none;
      background: transparent;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      font-weight: 400;
      color: #2b2b2b;
    }

    .field-input::placeholder {
      color: #8b8f96;
      font-weight: 400;
    }

    /* Forgot Password (Left) & Pill LOGIN Button (Right) */
    .actions-row {
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
      letter-spacing: 0.01em;
      cursor: pointer;
      background: none;
      border: 0;
      font-family: 'Poppins', sans-serif;
      transition: color 0.18s ease;
    }

    .forgot-link:hover {
      color: #7d1e4d;
      text-decoration: underline;
    }

    .submit-pill-btn {
      border: 0;
      border-radius: 999px;
      background: linear-gradient(180deg, #b55784 0%, #a44673 100%);
      color: #ffffff;
      font-family: 'Poppins', sans-serif;
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      padding: 9px 30px;
      min-width: 112px;
      height: 36px;
      box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32);
      cursor: pointer;
      transition: transform 0.16s ease, box-shadow 0.16s ease, filter 0.16s ease;
    }

    .submit-pill-btn:hover {
      filter: brightness(1.05);
      transform: translateY(-1px);
      box-shadow: 0 7px 18px rgba(174, 80, 125, 0.42);
    }

    .submit-pill-btn:active {
      transform: translateY(0);
    }

    /* Status Feedback Banner */
    .status-banner {
      display: none;
      margin-top: 14px;
      padding: 8px 14px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 500;
      text-align: center;
      background: rgba(174, 80, 125, 0.1);
      color: #7d1e4d;
      border: 1px solid rgba(174, 80, 125, 0.25);
    }

    .status-banner.visible {
      display: block;
    }

    /* Bottom Social Login Bar ("Or Login With | Google | Facebook") */
    .bottom-social-bar {
      height: 74px;
      background: #ffffff;
      border-top: 1px solid #f2eef0;
      box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 56px;
      flex-shrink: 0;
    }

    .social-label {
      color: #222222;
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: 0.01em;
    }

    .social-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: transparent;
      border: 0;
      padding: 6px 10px;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      font-size: 12px;
      font-weight: 600;
      color: #222222;
      transition: background-color 0.16s ease, transform 0.16s ease;
    }

    .social-btn:hover {
      background-color: #f9f5f7;
      transform: translateY(-1px);
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
      flex-shrink: 0;
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
      flex-shrink: 0;
    }

    /* Proportional Responsive Scaling on Smaller Viewports */
    @media (max-width: 920px), (max-height: 580px) {
      .auth-card-wrapper {
        --card-scale: min(calc((100vw - 24px) / 880), calc((100vh - 24px) / 540));
        transform: scale(var(--card-scale));
        transform-origin: center center;
      }
    }
  </style>
</head>
<body data-mode="${initialMode}">
  <main class="auth-card-wrapper" aria-label="Authentication Card">
    <!-- Left Geometric Ribbon Panel -->
    <div class="left-panel">
      <svg class="left-art-svg" viewBox="0 0 330 540" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="ribbon-shadow-down" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#480926" flood-opacity="0.32"/>
          </filter>
          <filter id="ribbon-shadow-up" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#480926" flood-opacity="0.26"/>
          </filter>
        </defs>
        <!-- Soft Dusty Rose Base -->
        <rect width="330" height="540" fill="#e3aac3"/>
        <!-- Bottom-Left Medium Rose Triangle -->
        <polygon points="0,255 285,540 0,540" fill="#b85080"/>
        <!-- Lower-Right Diagonal Band (with upward shadow onto dusty rose) -->
        <polygon points="46,208 330,492 330,540 266,540 0,274 0,254" fill="#9d3163" filter="url(#ribbon-shadow-up)"/>
        <!-- Upper-Left Diagonal Band (overlapping lower band with downward shadow) -->
        <polygon points="168,0 252,0 0,252 0,168" fill="#ad4374" filter="url(#ribbon-shadow-down)"/>
        <!-- Top-Left Deep Berry Corner Triangle -->
        <polygon points="0,0 168,0 0,168" fill="#902859"/>
      </svg>

      <!-- Curved Seam Tabs -->
      <div class="seam-tabs" role="tablist" aria-label="Authentication Mode">
        <div class="tab-indicator" aria-hidden="true"></div>
        <button type="button" role="tab" class="seam-tab-btn" data-tab="login" id="tabLoginBtn" aria-selected="${initialMode === 'login'}">LOGIN</button>
        <button type="button" role="tab" class="seam-tab-btn" data-tab="signin" id="tabSignInBtn" aria-selected="${initialMode === 'signin'}">SIGN IN</button>
      </div>
    </div>

    <!-- Right White Form Panel -->
    <div class="right-panel">
      <form class="form-content" id="authForm" novalidate>
        <!-- Glossy Circular Berry Avatar Icon -->
        <div class="avatar-circle" aria-hidden="true">
          <svg width="46" height="46" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="32" cy="23" r="9" stroke="#ffffff" stroke-width="2.8"/>
            <path d="M16 46.5c1.6-8.2 7.2-12.5 16-12.5s14.4 4.3 16 12.5c.2 1.1-.6 2-1.8 2.2-4.2.7-9.2 1.1-14.2 1.1s-10-.4-14.2-1.1c-1.2-.2-2-1.1-1.8-2.2Z" stroke="#ffffff" stroke-width="2.8" stroke-linejoin="round"/>
            <path d="M26.5 34.8c1.6 1.7 3.5 2.5 5.5 2.5s3.9-.8 5.5-2.5" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round"/>
          </svg>
        </div>

        <h1 class="form-title" id="formTitle">${initialMode === 'signin' ? 'SIGN IN' : 'LOGIN'}</h1>

        <!-- Optional Username Field shown when toggled to SIGN IN (Register) tab -->
        <div class="field-row extra-signup-field">
          <span class="field-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10.5" fill="#7e8287"/>
              <circle cx="12" cy="9.3" r="3.3" fill="#ffffff"/>
              <path d="M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z" fill="#ffffff"/>
            </svg>
          </span>
          <input type="text" name="username" id="usernameInput" class="field-input" placeholder="Username" autocomplete="username" />
        </div>

        <!-- Email Input -->
        <div class="field-row">
          <span class="field-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10.5" fill="#7e8287"/>
              <circle cx="12" cy="9.3" r="3.3" fill="#ffffff"/>
              <path d="M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z" fill="#ffffff"/>
            </svg>
          </span>
          <input type="email" name="email" id="emailInput" class="field-input" placeholder="Email" autocomplete="email" required />
        </div>

        <!-- Password Input -->
        <div class="field-row">
          <span class="field-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 10V7a4 4 0 0 1 8 0v3" fill="none" stroke="#7e8287" stroke-width="2.3" stroke-linecap="round"/>
              <rect x="5" y="10" width="14" height="11" rx="2.2" fill="#7e8287"/>
              <circle cx="12" cy="15.5" r="1.7" fill="#ffffff"/>
            </svg>
          </span>
          <input type="password" name="password" id="passwordInput" class="field-input" placeholder="Password" autocomplete="current-password" required />
        </div>

        <!-- Forgot Password & Pill Submit Button -->
        <div class="actions-row">
          <button type="button" class="forgot-link" id="forgotBtn">Forgot Password?</button>
          <button type="submit" class="submit-pill-btn" id="submitBtn">${initialMode === 'signin' ? 'SIGN IN' : 'LOGIN'}</button>
        </div>

        <div class="status-banner" id="statusBanner" role="status" aria-live="polite"></div>
      </form>

      <!-- Bottom Social Login Bar -->
      <div class="bottom-social-bar">
        <span class="social-label" id="socialLabel">Or Login With</span>

        <button type="button" class="social-btn" id="googleBtn">
          <span class="social-icon-google" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#EA4335" d="M12 10.2v3.9h5.5c-.2 1.3-1.6 3.8-5.5 3.8-3.3 0-6-2.7-6-6s2.7-6 6-6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 6.7 2.4 2.4 6.7 2.4 12s4.3 9.6 9.6 9.6c5.5 0 9.2-3.9 9.2-9.4 0-.6-.1-1.1-.2-1.6H12z"/>
              <path fill="#34A853" d="M3.5 7.4l3.2 2.4C7.6 7.5 9.6 6 12 6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 8.3 2.4 5.1 4.5 3.5 7.4z"/>
              <path fill="#FBBC05" d="M12 21.6c2.5 0 4.7-.8 6.2-2.3l-2.9-2.4c-.8.6-1.9 1-3.3 1-3.8 0-5.2-2.5-5.5-3.8l-3.2 2.5c1.6 3.1 4.9 5 8.7 5z"/>
              <path fill="#4285F4" d="M21.2 12.2c0-.6-.1-1.1-.2-1.6H12v3.9h5.5c-.3 1.3-1.1 2.4-2.2 3.1l2.9 2.4c1.7-1.6 3-4.1 3-7.8z"/>
            </svg>
          </span>
          <span>Google</span>
        </button>

        <button type="button" class="social-btn" id="facebookBtn">
          <span class="social-icon-facebook" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#ffffff" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V6.65c0-1.05.29-1.73 1.76-1.73Z"/>
            </svg>
          </span>
          <span>Facebook</span>
        </button>
      </div>
    </div>
  </main>

  <script>
    (function () {
      const body = document.body;
      const tabLoginBtn = document.getElementById('tabLoginBtn');
      const tabSignInBtn = document.getElementById('tabSignInBtn');
      const formTitle = document.getElementById('formTitle');
      const submitBtn = document.getElementById('submitBtn');
      const authForm = document.getElementById('authForm');
      const emailInput = document.getElementById('emailInput');
      const passwordInput = document.getElementById('passwordInput');
      const usernameInput = document.getElementById('usernameInput');
      const forgotBtn = document.getElementById('forgotBtn');
      const googleBtn = document.getElementById('googleBtn');
      const facebookBtn = document.getElementById('facebookBtn');
      const statusBanner = document.getElementById('statusBanner');

      function showMessage(text) {
        statusBanner.textContent = text;
        statusBanner.classList.add('visible');
      }

      function clearMessage() {
        statusBanner.textContent = '';
        statusBanner.classList.remove('visible');
      }

      function setMode(mode) {
        body.setAttribute('data-mode', mode);
        const isSignIn = mode === 'signin';
        tabLoginBtn.setAttribute('aria-selected', String(!isSignIn));
        tabSignInBtn.setAttribute('aria-selected', String(isSignIn));
        formTitle.textContent = isSignIn ? 'SIGN IN' : 'LOGIN';
        submitBtn.textContent = isSignIn ? 'SIGN IN' : 'LOGIN';
        clearMessage();
      }

      tabLoginBtn.addEventListener('click', function () {
        setMode('login');
      });

      tabSignInBtn.addEventListener('click', function () {
        setMode('signin');
      });

      authForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const mode = body.getAttribute('data-mode');
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
        const username = usernameInput ? usernameInput.value.trim() : '';

        if (!email || !password || (mode === 'signin' && !username)) {
          showMessage('Please fill in all required fields to continue.');
          return;
        }

        if (mode === 'signin') {
          showMessage('Account created for ' + email + '. Welcome aboard!');
        } else {
          showMessage('Successfully logged in as ' + email + '.');
        }
      });

      forgotBtn.addEventListener('click', function () {
        const email = emailInput.value.trim();
        if (!email) {
          showMessage('Enter your Email above first to receive a password reset link.');
          emailInput.focus();
        } else {
          showMessage('Password reset instructions sent to ' + email + '.');
        }
      });

      googleBtn.addEventListener('click', function () {
        showMessage('Redirecting to Google authentication...');
      });

      facebookBtn.addEventListener('click', function () {
        showMessage('Redirecting to Facebook authentication...');
      });
    })();
  </script>
</body>
</html>`;

app.get(['/', '/login', '/auth/login', '/extensions/nebula/preview/auth.php'], (_req, res) => {
  res.status(200).send(renderAuthPage('login'));
});

app.get(['/signup', '/register', '/auth/register'], (_req, res) => {
  res.status(200).send(renderAuthPage('signin'));
});

// Endpoint to inspect the raw Blade theme file if needed
app.get('/api/nebula-auth-theme', (_req, res) => {
  const bladePath = path.join(process.cwd(), 'nebula/views/wrapper/theme/auth.blade.php');
  if (fs.existsSync(bladePath)) {
    res.type('text/plain').send(fs.readFileSync(bladePath, 'utf-8'));
  } else {
    res.status(404).send('Not found');
  }
});

app.listen(PORT, '0.0.0.0', () => {
  console.log(`Server listening on http://0.0.0.0:${PORT}`);
});
