import express from 'express';
import path from 'path';
import fs from 'fs';

const app = express();
const PORT = 3000;

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve Nebula static assets at both /extensions/nebula and /nebula
app.use('/extensions/nebula', express.static(path.join(process.cwd(), 'nebula/public')));
app.use('/nebula', express.static(path.join(process.cwd(), 'nebula/public')));

function loadAuthBladeTemplate(): string {
  const bladePath = path.join(process.cwd(), 'nebula/views/wrapper/theme/auth.blade.php');
  const raw = fs.readFileSync(bladePath, 'utf8');
  return raw
    .replace(/@if\s*\(\s*Auth::check\(\)\s*!=\s*true\s*\)/g, '')
    .replace(/@endif/g, '');
}

function renderPterodactylAuthPage(mode: 'login' | 'register' = 'login'): string {
  const authBladeHtml = loadAuthBladeTemplate();

  const loginFieldsHtml = `
    <div>
      <label class="Label-sc-g780ms-0 dqMlen">Username or Email</label>
      <input type="text" name="user" class="Input-sc-19rce1w-0 fFYzlR" value="" />
    </div>
    <div class="LoginContainer___StyledDiv-sc-qtrnpk-1 iZBadu" style="margin-top: 1.5rem;">
      <div>
        <label class="Label-sc-g780ms-0 dqMlen">Password</label>
        <input type="password" name="password" class="Input-sc-19rce1w-0 fFYzlR" value="" />
      </div>
    </div>
    <div class="LoginContainer___StyledDiv2-sc-qtrnpk-2 bPrbAb" style="margin-top: 1.5rem;">
      <button type="submit" class="Button__ButtonStyle-sc-1qu1gou-0 cDkCmT">
        <span class="Button___StyledSpan-sc-1qu1gou-2">Login</span>
      </button>
    </div>
    <div class="LoginContainer___StyledDiv3-sc-qtrnpk-3 dqkKHi" style="margin-top: 1.5rem; text-align: center;">
      <a href="/auth/password" class="LoginContainer___StyledLink-sc-qtrnpk-4 cjgCjC">Forgot password?</a>
    </div>
  `;

  const registerFieldsHtml = `
    <div>
      <label class="Label-sc-g780ms-0 dqMlen">Email</label>
      <input type="email" name="email" class="Input-sc-19rce1w-0 fFYzlR" value="" />
    </div>
    <div style="margin-top: 1rem;">
      <label class="Label-sc-g780ms-0 dqMlen">Username</label>
      <input type="text" name="username" class="Input-sc-19rce1w-0 fFYzlR" value="" />
    </div>
    <div style="margin-top: 1rem;">
      <label class="Label-sc-g780ms-0 dqMlen">Password</label>
      <input type="password" name="password" class="Input-sc-19rce1w-0 fFYzlR" value="" />
    </div>
    <div style="margin-top: 1rem;">
      <label class="Label-sc-g780ms-0 dqMlen">Confirm Password</label>
      <input type="password" name="password_confirmation" class="Input-sc-19rce1w-0 fFYzlR" value="" />
    </div>
    <div class="LoginContainer___StyledDiv2-sc-qtrnpk-2 bPrbAb" style="margin-top: 1.5rem;">
      <button type="submit" class="Button__ButtonStyle-sc-1qu1gou-0 cDkCmT">
        <span class="Button___StyledSpan-sc-1qu1gou-2">Sign Up</span>
      </button>
    </div>
    <div class="LoginContainer___StyledDiv3-sc-qtrnpk-3 dqkKHi" style="margin-top: 1.5rem; text-align: center;">
      <a href="/auth/password" class="LoginContainer___StyledLink-sc-qtrnpk-4 cjgCjC">Forgot password?</a>
    </div>
  `;

  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#660e36" />
  <title>Berry Geometric Auth UI</title>
  <meta name="description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <meta property="og:title" content="Berry Geometric Auth UI" />
  <meta property="og:description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <link rel="stylesheet" href="/extensions/nebula/libraries/extendedStylesAuth.css" />
  <link rel="stylesheet" href="/extensions/nebula/libraries/authWatermark.css" />
  <style id="simulated-pterodactyl-and-nebula-base">
    :root {
      --pageBackground: #141414;
      --pageButtonDefault: #3a7bd5;
      --pageButtonHover: #4e8be0;
      --borderRadius: 10px;
      --authA: #0e0e0e;
      --authB: #181818;
      --authF: #3a7bd5;
    }
    .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
      display: flex;
      width: 100%;
    }
    .LoginFormContainer___StyledDiv-sc-cyh04c-3 {
      display: flex;
      width: 100%;
      background: #fff;
    }
    .cDkCmT, .style-module_3kBDV_wo, .style-module_4LBM1DKx.style-module_3kBDV_wo {
      background-color: var(--pageButtonDefault) !important;
      border: none !important;
      width: 100%;
    }
  </style>
  ${authBladeHtml}
  <link rel="stylesheet" href="/extensions/nebula/libraries/fixUserInterfaceBugs.css" />
  <link rel="stylesheet" href="/extensions/nebula/libraries/borderRadius.css" />
  <link rel="stylesheet" href="/extensions/nebula/libraries/extendedStyles.css" />
  <link rel="stylesheet" href="/extensions/nebula/libraries/patterns.css" />
