@if(Auth::check() != true)
<script>
  try {
    var metaTheme = document.querySelector("head > meta[name='theme-color']");
    if (metaTheme) metaTheme.setAttribute("content", "#681038");
  } catch (e) {}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- PTERODACTYL AUTHENTICATION THEMING — BERRY GEOMETRIC SPLIT CARD UI -->
<style id="nebula-authentication-theme">
  :root {
    --hx-bg-deep: #681038;
    --hx-bg-darker: #4f0a29;
    --hx-berry-dark: #7d1e4d;
    --hx-berry-mid: #9d3163;
    --hx-berry-Soft: #ae507d;
    --hx-pink-base: #e3aac3;
    --hx-text-dark: #1e1e1e;
    --hx-text-muted: #8b8f96;
    --hx-line-gray: #9a9ea4;
  }

  html, body {
    min-height: 100vh !important;
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow-x: hidden !important;
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    background: radial-gradient(circle at 50% 45%, #751541 0%, #630f35 55%, #4d0a28 100%) !important;
  }

  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY {
    position: fixed;
    z-index: 999;
    top: 0;
    left: 0 !important;
    width: 100% !important;
  }

  .nebula-auth-wallpaper {
    z-index: 2 !important;
    position: fixed !important;
    inset: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    background: radial-gradient(circle at 50% 45%, #751541 0%, #630f35 55%, #4d0a28 100%) !important;
    opacity: 1 !important;
    filter: none !important;
    transform: none !important;
    animation: none !important;
  }

  .nebula-auth-backdrop {
    z-index: 3 !important;
    position: fixed !important;
    inset: 0 !important;
    background: transparent !important;
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
  }

  div.App___StyledDiv-sc-2l91w7-0.fnfeQw {
    background: transparent !important;
    z-index: 4 !important;
  }

  /* Main Split Card Container (880 x 540 reference proportions) */
  div.LoginFormContainer__Container-sc-cyh04c-0,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    z-index: 10 !important;
    position: fixed !important;
    left: 50% !important;
    top: 50% !important;
    transform: translate(-50%, -50%) !important;
    width: min(880px, calc(100vw - 32px)) !important;
    max-width: 880px !important;
    min-height: 540px !important;
    height: 540px !important;
    padding: 0 !important;
    margin: 0 !important;
    border: 0 !important;
    border-radius: 16px !important;
    background: #ffffff !important;
    box-shadow: 0 26px 65px rgba(20, 2, 11, 0.48) !important;
    display: flex !important;
    flex-direction: row !important;
    overflow: hidden !important;
    box-sizing: border-box !important;
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0::before,
  div.LoginFormContainer__Container-sc-cyh04c-0::after,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    display: none !important;
    content: none !important;
  }

  /* Hide stock Pterodactyl side illustration if present */
  div.LoginFormContainer___StyledDiv2-sc-cyh04c-4 {
    display: none !important;
  }

  /* Left Geometric Ribbon Panel (37.5% width) */
  .hx-left-panel {
    position: relative;
    width: 37.5%;
    min-width: 37.5%;
    height: 100%;
    background-color: #e3aac3;
    overflow: hidden;
    user-select: none;
    flex-shrink: 0;
  }

  .hx-left-art-svg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
    pointer-events: none;
  }

  /* Curved Seam Tabs (LOGIN / SIGN IN) */
  .hx-seam-tabs {
    position: absolute;
    right: 0;
    top: 158px;
    width: 112px;
    z-index: 5;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  /* Moving White Protrusion Pill with Inverted Fillet Curves */
  .hx-tab-indicator {
    position: absolute;
    right: 0;
    top: 0;
    width: 104px;
    height: 54px;
    background: #ffffff;
    border-radius: 999px 0 0 999px;
    transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1);
    pointer-events: none;
    z-index: 1;
  }

  .hx-tab-indicator::before {
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

  .hx-tab-indicator::after {
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

  body.hx-auth-register .hx-tab-indicator {
    transform: translateY(66px);
  }

  .hx-seam-tab-btn {
    position: relative;
    z-index: 2;
    width: 104px;
    height: 54px;
    border: 0;
    background: transparent;
    padding: 0 8px 0 0;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    cursor: pointer;
    transition: color 0.25s ease;
    outline: none;
  }

  .hx-seam-tab-btn + .hx-seam-tab-btn {
    margin-top: 12px;
  }

  .hx-seam-tab-btn[data-mode="login"] {
    color: #111111;
  }

  .hx-seam-tab-btn[data-mode="register"] {
    color: #ffffff;
  }

  body.hx-auth-register .hx-seam-tab-btn[data-mode="login"] {
    color: #ffffff;
  }

  body.hx-auth-register .hx-seam-tab-btn[data-mode="register"] {
    color: #111111;
  }

  /* Right White Form Panel (62.5% width) */
  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    position: relative !important;
    z-index: 6 !important;
    width: 62.5% !important;
    max-width: 62.5% !important;
    height: 100% !important;
    min-height: 540px !important;
    margin: 0 !important;
    padding: 42px 68px 94px 68px !important;
    background: #ffffff !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    box-sizing: border-box !important;
  }

  /* Top Circular Glossy Avatar Badge + Heading */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy,
  h2.LoginFormContainer___StyledH-sc-cyh04c-1 {
    position: relative !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    margin: 0 0 34px 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
    content: none !important;
    text-align: center !important;
    font-size: 0 !important;
    line-height: 1 !important;
  }

  /* Glossy Berry Avatar Circle */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before,
  h2.LoginFormContainer___StyledH-sc-cyh04c-1::before {
    content: "" !important;
    display: block !important;
    width: 80px !important;
    height: 80px !important;
    border-radius: 50% !important;
    margin: 0 auto 14px auto !important;
    background-image:
      url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' fill='none'%3E%3Ccircle cx='32' cy='23' r='9' stroke='%23ffffff' stroke-width='2.8'/%3E%3Cpath d='M16 46.5c1.6-8.2 7.2-12.5 16-12.5s14.4 4.3 16 12.5c.2 1.1-.6 2-1.8 2.2-4.2.7-9.2 1.1-14.2 1.1s-10-.4-14.2-1.1c-1.2-.2-2-1.1-1.8-2.2Z' stroke='%23ffffff' stroke-width='2.8' stroke-linejoin='round'/%3E%3Cpath d='M26.5 34.8c1.6 1.7 3.5 2.5 5.5 2.5s3.9-.8 5.5-2.5' stroke='%23ffffff' stroke-width='2.4' stroke-linecap='round'/%3E%3C/svg%3E"),
      radial-gradient(circle at 36% 24%, #dfb4ca 0%, #bf6f97 40%, #9b3568 78%, #7d1e4d 100%) !important;
    background-size: 52px 52px, 100% 100% !important;
    background-position: center center, center center !important;
    background-repeat: no-repeat !important;
    border: 1.5px solid rgba(255, 255, 255, 0.75) !important;
    box-shadow:
      0 7px 16px rgba(125, 30, 77, 0.36),
      inset 0 2px 5px rgba(255, 255, 255, 0.45) !important;
  }

  /* Heading Text ("LOGIN" / "SIGN IN") */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after,
  h2.LoginFormContainer___StyledH-sc-cyh04c-1::after {
    content: "LOGIN" !important;
    display: block !important;
    color: #7d1e4d !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 21px !important;
    font-weight: 700 !important;
    letter-spacing: 0.03em !important;
    line-height: 1.2 !important;
    margin: 0 !important;
  }

  body.hx-auth-register
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after,
  body.hx-auth-register
  h2.LoginFormContainer___StyledH-sc-cyh04c-1::after {
    content: "SIGN IN" !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy img,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy svg {
    display: none !important;
  }

  /* Hide stock field labels so placeholders ("Email", "Password") lead cleanly */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label {
    display: none !important;
  }

  /* Input Fields with Left Gray Icons + Full Bottom Border Line */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"],
  .Input-sc-19rce1w-0.fFYzlR,
  .Input-sc-19rce1w-0.floJYL {
    width: 100% !important;
    height: 44px !important;
    box-sizing: border-box !important;
    padding: 0 12px 8px 38px !important;
    margin-bottom: 24px !important;
    color: #2b2b2b !important;
    background-color: transparent !important;
    border: 0 !important;
    border-bottom: 1.5px solid #9a9ea4 !important;
    border-radius: 0 !important;
    outline: none !important;
    box-shadow: none !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    transition: border-color 0.2s ease !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"]::placeholder,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"]::placeholder,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"]::placeholder {
    color: #8b8f96 !important;
    font-weight: 400 !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"]:focus,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"]:focus,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"]:focus {
    border-bottom-color: #7d1e4d !important;
  }

  /* Left User Circle Icon on Email / Text Input */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='10.5' fill='%237e8287'/%3E%3Ccircle cx='12' cy='9.3' r='3.3' fill='%23ffffff'/%3E%3Cpath d='M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z' fill='%23ffffff'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: left 2px top 6px !important;
    background-size: 22px 22px !important;
  }

  /* Left Padlock Icon on Password Input */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M8 10V7a4 4 0 0 1 8 0v3' fill='none' stroke='%237e8287' stroke-width='2.3' stroke-linecap='round'/%3E%3Crect x='5' y='10' width='14' height='11' rx='2.2' fill='%237e8287'/%3E%3Ccircle cx='12' cy='15.5' r='1.7' fill='%23ffffff'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: left 2px top 5px !important;
    background-size: 22px 22px !important;
  }

  /* Action Row: Forgot Password (left) + Pill LOGIN Button (right) */
  .hx-action-row {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    margin-top: 2px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE a,
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC,
  .dqkKHi,
  .hx-forgot-link {
    color: #9e4770 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 500 !important;
    text-decoration: none !important;
    letter-spacing: 0.01em !important;
    transition: color 0.18s ease !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE a:hover,
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC:hover,
  .dqkKHi:hover,
  .hx-forgot-link:hover {
    color: #7d1e4d !important;
    text-decoration: underline !important;
  }

  /* Pill-shaped Berry LOGIN Button */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:not(:disabled) {
    width: auto !important;
    min-width: 112px !important;
    height: 36px !important;
    min-height: 36px !important;
    padding: 0 28px !important;
    margin: 0 0 0 auto !important;
    border: 0 !important;
    border-radius: 999px !important;
    background: linear-gradient(180deg, #b55784 0%, #a44673 100%) !important;
    color: #ffffff !important;
    box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    transition: transform 0.16s ease, box-shadow 0.16s ease, filter 0.16s ease !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI:hover:not(:disabled),
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:hover:not(:disabled) {
    filter: brightness(1.05) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 7px 18px rgba(174, 80, 125, 0.42) !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI span,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI span.Button___StyledSpan-sc-1qu1gou-2 {
    color: #ffffff !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 600 !important;
    letter-spacing: 0.05em !important;
    text-transform: uppercase !important;
  }

  /* Bottom Social Bar ("Or Login With | Google | Facebook") */
  .hx-bottom-social-bar {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 74px;
    background: #ffffff;
    border-top: 1px solid #f2eef0;
    box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 56px;
    box-sizing: border-box;
    z-index: 8;
  }

  .hx-social-label {
    color: #222222;
    font-family: 'Poppins', sans-serif;
    font-size: 11.5px;
    font-weight: 600;
    letter-spacing: 0.01em;
  }

  .hx-social-btn {
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
    text-decoration: none !important;
    transition: background-color 0.16s ease, transform 0.16s ease;
  }

  .hx-social-btn:hover {
    background-color: #f9f5f7;
    transform: translateY(-1px);
  }

  .hx-social-icon-google {
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

  .hx-social-icon-facebook {
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

  /* Hide stock Pterodactyl footer copyright & stock social container */
  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK,
  .SocialLogin\:container {
    display: none !important;
  }

  /* Keep alerts styled cleanly */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE [role="alert"] {
    border-radius: 10px !important;
    border: 1px solid rgba(157, 49, 99, 0.25) !important;
    background: rgba(174, 80, 125, 0.08) !important;
    color: #7d1e4d !important;
    font-size: 12px !important;
    margin-bottom: 14px !important;
  }

  /* Responsive Scaling for Smaller Viewports */
  @media (max-width: 920px) {
    div.LoginFormContainer__Container-sc-cyh04c-0,
    div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
      width: 880px !important;
      height: 540px !important;
      --hx-scale: min(calc((100vw - 24px) / 880), calc((100vh - 24px) / 540));
      transform: translate(-50%, -50%) scale(var(--hx-scale)) !important;
      transform-origin: center center !important;
    }
  }
</style>

<script>
(function () {
  function buildLeftGeometricPanel() {
    var container = document.querySelector('div.LoginFormContainer__Container-sc-cyh04c-0');
    if (!container || container.querySelector('.hx-left-panel')) return;

    var leftPanel = document.createElement('div');
    leftPanel.className = 'hx-left-panel';
    leftPanel.innerHTML =
      '<svg class="hx-left-art-svg" viewBox="0 0 330 540" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">' +
        '<defs>' +
          '<filter id="hx-shadow-1" x="-20%" y="-20%" width="140%" height="140%">' +
            '<feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#480926" flood-opacity="0.32"/>' +
          '</filter>' +
          '<filter id="hx-shadow-2" x="-20%" y="-20%" width="140%" height="140%">' +
            '<feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#480926" flood-opacity="0.26"/>' +
          '</filter>' +
        '</defs>' +
        '<!-- Soft Dusty Rose Base -->' +
        '<rect width="330" height="540" fill="#e3aac3"/>' +
        '<!-- Bottom-Left Medium Rose Triangle -->' +
        '<polygon points="0,255 285,540 0,540" fill="#b85080"/>' +
        '<!-- Lower-Right Diagonal Band (with upward shadow onto light pink) -->' +
        '<polygon points="46,208 330,492 330,540 266,540 0,274 0,254" fill="#9d3163" filter="url(#hx-shadow-2)"/>' +
        '<!-- Upper-Left Diagonal Band (overlapping the lower band with downward shadow) -->' +
        '<polygon points="168,0 252,0 0,252 0,168" fill="#ad4374" filter="url(#hx-shadow-1)"/>' +
        '<!-- Top-Left Deep Berry Corner Triangle -->' +
        '<polygon points="0,0 168,0 0,168" fill="#902859"/>' +
      '</svg>' +
      '<div class="hx-seam-tabs">' +
        '<div class="hx-tab-indicator"></div>' +
        '<button type="button" class="hx-seam-tab-btn" data-mode="login">LOGIN</button>' +
        '<button type="button" class="hx-seam-tab-btn" data-mode="register">SIGN IN</button>' +
      '</div>';

    container.insertBefore(leftPanel, container.firstChild);

    var btns = leftPanel.querySelectorAll('.hx-seam-tab-btn');
    btns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var mode = btn.getAttribute('data-mode');
        if (mode === 'register') {
          document.body.classList.add('hx-auth-register');
        } else {
          document.body.classList.remove('hx-auth-register');
        }
        syncFormPlaceholdersAndText();
      });
    });
  }

  function enhanceRightFormPanel() {
    var formCol = document.querySelector('div.LoginFormContainer___StyledDiv-sc-cyh04c-3');
    if (!formCol) return;

    syncFormPlaceholdersAndText();

    // Arrange Forgot Password? on left and LOGIN button on right
    var submitBtn = formCol.querySelector('button[type="submit"], button.Button__ButtonStyle-sc-1qu1gou-0');
    var forgotLink = formCol.querySelector('a[href*="password"], .LoginContainer___StyledLink-sc-qtrnpk-4');
    if (submitBtn && !formCol.querySelector('.hx-action-row')) {
      var actionRow = document.createElement('div');
      actionRow.className = 'hx-action-row';
      submitBtn.parentNode.insertBefore(actionRow, submitBtn);
      if (forgotLink) {
        forgotLink.textContent = 'Forgot Password?';
        forgotLink.classList.add('hx-forgot-link');
        actionRow.appendChild(forgotLink);
      } else {
        var fallbackForgot = document.createElement('a');
        fallbackForgot.href = '/auth/password';
        fallbackForgot.className = 'hx-forgot-link';
        fallbackForgot.textContent = 'Forgot Password?';
        actionRow.appendChild(fallbackForgot);
      }
      actionRow.appendChild(submitBtn);
    }

    // Inject Bottom Social Bar ("Or Login With | Google | Facebook")
    if (!formCol.querySelector('.hx-bottom-social-bar')) {
      var socialBar = document.createElement('div');
      socialBar.className = 'hx-bottom-social-bar';
      socialBar.innerHTML =
        '<span class="hx-social-label">Or Login With</span>' +
        '<a href="/auth/modules/google" class="hx-social-btn" data-provider="google">' +
          '<span class="hx-social-icon-google">' +
            '<svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">' +
              '<path fill="#EA4335" d="M12 10.2v3.9h5.5c-.2 1.3-1.6 3.8-5.5 3.8-3.3 0-6-2.7-6-6s2.7-6 6-6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 6.7 2.4 2.4 6.7 2.4 12s4.3 9.6 9.6 9.6c5.5 0 9.2-3.9 9.2-9.4 0-.6-.1-1.1-.2-1.6H12z"/>' +
              '<path fill="#34A853" d="M3.5 7.4l3.2 2.4C7.6 7.5 9.6 6 12 6c1.9 0 3.1.8 3.8 1.5l2.6-2.5C16.8 3.4 14.6 2.4 12 2.4 8.3 2.4 5.1 4.5 3.5 7.4z"/>' +
              '<path fill="#FBBC05" d="M12 21.6c2.5 0 4.7-.8 6.2-2.3l-2.9-2.4c-.8.6-1.9 1-3.3 1-3.8 0-5.2-2.5-5.5-3.8l-3.2 2.5c1.6 3.1 4.9 5 8.7 5z"/>' +
              '<path fill="#4285F4" d="M21.2 12.2c0-.6-.1-1.1-.2-1.6H12v3.9h5.5c-.3 1.3-1.1 2.4-2.2 3.1l2.9 2.4c1.7-1.6 3-4.1 3-7.8z"/>' +
            '</svg>' +
          '</span>' +
          '<span>Google</span>' +
        '</a>' +
        '<a href="/auth/modules/facebook" class="hx-social-btn" data-provider="facebook">' +
          '<span class="hx-social-icon-facebook">' +
            '<svg width="14" height="14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">' +
              '<path fill="#ffffff" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V6.65c0-1.05.29-1.73 1.76-1.73Z"/>' +
            '</svg>' +
          '</span>' +
          '<span>Facebook</span>' +
        '</a>';
      formCol.appendChild(socialBar);
    }
  }

  function syncFormPlaceholdersAndText() {
    var isRegister = document.body.classList.contains('hx-auth-register');
    var formCol = document.querySelector('div.LoginFormContainer___StyledDiv-sc-cyh04c-3');
    if (!formCol) return;

    var textInputs = formCol.querySelectorAll('input[type="text"], input[type="email"]');
    if (textInputs.length > 0) {
      textInputs[0].setAttribute('placeholder', 'Email');
    }
    var passInputs = formCol.querySelectorAll('input[type="password"]');
    if (passInputs.length > 0) {
      passInputs[0].setAttribute('placeholder', 'Password');
    }

    var submitSpan = formCol.querySelector('button[type="submit"] span, button.Button__ButtonStyle-sc-1qu1gou-0 span');
    if (submitSpan) {
      submitSpan.textContent = isRegister ? 'SIGN IN' : 'LOGIN';
    }
  }

  function applyHelzerXAuthMode() {
    var path = window.location.pathname.toLowerCase();
    if (path.indexOf('/auth/register') !== -1) {
      document.body.classList.add('hx-auth-register');
    }
    buildLeftGeometricPanel();
    enhanceRightFormPanel();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', applyHelzerXAuthMode);
  } else {
    applyHelzerXAuthMode();
  }

  var observer = new MutationObserver(function () {
    buildLeftGeometricPanel();
    enhanceRightFormPanel();
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
  window.addEventListener('popstate', applyHelzerXAuthMode);
})();
</script>
@endif
