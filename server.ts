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
        <span class="Button___StyledSpan-sc-1qu1gou-2">Sign In</span>
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
  <meta name="theme-color" content="#681038" />
  <title>Berry Geometric Auth UI</title>
  <meta name="description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <meta property="og:title" content="Berry Geometric Auth UI" />
  <meta property="og:description" content="Pixel-faithful Sign In and Sign Up authentication interface featuring a layered berry geometric ribbon panel, curved seam tab switcher, glossy avatar badge, and social login bar." />
  <link rel="stylesheet" href="/extensions/nebula/libraries/extendedStylesAuth.css" />
  <link rel="stylesheet" href="/extensions/nebula/libraries/authWatermark.css" />
  <!-- Simulate Nebula variables & panel.blade.php rules that previously caused conflicts -->
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
    /* Default Pterodactyl LoginFormContainer flex classes */
    .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
      display: flex;
      width: 100%;
    }
    .LoginFormContainer___StyledDiv-sc-cyh04c-3 {
      display: flex;
      width: 100%;
      background: #fff;
    }
    /* Conflicting panel.blade.php rule that previously turned the button blue */
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
  <!-- Simulated Nebula background wallpaper with polka dots to verify complete stage override -->
  <div class="nebula-auth-wallpaper polka-dots" style="z-index: -3;"></div>
  <div class="nebula-auth-backdrop" style="z-index: -4;"></div>

  <div id="app">
    <div class="ProgressBar___StyledDiv-sc-14ayc3f-1 jleFWY"></div>
    <div class="App___StyledDiv-sc-2l91w7-0 fnfeQw">
      <div class="LoginFormContainer__Container-sc-cyh04c-0 cEWvSE">
        <h2 class="LoginFormContainer___StyledH-sc-cyh04c-1 hpqfJy">Login to Continue</h2>
        <form id="pterodactyl-auth-form" onsubmit="event.preventDefault();">
          <div class="LoginFormContainer___StyledDiv-sc-cyh04c-3">
            <div class="LoginFormContainer___StyledDiv2-sc-cyh04c-4">
              <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3C/svg%3E" alt="Pterodactyl" />
            </div>
            <div class="LoginFormContainer___StyledDiv3-sc-cyh04c-6">
              ${mode === 'register' ? registerFieldsHtml : loginFieldsHtml}
            </div>
          </div>
        </form>
        <!-- Simulated Pterodactyl Registration Addon link that previously broke the flex row -->
        <div class="custom-register-addon-wrapper">
          ${
            mode === 'register'
              ? '<a href="/auth/login">Already registered? Login here.</a>'
              : '<a href="/auth/register">Register here.</a>'
          }
        </div>
        <p class="LoginFormContainer___StyledP-sc-cyh04c-7 llNNfK">© 2015 - 2026 Pterodactyl Software</p>
      </div>
    </div>
  </div>
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

app.get(['/auth/modules/google', '/auth/modules/facebook'], (_req, res) => {
  res.redirect('/auth/login');
});

app.listen(PORT, '0.0.0.0', () => {
  console.log(`Server running at http://0.0.0.0:${PORT}`);
});