</head>
<body class="${mode === 'register' ? 'hx-auth-register' : ''}">
  <div class="nebula-auth-wallpaper polka-dots" style="z-index: -3;"></div>
  <div class="nebula-auth-backdrop" style="z-index: -4;"></div>

  <div id="app">
    <div class="ProgressBar___StyledDiv-sc-14ayc3f-1 jleFWY"></div>
    <div class="App___StyledDiv-sc-2l91w7-0 fnfeQw">
      <div class="LoginFormContainer__Container-sc-cyh04c-0 cEWvSE">
        <h2 class="LoginFormContainer___StyledH-sc-cyh04c-1 hpqfJy">Login to Continue</h2>
        <form id="pterodactyl-auth-form" action="/dashboard" method="GET" onsubmit="event.preventDefault(); window.location.href = '/dashboard';">
          <div class="LoginFormContainer___StyledDiv-sc-cyh04c-3">
            <div class="LoginFormContainer___StyledDiv2-sc-cyh04c-4">
              <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3C/svg%3E" alt="Pterodactyl" />
            </div>
            <div class="LoginFormContainer___StyledDiv3-sc-cyh04c-6">
              ${mode === 'register' ? registerFieldsHtml : loginFieldsHtml}
            </div>
          </div>
        </form>
        <div class="custom-register-addon-wrapper">
          ${
            mode === 'register'
              ? '<a href="/auth/login">Already registered? Login here.</a>'
              : '<a href="#register-inline">Register here.</a>'
          }
        </div>
        <p class="LoginFormContainer___StyledP-sc-cyh04c-7 llNNfK">© 2015 - 2026 Pterodactyl Software</p>
      </div>
    </div>
  </div>
</body>
</html>`;
}

function renderBerryManagementDashboard(): string {
  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#2d081a" />
  <title>Berry Geometric Auth UI — Management Panel</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root {
      --hx-bg-deep: #1a0611;
      --hx-bg-stage: #240716;
      --hx-card-bg: #ffffff;
      --hx-berry-dark: #7d1e4d;
      --hx-berry-mid: #9c3062;
      --hx-berry-soft: #b55784;
      --hx-pink-base: #e2abc4;
      --hx-pink-light: #f9f1f5;
      --hx-text-dark: #1e1e1e;
      --hx-text-muted: #7e8287;
      --hx-line-gray: #e9dfe4;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
      background: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%);
      color: var(--hx-text-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    /* Main Split App Shell matching the Login Card's Berry Geometric + Crisp White aesthetic */
    .hx-panel-shell {
      width: 100%;
      max-width: 1380px;
      height: calc(100vh - 40px);
      min-height: 620px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 30px 80px rgba(18, 2, 10, 0.58);
      display: flex;
      overflow: hidden;
      position: relative;
    }

    /* =========================================================
       LEFT GEOMETRIC BERRY SIDEBAR (Matches Login Card Left Panel)
       ========================================================= */
    .hx-sidebar {
      position: relative;
      width: 260px;
      min-width: 260px;
      height: 100%;
      background: #e2abc4;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      user-select: none;
      z-index: 10;
    }

    .hx-sidebar-art {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
    }

    .hx-sidebar-top {
      position: relative;
      z-index: 5;
      padding: 28px 20px 18px 22px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .hx-brand-avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: radial-gradient(circle at 38% 22%, #e5bed2 0%, #c3749b 38%, #9b3567 76%, #7b1d4b 100%);
      border: 1.5px solid rgba(255, 255, 255, 0.85);
      box-shadow: 0 6px 14px rgba(72, 9, 38, 0.38), inset 0 2px 4px rgba(255, 255, 255, 0.45);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 20px;
      flex-shrink: 0;
    }

    .hx-brand-text h1 {
      font-size: 16px;
      font-weight: 700;
      color: #ffffff;
      letter-spacing: 0.04em;
      text-shadow: 0 2px 6px rgba(61, 5, 31, 0.35);
      line-height: 1.2;
    }

    .hx-brand-text span {
      font-size: 11px;
      font-weight: 500;
      color: rgba(255, 255, 255, 0.88);
      letter-spacing: 0.02em;
    }

    /* Curved Seam Navigation Tabs (Same Concave Fillet Protrusion as LOGIN / SIGN UP!) */
    .hx-nav-seam {
      position: relative;
      z-index: 5;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      padding: 6px 0;
      flex: 1;
    }

    .hx-nav-indicator {
      position: absolute;
      right: 0;
      top: 6px;
      width: 214px;
      height: 48px;
      background: #ffffff;
      border-radius: 999px 0 0 999px;
      transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1);
      pointer-events: none;
      z-index: 1;
    }

    .hx-nav-indicator::before {
      content: "";
      position: absolute;
      right: 0;
      top: -22px;
      width: 22px;
      height: 22px;
      border-bottom-right-radius: 22px;
      box-shadow: 11px 11px 0 11px #ffffff;
    }

    .hx-nav-indicator::after {
      content: "";
      position: absolute;
      right: 0;
      bottom: -22px;
      width: 22px;
      height: 22px;
      border-top-right-radius: 22px;
      box-shadow: 11px -11px 0 11px #ffffff;
    }

    .hx-nav-btn {
      position: relative;
      z-index: 2;
      width: 214px;
      height: 48px;
      margin-bottom: 6px;
      border: 0;
      background: transparent;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0 18px 0 22px;
      font-family: 'Poppins', sans-serif;
      font-size: 12.5px;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: #ffffff;
      cursor: pointer;
      transition: color 0.22s ease;
      text-align: left;
    }

    .hx-nav-btn i {
      font-size: 16px;
      width: 20px;
      text-align: center;
    }

    .hx-nav-btn.active {
      color: #111111;
    }

    .hx-nav-btn.active i {
      color: #7d1e4d;
    }

    .hx-sidebar-footer {
      position: relative;
      z-index: 5;
      padding: 16px 20px 22px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid rgba(255, 255, 255, 0.22);
      background: rgba(75, 8, 38, 0.18);
    }

    .hx-user-chip {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ffffff;
    }

    .hx-user-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #34d399;
      box-shadow: 0 0 8px #34d399;
    }

    .hx-user-chip div {
      font-size: 12px;
      font-weight: 600;
      line-height: 1.2;
    }

    .hx-user-chip small {
      font-size: 10.5px;
      opacity: 0.82;
      display: block;
    }

    .hx-logout-btn {
      border: 1px solid rgba(255, 255, 255, 0.45);
      background: rgba(255, 255, 255, 0.14);
      color: #ffffff;
      border-radius: 999px;
      padding: 6px 14px;
      font-family: 'Poppins', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      text-decoration: none;
      transition: background 0.18s ease, transform 0.18s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .hx-logout-btn:hover {
      background: #ffffff;
      color: #7d1e4d;
      transform: translateY(-1px);
    }

    /* =========================================================
       RIGHT WHITE MANAGEMENT WORKSPACE
       ========================================================= */
    .hx-workspace {
      flex: 1;
      height: 100%;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
    }

    /* Top Header Bar inside Right Panel */
    .hx-topbar {
      height: 78px;
      padding: 0 36px;
      border-bottom: 1px solid #f2eef0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-shrink: 0;
    }

    .hx-topbar-left {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .hx-server-badge {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 38% 22%, #e5bed2 0%, #c3749b 38%, #9b3567 76%, #7b1d4b 100%);
      border: 1.5px solid rgba(255, 255, 255, 0.85);
      box-shadow: 0 5px 12px rgba(120, 24, 70, 0.28);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-size: 18px;
    }

    .hx-topbar-title h2 {
      font-size: 18px;
      font-weight: 700;
      color: #7d1e4d;
      letter-spacing: 0.02em;
    }

    .hx-topbar-meta {
      font-size: 12px;
      color: #7e8287;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .hx-status-dot {
      display: inline-block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
    }

    .hx-power-controls {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .hx-pill-btn {
      border: 0;
      border-radius: 999px;
      background: linear-gradient(180deg, #b55784 0%, #a44673 100%);
      color: #ffffff;
      font-family: 'Poppins', sans-serif;
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      height: 36px;
      padding: 0 24px;
      box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32);
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 7px;
      transition: transform 0.16s ease, filter 0.16s ease, box-shadow 0.16s ease;
    }

    .hx-pill-btn:hover {
      filter: brightness(1.06);
      transform: translateY(-1px);
      box-shadow: 0 7px 18px rgba(174, 80, 125, 0.42);
    }

    .hx-pill-btn.outline {
      background: #fdf8fa;
      color: #7d1e4d;
      border: 1.5px solid #dcb3c6;
      box-shadow: none;
    }

    .hx-pill-btn.outline:hover {
      background: #f7eaf0;
    }

    .hx-pill-btn.danger {
      background: linear-gradient(180deg, #d9486b 0%, #b82d50 100%);
    }

    /* Main Scrollable Content Area */
    .hx-content {
      flex: 1;
      padding: 26px 36px;
      overflow-y: auto;
    }

    .hx-tab-pane {
      display: none;
      animation: hxFadeIn 0.22s ease;
    }

    .hx-tab-pane.active {
      display: block;
    }

    @keyframes hxFadeIn {
      from { opacity: 0; transform: translateY(4px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Metric Strip */
    .hx-metrics-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 24px;
    }

    .hx-metric-card {
      background: #fdf9fb;
      border: 1px solid #efe4ea;
      border-radius: 14px;
      padding: 16px 18px;
      display: flex;
      align-items: center;
      gap: 14px;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .hx-metric-card:hover {
      border-color: #d79cb8;
      box-shadow: 0 8px 22px rgba(125, 30, 77, 0.08);
    }

    .hx-metric-icon {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: radial-gradient(circle at 38% 22%, #e5bed2 0%, #c3749b 40%, #9b3567 80%, #7b1d4b 100%);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 17px;
      flex-shrink: 0;
      box-shadow: 0 4px 10px rgba(125, 30, 77, 0.25);
    }

    .hx-metric-info small {
      display: block;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      color: #8b8f96;
    }

    .hx-metric-info strong {
      font-size: 16px;
      font-weight: 700;
      color: #1e1e1e;
    }

    /* Server List Cards */
    .hx-section-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
    }

    .hx-section-header h3 {
      font-size: 15px;
      font-weight: 700;
      color: #7d1e4d;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    .hx-server-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 18px;
    }

    .hx-server-card {
      background: #ffffff;
      border: 1.5px solid #ece2e7;
      border-radius: 16px;
      padding: 20px 22px;
      box-shadow: 0 10px 26px rgba(125, 30, 77, 0.06);
      transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
      cursor: pointer;
    }

    .hx-server-card:hover {
      transform: translateY(-2px);
      border-color: #b55784;
      box-shadow: 0 14px 32px rgba(125, 30, 77, 0.13);
    }

    .hx-server-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }

    .hx-server-card-title {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .hx-server-card-title h4 {
      font-size: 15px;
      font-weight: 700;
      color: #1e1e1e;
    }

    .hx-server-card-title span {
      font-size: 12px;
      color: #8b8f96;
      font-family: 'JetBrains Mono', monospace;
    }

    .hx-server-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      padding-top: 12px;
      border-top: 1px solid #f2eef0;
      font-size: 12px;
      color: #555;
    }

    .hx-server-stats div strong {
      display: block;
      color: #7d1e4d;
      font-size: 13px;
    }

    /* Live Terminal Console Box */
    .hx-console-box {
      background: #190610;
      border: 1.5px solid #9c3062;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 14px 34px rgba(25, 6, 16, 0.24);
    }

    .hx-console-header {
      background: linear-gradient(90deg, #7d1e4d 0%, #9c3062 100%);
      padding: 10px 18px;
      color: #ffffff;
      font-size: 12px;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .hx-console-logs {
      height: 250px;
      padding: 16px 20px;
      font-family: 'JetBrains Mono', monospace;
      font-size: 12.5px;
      line-height: 1.65;
      color: #f5d8e6;
      overflow-y: auto;
    }

    .hx-console-logs .log-time { color: #c3749b; }
    .hx-console-logs .log-info { color: #6ee7b7; }
    .hx-console-logs .log-warn { color: #fcd34d; }

    .hx-console-input-row {
      display: flex;
      align-items: center;
      background: #240917;
      border-top: 1px solid rgba(226, 171, 196, 0.2);
      padding: 8px 14px;
      gap: 10px;
    }

    .hx-console-input-row span {
      color: #e2abc4;
      font-family: 'JetBrains Mono', monospace;
      font-weight: 700;
    }

    .hx-console-input {
      flex: 1;
      background: transparent;
      border: 0;
      outline: none;
      color: #ffffff;
      font-family: 'JetBrains Mono', monospace;
      font-size: 13px;
    }

    /* Underline Inputs matching Login/Sign Up Page */
    .hx-underline-field {
      position: relative;
      margin-bottom: 22px;
    }

    .hx-underline-field label {
      display: block;
      font-size: 11.5px;
      font-weight: 600;
      color: #7d1e4d;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      margin-bottom: 4px;
    }

    .hx-underline-input {
      width: 100%;
      height: 40px;
      border: 0;
      border-bottom: 1.5px solid #9a9ea4;
      background: transparent;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      color: #2b2b2b;
      padding: 4px 10px 8px 0;
      outline: none;
      transition: border-color 0.2s ease;
    }

    .hx-underline-input:focus {
      border-bottom-color: #7d1e4d;
    }

    /* Table rows for Files / Databases / Backups */
    .hx-table-list {
      border: 1px solid #efe4ea;
      border-radius: 14px;
      overflow: hidden;
    }

    .hx-table-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 13px 18px;
      border-bottom: 1px solid #f5edf1;
      font-size: 13px;
      transition: background 0.16s ease;
    }

    .hx-table-row:last-child {
      border-bottom: 0;
    }

    .hx-table-row:hover {
      background: #fdf7fa;
    }

    .hx-table-row-left {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 500;
    }

    .hx-table-row-left i {
      color: #9c3062;
      font-size: 16px;
    }

    /* Bottom Status Bar matching the Login Card's Bottom Social Bar */
    .hx-bottom-bar {
      height: 64px;
      background: #ffffff;
      border-top: 1px solid #f2eef0;
      box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 36px;
      font-size: 12px;
      color: #222222;
      font-weight: 600;
      flex-shrink: 0;
    }

    .hx-bottom-links {
      display: flex;
      align-items: center;
      gap: 22px;
    }

    .hx-bottom-links a {
      color: #7d1e4d;
      text-decoration: none;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .hx-bottom-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="hx-panel-shell">
    <!-- Left Geometric Berry Sidebar matching the Login/Sign Up Card -->
    <aside class="hx-sidebar">
      <svg class="hx-sidebar-art" viewBox="0 0 312 550" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="sb-shadow-upper" x="-25%" y="-25%" width="150%" height="150%">
            <feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#3d051f" flood-opacity="0.34"/>
          </filter>
          <filter id="sb-shadow-lower" x="-25%" y="-25%" width="150%" height="150%">
            <feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#3d051f" flood-opacity="0.28"/>
          </filter>
          <filter id="sb-shadow-corner" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="3" dy="-3" stdDeviation="4" flood-color="#480725" flood-opacity="0.20"/>
          </filter>
        </defs>
        <rect width="312" height="550" fill="#e2abc4"/>
        <polygon points="56,215 312,471 312,550 0,550 0,271" fill="#9c3062" filter="url(#sb-shadow-lower)"/>
        <polygon points="0,268 282,550 0,550" fill="#b95080" filter="url(#sb-shadow-corner)"/>
        <polygon points="188,0 271,0 0,271 0,188" fill="#b24879" filter="url(#sb-shadow-upper)"/>
        <polygon points="0,0 188,0 0,188" fill="#902859"/>
      </svg>

      <div class="hx-sidebar-top">
        <div class="hx-brand-avatar">
          <i class="bi bi-hdd-rack"></i>
        </div>
        <div class="hx-brand-text">
          <h1>HELZERX</h1>
          <span>Server Management</span>
        </div>
      </div>

      <nav class="hx-nav-seam">
        <div class="hx-nav-indicator" id="navIndicator"></div>
        <button type="button" class="hx-nav-btn active" onclick="switchTab('overview', 0, this)">
          <i class="bi bi-grid-1x2-fill"></i>
          <span>SERVERS</span>
        </button>
        <button type="button" class="hx-nav-btn" onclick="switchTab('console', 1, this)">
          <i class="bi bi-terminal-fill"></i>
          <span>CONSOLE</span>
        </button>
        <button type="button" class="hx-nav-btn" onclick="switchTab('files', 2, this)">
          <i class="bi bi-folder-fill"></i>
          <span>FILE MANAGER</span>
        </button>
        <button type="button" class="hx-nav-btn" onclick="switchTab('databases', 3, this)">
          <i class="bi bi-database-fill"></i>
          <span>DATABASES</span>
        </button>
        <button type="button" class="hx-nav-btn" onclick="switchTab('backups', 4, this)">
          <i class="bi bi-cloud-arrow-up-fill"></i>
          <span>BACKUPS</span>
        </button>
        <button type="button" class="hx-nav-btn" onclick="switchTab('settings', 5, this)">
          <i class="bi bi-sliders"></i>
          <span>SETTINGS</span>
        </button>
      </nav>

      <div class="hx-sidebar-footer">
        <div class="hx-user-chip">
          <span class="hx-user-dot"></span>
          <div>
            Admin User
            <small>Root Administrator</small>
          </div>
        </div>
        <a href="/auth/login" class="hx-logout-btn">
          <i class="bi bi-box-arrow-left"></i>
          Auth Page
        </a>
      </div>
    </aside>

    <!-- Right White Management Workspace -->
    <main class="hx-workspace">
      <header class="hx-topbar">
        <div class="hx-topbar-left">
          <div class="hx-server-badge">
            <i class="bi bi-cpu"></i>
          </div>
          <div class="hx-topbar-title">
            <h2 id="activeServerTitle">HX-Velocity-Proxy-01</h2>
            <div class="hx-topbar-meta">
              <span class="hx-status-dot" id="powerDot"></span>
              <span id="powerStatusText">Online</span>
              <span>·</span>
              <span>node01.helzerx.cyou:25565</span>
              <span>·</span>
              <span>Uptime: 14d 6h 42m</span>
            </div>
          </div>
        </div>

        <div class="hx-power-controls">
          <button type="button" class="hx-pill-btn" onclick="sendPowerAction('start')">
            <i class="bi bi-play-fill"></i> START
          </button>
          <button type="button" class="hx-pill-btn outline" onclick="sendPowerAction('restart')">
            <i class="bi bi-arrow-clockwise"></i> RESTART
          </button>
          <button type="button" class="hx-pill-btn danger" onclick="sendPowerAction('stop')">
            <i class="bi bi-stop-fill"></i> STOP
          </button>
        </div>
      </header>

      <section class="hx-content">
        <!-- Resource Metrics Bar -->
        <div class="hx-metrics-grid">
          <div class="hx-metric-card">
            <div class="hx-metric-icon"><i class="bi bi-cpu"></i></div>
            <div class="hx-metric-info">
              <small>CPU Load</small>
              <strong id="cpuMetric">24.8% / 400%</strong>
            </div>
          </div>
          <div class="hx-metric-card">
            <div class="hx-metric-icon"><i class="bi bi-memory"></i></div>
            <div class="hx-metric-info">
              <small>Memory</small>
              <strong id="ramMetric">6.4 GB / 16 GB</strong>
            </div>
          </div>
          <div class="hx-metric-card">
            <div class="hx-metric-icon"><i class="bi bi-nvme"></i></div>
            <div class="hx-metric-info">
              <small>NVMe Storage</small>
              <strong>18.2 GB / 80 GB</strong>
            </div>
          </div>
          <div class="hx-metric-card">
            <div class="hx-metric-icon"><i class="bi bi-hdd-network"></i></div>
            <div class="hx-metric-info">
              <small>Network I/O</small>
              <strong>142 Mbps ↓ · 88 Mbps ↑</strong>
            </div>
          </div>
        </div>

        <!-- TAB 1: SERVERS OVERVIEW -->
        <div class="hx-tab-pane active" id="tab-overview">
          <div class="hx-section-header">
            <h3>Active Game & Cloud Nodes</h3>
            <button type="button" class="hx-pill-btn" onclick="switchTab('console', 1, document.querySelectorAll('.hx-nav-btn')[1])">
              OPEN LIVE CONSOLE
            </button>
          </div>
          <div class="hx-server-grid">
            <div class="hx-server-card" onclick="selectServer('HX-Velocity-Proxy-01', 'node01.helzerx.cyou:25565', '24.8% / 400%', '6.4 GB / 16 GB')">
              <div class="hx-server-card-top">
                <div class="hx-server-card-title">
                  <div class="hx-metric-icon"><i class="bi bi-hdd-network"></i></div>
                  <div>
                    <h4>HX-Velocity-Proxy-01</h4>
                    <span>node01.helzerx.cyou:25565</span>
                  </div>
                </div>
                <span class="hx-pill-btn" style="height:28px; padding:0 14px; font-size:10.5px;">ONLINE</span>
              </div>
              <div class="hx-server-stats">
                <div>CPU Load<strong>24.8%</strong></div>
                <div>Memory<strong>6.4 / 16 GB</strong></div>
                <div>Disk<strong>18.2 / 80 GB</strong></div>
              </div>
            </div>

            <div class="hx-server-card" onclick="selectServer('Survival-SMP-Paper-1.21', 'node01.helzerx.cyou:25566', '68.4% / 800%', '14.2 GB / 24 GB')">
              <div class="hx-server-card-top">
                <div class="hx-server-card-title">
                  <div class="hx-metric-icon"><i class="bi bi-boxes"></i></div>
                  <div>
                    <h4>Survival-SMP-Paper-1.21</h4>
                    <span>node01.helzerx.cyou:25566</span>
                  </div>
                </div>
                <span class="hx-pill-btn" style="height:28px; padding:0 14px; font-size:10.5px;">ONLINE</span>
              </div>
              <div class="hx-server-stats">
                <div>CPU Load<strong>68.4%</strong></div>
                <div>Memory<strong>14.2 / 24 GB</strong></div>
                <div>Disk<strong>42.8 / 120 GB</strong></div>
              </div>
            </div>

            <div class="hx-server-card" onclick="selectServer('HelzerX-Discord-Cluster', 'bot01.helzerx.cyou:8080', '8.2% / 200%', '1.1 GB / 4 GB')">
              <div class="hx-server-card-top">
                <div class="hx-server-card-title">
                  <div class="hx-metric-icon"><i class="bi bi-robot"></i></div>
                  <div>
                    <h4>HelzerX-Discord-Cluster</h4>
                    <span>bot01.helzerx.cyou:8080</span>
                  </div>
                </div>
                <span class="hx-pill-btn" style="height:28px; padding:0 14px; font-size:10.5px;">ONLINE</span>
              </div>
              <div class="hx-server-stats">
                <div>CPU Load<strong>8.2%</strong></div>
                <div>Memory<strong>1.1 / 4 GB</strong></div>
                <div>Disk<strong>3.4 / 20 GB</strong></div>
              </div>
            </div>

            <div class="hx-server-card" onclick="selectServer('MariaDB-Production-Core', 'db01.helzerx.cyou:3306', '19.0% / 400%', '4.8 GB / 8 GB')">
              <div class="hx-server-card-top">
                <div class="hx-server-card-title">
                  <div class="hx-metric-icon"><i class="bi bi-database-check"></i></div>
                  <div>
                    <h4>MariaDB-Production-Core</h4>
                    <span>db01.helzerx.cyou:3306</span>
                  </div>
                </div>
                <span class="hx-pill-btn" style="height:28px; padding:0 14px; font-size:10.5px;">ONLINE</span>
              </div>
              <div class="hx-server-stats">
                <div>CPU Load<strong>19.0%</strong></div>
                <div>Memory<strong>4.8 / 8 GB</strong></div>
                <div>Disk<strong>29.5 / 60 GB</strong></div>
              </div>
            </div>
          </div>
        </div>

        <!-- TAB 2: LIVE CONSOLE -->
        <div class="hx-tab-pane" id="tab-console">
          <div class="hx-console-box">
            <div class="hx-console-header">
              <span><i class="bi bi-terminal"></i> Pterodactyl Wings Daemon — Live Container Stream</span>
              <span>Container ID: hx_94f82a1c</span>
            </div>
            <div class="hx-console-logs" id="consoleLogs">
              <div><span class="log-time">[04:20:01]</span> <span class="log-info">[Pterodactyl Daemon]:</span> Checking server disk space usage, this could take a few seconds...</div>
              <div><span class="log-time">[04:20:02]</span> <span class="log-info">[Pterodactyl Daemon]:</span> Updating process configuration files...</div>
              <div><span class="log-time">[04:20:03]</span> <span class="log-info">[Server thread/INFO]:</span> Starting Velocity 3.3.0-SNAPSHOT (git-b4892d1)</div>
              <div><span class="log-time">[04:20:04]</span> <span class="log-info">[Server thread/INFO]:</span> Loaded 14 plugins: luckperms, spark, limboapi, helzerx-core, viaversion</div>
              <div><span class="log-time">[04:20:05]</span> <span class="log-info">[Server thread/INFO]:</span> Listening on /0.0.0.0:25565 — Server marked as ONLINE!</div>
            </div>
            <form class="hx-console-input-row" onsubmit="handleConsoleCommand(event)">
              <span>container@pterodactyl~</span>
              <input type="text" id="consoleInput" class="hx-console-input" placeholder="Type a server command (e.g. list, spark, help, say Hello)..." autocomplete="off" />
              <button type="submit" class="hx-pill-btn" style="height:30px; padding:0 18px;">SEND</button>
            </form>
          </div>
        </div>

        <!-- TAB 3: FILE MANAGER -->
        <div class="hx-tab-pane" id="tab-files">
          <div class="hx-section-header">
            <h3>/home/container</h3>
            <button type="button" class="hx-pill-btn" onclick="createNewFolder()">+ NEW DIRECTORY</button>
          </div>
          <div class="hx-table-list" id="fileList">
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-folder-fill"></i> <span>plugins</span></div>
              <span>Directory · 4.2 MB</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-folder-fill"></i> <span>logs</span></div>
              <span>Directory · 18.4 MB</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-file-earmark-code-fill"></i> <span>velocity.toml</span></div>
              <span>14.8 KB · Edited 2h ago</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-file-earmark-lock-fill"></i> <span>forwarding.secret</span></div>
              <span>64 B · Protected</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-file-earmark-zip-fill"></i> <span>velocity-3.3.0.jar</span></div>
              <span>42.1 MB · Executable</span>
            </div>
          </div>
        </div>

        <!-- TAB 4: DATABASES -->
        <div class="hx-tab-pane" id="tab-databases">
          <div class="hx-section-header">
            <h3>MySQL / MariaDB Instances</h3>
            <button type="button" class="hx-pill-btn" onclick="createDatabase()">+ NEW DATABASE</button>
          </div>
          <div class="hx-table-list" id="dbList">
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-database-fill-lock"></i> <span>s1_helzerx_perms</span></div>
              <span>Endpoint: 127.0.0.1:3306 · User: u1_hx89a2</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-database-fill-lock"></i> <span>s1_helzerx_economy</span></div>
              <span>Endpoint: 127.0.0.1:3306 · User: u1_hx44c9</span>
            </div>
          </div>
        </div>

        <!-- TAB 5: BACKUPS -->
        <div class="hx-tab-pane" id="tab-backups">
          <div class="hx-section-header">
            <h3>Automated Cloud Snapshots (2 / 5 Used)</h3>
            <button type="button" class="hx-pill-btn" onclick="createBackup()">+ CREATE BACKUP</button>
          </div>
          <div class="hx-table-list" id="backupList">
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-archive-fill"></i> <span>pre-update-snapshot-2026-09-27.tar.gz</span></div>
              <span>1.84 GB · SHA256 Verified</span>
            </div>
            <div class="hx-table-row">
              <div class="hx-table-row-left"><i class="bi bi-archive-fill"></i> <span>daily-auto-backup-2026-09-26.tar.gz</span></div>
              <span>1.79 GB · SHA256 Verified</span>
            </div>
          </div>
        </div>

        <!-- TAB 6: SETTINGS -->
        <div class="hx-tab-pane" id="tab-settings">
          <div class="hx-section-header">
            <h3>Server Configuration & SFTP Details</h3>
          </div>
          <div style="max-width: 540px;">
            <div class="hx-underline-field">
              <label>Server Name</label>
              <input type="text" id="serverNameInput" class="hx-underline-input" value="HX-Velocity-Proxy-01" />
            </div>
            <div class="hx-underline-field">
              <label>SFTP Connection Address</label>
              <input type="text" class="hx-underline-input" value="sftp://node01.helzerx.cyou:2022" readonly />
            </div>
            <div class="hx-underline-field">
              <label>Startup Invocation Command</label>
              <input type="text" class="hx-underline-input" value="java -Xms1024M -Xmx16384M -XX:+UseG1GC -jar velocity.jar" />
            </div>
            <button type="button" class="hx-pill-btn" onclick="saveServerSettings()">SAVE CHANGES</button>
          </div>
        </div>
      </section>

      <footer class="hx-bottom-bar">
        <span>HelzerX Berry Geometric Panel · Nebula v2.0-1</span>
        <div class="hx-bottom-links">
          <a href="/auth/login"><i class="bi bi-person-Vcard"></i> Login Page</a>
          <a href="/auth/register"><i class="bi bi-person-plus"></i> Sign Up Page</a>
        </div>
      </footer>
    </main>
  </div>

  <script>
    function switchTab(tabId, index, btnEl) {
      document.querySelectorAll('.hx-tab-pane').forEach(function (el) {
        el.classList.remove('active');
      });
      var target = document.getElementById('tab-' + tabId);
      if (target) target.classList.add('active');

      document.querySelectorAll('.hx-nav-btn').forEach(function (b) {
        b.classList.remove('active');
      });
      if (btnEl) btnEl.classList.add('active');

      var indicator = document.getElementById('navIndicator');
      if (indicator) {
        indicator.style.transform = 'translateY(' + (index * 54) + 'px)';
      }
    }

    function selectServer(name, ip, cpu, ram) {
      document.getElementById('activeServerTitle').textContent = name;
      document.getElementById('cpuMetric').textContent = cpu;
      document.getElementById('ramMetric').textContent = ram;
      document.getElementById('serverNameInput').value = name;
      switchTab('console', 1, document.querySelectorAll('.hx-nav-btn')[1]);
    }

    function sendPowerAction(action) {
      var dot = document.getElementById('powerDot');
      var txt = document.getElementById('powerStatusText');
      var logs = document.getElementById('consoleLogs');
      var now = new Date().toTimeString().slice(0, 8);

      if (action === 'stop') {
        dot.style.background = '#f43f5e';
        txt.textContent = 'Offline';
        logs.innerHTML += '<div><span class="log-time">[' + now + ']</span> <span class="log-warn">[Pterodactyl Daemon]:</span> Sending SIGTERM to container... Server stopped.</div>';
      } else if (action === 'restart') {
        dot.style.background = '#f59e0b';
        txt.textContent = 'Restarting...';
        logs.innerHTML += '<div><span class="log-time">[' + now + ']</span> <span class="log-warn">[Pterodactyl Daemon]:</span> Restarting server container...</div>';
        setTimeout(function () {
          dot.style.background = '#10b981';
          txt.textContent = 'Online';
        }, 900);
      } else {
        dot.style.background = '#10b981';
        txt.textContent = 'Online';
        logs.innerHTML += '<div><span class="log-time">[' + now + ']</span> <span class="log-info">[Pterodactyl Daemon]:</span> Container boot sequence completed — Server is ONLINE.</div>';
      }
      logs.scrollTop = logs.scrollHeight;
    }

    function handleConsoleCommand(e) {
      e.preventDefault();
      var input = document.getElementById('consoleInput');
      var cmd = input.value.trim();
      if (!cmd) return;
      var logs = document.getElementById('consoleLogs');
      var now = new Date().toTimeString().slice(0, 8);
      logs.innerHTML += '<div><span class="log-time">[' + now + ']</span> <strong>&gt; ' + cmd.replace(/</g, '&lt;') + '</strong></div>';
      logs.innerHTML += '<div><span class="log-time">[' + now + ']</span> <span class="log-info">[Server thread/INFO]:</span> Executed command "' + cmd.replace(/</g, '&lt;') + '" successfully (TPS: 20.0).</div>';
      input.value = '';
      logs.scrollTop = logs.scrollHeight;
    }

    function createNewFolder() {
      var list = document.getElementById('fileList');
      var row = document.createElement('div');
      row.className = 'hx-table-row';
      row.innerHTML = '<div class="hx-table-row-left"><i class="bi bi-folder-fill"></i> <span>backups_custom_' + Math.floor(Math.random() * 90 + 10) + '</span></div><span>Directory · Just now</span>';
      list.insertBefore(row, list.firstChild);
    }

    function createDatabase() {
      var list = document.getElementById('dbList');
      var row = document.createElement('div');
      row.className = 'hx-table-row';
      var id = Math.floor(Math.random() * 900 + 100);
      row.innerHTML = '<div class="hx-table-row-left"><i class="bi bi-database-fill-lock"></i> <span>s1_helzerx_node_' + id + '</span></div><span>Endpoint: 127.0.0.1:3306 · User: u1_hx' + id + '</span>';
      list.appendChild(row);
    }

    function createBackup() {
      var list = document.getElementById('backupList');
      var row = document.createElement('div');
      row.className = 'hx-table-row';
      var now = new Date().toISOString().slice(0, 10);
      row.innerHTML = '<div class="hx-table-row-left"><i class="bi bi-archive-fill"></i> <span>manual-snapshot-' + now + '.tar.gz</span></div><span>1.85 GB · Just created</span>';
      list.insertBefore(row, list.firstChild);
    }

    function saveServerSettings() {
      var newName = document.getElementById('serverNameInput').value.trim();
      if (newName) {
        document.getElementById('activeServerTitle').textContent = newName;
      }
    }
  </script>
</body>
</html>`;
}

app.get('/', (_req, res) => {
  res.status(200).send(renderPterodactylAuthPage('login'));
});

app.get('/login', (_req, res) => {
  res.status(200).send(renderPterodactylAuthPage('login'));
});

app.get('/auth/login', (_req, res) => {
  res.status(200).send(renderPterodactylAuthPage('login'));
});

app.get('/auth/register', (_req, res) => {
  res.status(200).send(renderPterodactylAuthPage('register'));
});

app.get('/auth/password', (_req, res) => {
  res.status(200).send(renderPterodactylAuthPage('login'));
});

app.get('/dashboard', (_req, res) => {
  res.status(200).send(renderBerryManagementDashboard());
});

app.get(['/auth/modules/google', '/auth/modules/facebook'], (_req, res) => {
  res.redirect('/dashboard');
});

app.listen(PORT, '0.0.0.0', () => {
  console.log(`Server running at http://0.0.0.0:${PORT}`);
});
