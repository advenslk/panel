@if(Auth::check() != true)
<script>
  try {
    var metaTheme = document.querySelector("head > meta[name='theme-color']");
    if (metaTheme) metaTheme.setAttribute("content", "#660e36");
  } catch (e) {}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- PTERODACTYL AUTHENTICATION THEMING — EXACT BERRY GEOMETRIC SPLIT CARD UI -->
<style id="nebula-authentication-theme">
  :root {
    --hx-bg-deep: #660e36;
    --hx-bg-darker: #4b0826;
    --hx-berry-dark: #7d1e4d;
    --hx-berry-mid: #9c3062;
    --hx-berry-soft: #ae507d;
    --hx-pink-base: #e2abc4;
    --hx-text-dark: #1e1e1e;
    --hx-text-muted: #8b8f96;
    --hx-line-gray: #9a9ea4;
  }

  html, body {
    min-height: 100vh !important;
    height: 100% !important;
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    background: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%) !important;
    background-image: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%) !important;
    background-color: #5c0c30 !important;
  }

  /* Fullscreen stage background to cover any Nebula wallpaper image, polka dots, waves, or watermarks */
  #hx-auth-stage-bg,
  .nebula-auth-wallpaper {
    position: fixed !important;
    inset: 0 !important;
    top: 0 !important;
    left: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    z-index: 2147483640 !important;
    background: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%) !important;
    background-image: radial-gradient(circle at 50% 50%, #6d123b 0%, #5c0c30 58%, #4b0826 100%) !important;
    background-color: #5c0c30 !important;
    opacity: 1 !important;
    filter: none !important;
    -webkit-filter: none !important;
    transform: none !important;
    animation: none !important;
    pointer-events: none !important;
  }

  .nebula-auth-wallpaper::before,
  .nebula-auth-wallpaper::after {
    display: none !important;
    content: none !important;
    background: none !important;
  }

  /* Hide Nebula watermark, recaptcha badge, backdrop, and any decorative wave/particle elements */
  .nebula-auth-backdrop,
  .nebula-watermark,
  .notification,
  .g-recaptcha,
  .initialize-notif,
  body > canvas,
  body > svg,
  #app > canvas,
  #app > svg,
  [class*="particle"],
  [id*="particle"],
  [class*="snow"],
  [id*="snow"] {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    pointer-events: none !important;
  }

  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY {
    position: fixed !important;
    z-index: 2147483647 !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
  }

  div#app,
  div.App___StyledDiv-sc-2l91w7-0,
  div.App___StyledDiv-sc-2l91w7-0.fnfeQw {
    background: transparent !important;
    background-color: transparent !important;
    z-index: 2147483641 !important;
    position: relative !important;
  }

  /* =========================================================
     MAIN SPLIT CARD CONTAINER (800px x 550px — exact 1.454 ratio)
     Uses explicit absolute coordinates for inner panels so
     Pterodactyl's DOM wrappers never break into flex columns.
     ========================================================= */
  html body div.LoginFormContainer__Container-sc-cyh04c-0,
  html body div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE,
  html body div[class*="LoginFormContainer__Container"] {
    z-index: 2147483645 !important;
    position: fixed !important;
    left: 50% !important;
    top: 50% !important;
    transform: translate(-50%, -50%) !important;
    width: 800px !important;
    max-width: 800px !important;
    min-width: 800px !important;
    height: 550px !important;
    min-height: 550px !important;
    max-height: 550px !important;
    padding: 0 !important;
    margin: 0 !important;
    border: 0 !important;
    border-radius: 16px !important;
    background: #ffffff !important;
    background-color: #ffffff !important;
    box-shadow:
      0 26px 65px rgba(18, 2, 10, 0.55),
      0 0 0 100vmax #5c0c30 !important;
    display: block !important;
    overflow: hidden !important;
    box-sizing: border-box !important;
    isolation: isolate !important;
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0::before,
  html body div.LoginFormContainer__Container-sc-cyh04c-0::after,
  html body div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before,
  html body div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after,
  html body div[class*="LoginFormContainer__Container"]::before,
  html body div[class*="LoginFormContainer__Container"]::after {
    display: none !important;
    content: none !important;
  }

  /* Hide Pterodactyl mascot wrapper, footer copyright, and default social container */
  html body div.LoginFormContainer___StyledDiv2-sc-cyh04c-4,
  html body div[class*="LoginFormContainer___StyledDiv2"],
  html body .LoginFormContainer___StyledP-sc-cyh04c-7,
  html body p[class*="LoginFormContainer___StyledP"],
  html body .SocialLogin\:container {
    display: none !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }

  /* =========================================================
     LEFT GEOMETRIC RIBBON PANEL (0px..312px, height 550px)
     ========================================================= */
  html body .hx-left-panel {
    position: absolute !important;
    left: 0 !important;
    top: 0 !important;
    bottom: 0 !important;
    width: 312px !important;
    min-width: 312px !important;
    max-width: 312px !important;
    height: 550px !important;
    background-color: #e2abc4 !important;
    overflow: hidden !important;
    user-select: none !important;
    z-index: 20 !important;
    margin: 0 !important;
    padding: 0 !important;
    display: block !important;
  }

  html body .hx-left-art-svg {
    position: absolute !important;
    inset: 0 !important;
    width: 100% !important;
    height: 100% !important;
    display: block !important;
    pointer-events: none !important;
  }

  /* Curved Seam Tabs ("LOGIN" / "SIGN IN") */
  html body .hx-seam-tabs {
    position: absolute !important;
    right: 0 !important;
    top: 162px !important;
    width: 112px !important;
    z-index: 25 !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-end !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  /* Sliding White Protrusion Pill with Smooth Concave Fillets */
  html body .hx-tab-indicator {
    position: absolute !important;
    right: 0 !important;
    top: 0 !important;
    width: 106px !important;
    height: 54px !important;
    background: #ffffff !important;
    border-radius: 999px 0 0 999px !important;
    transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1) !important;
    pointer-events: none !important;
    z-index: 1 !important;
  }

  html body .hx-tab-indicator::before {
    content: "" !important;
    position: absolute !important;
    right: 0 !important;
    top: -24px !important;
    width: 24px !important;
    height: 24px !important;
    background: transparent !important;
    border-bottom-right-radius: 24px !important;
    box-shadow: 12px 12px 0 12px #ffffff !important;
  }

  html body .hx-tab-indicator::after {
    content: "" !important;
    position: absolute !important;
    right: 0 !important;
    bottom: -24px !important;
    width: 24px !important;
    height: 24px !important;
    background: transparent !important;
    border-top-right-radius: 24px !important;
    box-shadow: 12px -12px 0 12px #ffffff !important;
  }

  html body.hx-auth-register .hx-tab-indicator {
    transform: translateY(68px) !important;
  }

  html body .hx-seam-tab-btn {
    position: relative !important;
    z-index: 2 !important;
    width: 106px !important;
    height: 54px !important;
    min-height: 54px !important;
    border: 0 !important;
    border-radius: 999px 0 0 999px !important;
    background: transparent !important;
    box-shadow: none !important;
    padding: 0 4px 0 0 !important;
    margin: 0 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 12.5px !important;
    font-weight: 700 !important;
    letter-spacing: 0.04em !important;
    text-transform: uppercase !important;
    cursor: pointer !important;
    transition: color 0.25s ease !important;
    outline: none !important;
  }

  html body .hx-seam-tab-btn + .hx-seam-tab-btn {
    margin-top: 14px !important;
  }

  html body .hx-seam-tab-btn[data-mode="login"] {
    color: #111111 !important;
  }

  html body .hx-seam-tab-btn[data-mode="register"] {
    color: #ffffff !important;
  }

  html body.hx-auth-register .hx-seam-tab-btn[data-mode="login"] {
    color: #ffffff !important;
  }

  html body.hx-auth-register .hx-seam-tab-btn[data-mode="register"] {
    color: #111111 !important;
  }

  /* =========================================================
     TOP GLOSSY BERRY AVATAR CIRCLE + "LOGIN" HEADING
     Positioned at top-center of Right White Panel (312px..800px)
     ========================================================= */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 h2,
  html body div[class*="LoginFormContainer__Container"] h2,
  html body .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    position: absolute !important;
    left: 312px !important;
    top: 42px !important;
    width: 488px !important;
    max-width: 488px !important;
    height: auto !important;
    margin: 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
    content: none !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
    font-size: 0 !important;
    line-height: 1 !important;
    z-index: 30 !important;
    pointer-events: none !important;
  }

  html body.hx-auth-register div.LoginFormContainer__Container-sc-cyh04c-0 h2,
  html body.hx-auth-register div[class*="LoginFormContainer__Container"] h2,
  html body.hx-auth-register .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    top: 26px !important;
  }

  /* Glossy 3D Berry Circle Avatar Badge */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 h2::before,
  html body div[class*="LoginFormContainer__Container"] h2::before,
  html body .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
    content: "" !important;
    display: block !important;
    width: 82px !important;
    height: 82px !important;
    border-radius: 50% !important;
    margin: 0 auto 14px auto !important;
    background-image:
      url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' fill='none'%3E%3Ccircle cx='32' cy='22.5' r='8.8' stroke='%23ffffff' stroke-width='2.7'/%3E%3Cpath d='M16.5 46.5c1.5-8 6.9-12.3 15.5-12.3s14 4.3 15.5 12.3c.2 1.1-.6 2-1.8 2.2-4.1.7-8.9 1-13.7 1s-9.6-.3-13.7-1c-1.2-.2-2-1.1-1.8-2.2Z' stroke='%23ffffff' stroke-width='2.7' stroke-linejoin='round'/%3E%3Cpath d='M26.5 34.8c1.6 1.7 3.5 2.5 5.5 2.5s3.9-.8 5.5-2.5' stroke='%23ffffff' stroke-width='2.3' stroke-linecap='round'/%3E%3C/svg%3E"),
      radial-gradient(circle at 38% 22%, #e5bed2 0%, #c3749b 38%, #9b3567 76%, #7b1d4b 100%) !important;
    background-size: 52px 52px, 100% 100% !important;
    background-position: center center, center center !important;
    background-repeat: no-repeat !important;
    border: 1.5px solid rgba(255, 255, 255, 0.82) !important;
    box-shadow:
      0 7px 16px rgba(120, 24, 70, 0.36),
      inset 0 2px 5px rgba(255, 255, 255, 0.48) !important;
  }

  html body.hx-auth-register div.LoginFormContainer__Container-sc-cyh04c-0 h2::before,
  html body.hx-auth-register div[class*="LoginFormContainer__Container"] h2::before,
  html body.hx-auth-register .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
    width: 66px !important;
    height: 66px !important;
    background-size: 42px 42px, 100% 100% !important;
    margin-bottom: 10px !important;
  }

  /* "LOGIN" / "SIGN IN" Heading below Circle */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 h2::after,
  html body div[class*="LoginFormContainer__Container"] h2::after,
  html body .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
    content: "LOGIN" !important;
    display: block !important;
    color: #7d1e4d !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    letter-spacing: 0.03em !important;
    line-height: 1.2 !important;
    margin: 0 !important;
  }

  html body.hx-auth-register div.LoginFormContainer__Container-sc-cyh04c-0 h2::after,
  html body.hx-auth-register div[class*="LoginFormContainer__Container"] h2::after,
  html body.hx-auth-register .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
    content: "SIGN IN" !important;
  }

  html body div[class*="LoginFormContainer__Container"] h2 img,
  html body div[class*="LoginFormContainer__Container"] h2 svg {
    display: none !important;
  }

  /* =========================================================
     RIGHT WHITE FORM PANEL (312px..800px, width 488px, height 474px)
     ========================================================= */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 form,
  html body div[class*="LoginFormContainer__Container"] form {
    position: static !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    margin: 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    display: block !important;
  }

  html body div.LoginFormContainer___StyledDiv-sc-cyh04c-3,
  html body div[class*="LoginFormContainer___StyledDiv-"],
  html body div.LoginFormContainer__Container-sc-cyh04c-0 form > div:first-of-type {
    position: absolute !important;
    left: 312px !important;
    top: 0 !important;
    right: 0 !important;
    width: 488px !important;
    max-width: 488px !important;
    min-width: 488px !important;
    height: 474px !important;
    min-height: 474px !important;
    margin: 0 !important;
    padding: 204px 58px 20px 58px !important;
    background: #ffffff !important;
    background-color: #ffffff !important;
    box-shadow: none !important;
    border: 0 !important;
    border-radius: 0 !important;
    display: block !important;
    box-sizing: border-box !important;
    z-index: 22 !important;
    overflow-x: hidden !important;
    overflow-y: auto !important;
  }

  html body.hx-auth-register div.LoginFormContainer___StyledDiv-sc-cyh04c-3,
  html body.hx-auth-register div[class*="LoginFormContainer___StyledDiv-"],
  html body.hx-auth-register div.LoginFormContainer__Container-sc-cyh04c-0 form > div:first-of-type {
    padding-top: 152px !important;
  }

  /* Force inner field column wrappers inside StyledDiv-sc-cyh04c-3 to span 100% width */
  html body div.LoginFormContainer___StyledDiv3-sc-cyh04c-6,
  html body div[class*="LoginFormContainer___StyledDiv3"],
  html body div.LoginFormContainer___StyledDiv-sc-cyh04c-3 > div:not(.LoginFormContainer___StyledDiv2-sc-cyh04c-4),
  html body div.LoginFormContainer___StyledDiv-sc-cyh04c-3 > div > div:not(.hx-action-row):not(.hx-submit-row):not(.hx-forgot-row) {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    display: block !important;
    box-sizing: border-box !important;
  }

  /* Hide field labels so placeholders ("Email", "Password") lead cleanly */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 label,
  html body div[class*="LoginFormContainer__Container"] label {
    display: none !important;
  }

  /* Full-width Underline Inputs with Indented Left Gray Icons */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]),
  html body div[class*="LoginFormContainer__Container"] input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]),
  html body .Input-sc-19rce1w-0.fFYzlR,
  html body .Input-sc-19rce1w-0.floJYL {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    min-width: 100% !important;
    height: 44px !important;
    box-sizing: border-box !important;
    padding: 2px 12px 10px 44px !important;
    margin: 0 0 28px 0 !important;
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
    line-height: 30px !important;
    transition: border-color 0.2s ease !important;
  }

  html body.hx-auth-register div.LoginFormContainer__Container-sc-cyh04c-0 input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]),
  html body.hx-auth-register div[class*="LoginFormContainer__Container"] input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]) {
    height: 36px !important;
    margin-bottom: 14px !important;
    padding-bottom: 6px !important;
    line-height: 26px !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 input::placeholder,
  html body div[class*="LoginFormContainer__Container"] input::placeholder {
    color: #8b8f96 !important;
    opacity: 1 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 400 !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 input:focus,
  html body div[class*="LoginFormContainer__Container"] input:focus {
    border-bottom-color: #7d1e4d !important;
  }

  /* Left Gray User Circle Icon (indented 10px from left edge of line, matching reference image) */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 input[type="text"],
  html body div.LoginFormContainer__Container-sc-cyh04c-0 input[type="email"],
  html body div[class*="LoginFormContainer__Container"] input[type="text"],
  html body div[class*="LoginFormContainer__Container"] input[type="email"] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='10.5' fill='%237e8287'/%3E%3Ccircle cx='12' cy='9.3' r='3.3' fill='%23ffffff'/%3E%3Cpath d='M6.4 18.4c1.1-3.1 3.1-4.6 5.6-4.6s4.5 1.5 5.6 4.6a8.8 8.8 0 0 1-11.2 0Z' fill='%23ffffff'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: left 10px top 6px !important;
    background-size: 22px 22px !important;
  }

  /* Left Gray Padlock Icon (indented 10px from left edge of line, matching reference image) */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 input[type="password"],
  html body div[class*="LoginFormContainer__Container"] input[type="password"] {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M8 10V7a4 4 0 0 1 8 0v3' fill='none' stroke='%237e8287' stroke-width='2.3' stroke-linecap='round'/%3E%3Crect x='5' y='10' width='14' height='11' rx='2.2' fill='%237e8287'/%3E%3Ccircle cx='12' cy='15.5' r='1.7' fill='%23ffffff'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: left 10px top 5px !important;
    background-size: 22px 22px !important;
  }

  /* =========================================================
     ACTION ROW: Forgot Password? (Left) + LOGIN Pill (Right)
     Non-destructive layout: keeps React parent nodes intact!
     ========================================================= */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 div.hx-action-row,
  html body div[class*="LoginFormContainer__Container"] div.hx-action-row {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 38px !important;
    margin: 2px 0 0 0 !important;
    padding: 0 0 0 10px !important;
    box-sizing: border-box !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 div.hx-submit-row,
  html body div[class*="LoginFormContainer__Container"] div.hx-submit-row {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: flex-end !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 38px !important;
    margin: 2px 0 0 0 !important;
    padding: 0 !important;
    box-sizing: border-box !important;
    position: relative !important;
    z-index: 2 !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 div.hx-forgot-row,
  html body div[class*="LoginFormContainer__Container"] div.hx-forgot-row {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: flex-start !important;
    width: auto !important;
    max-width: 62% !important;
    height: 38px !important;
    margin: -38px 0 0 0 !important;
    padding: 0 0 0 10px !important;
    text-align: left !important;
    box-sizing: border-box !important;
    position: relative !important;
    z-index: 4 !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 a.hx-forgot-link,
  html body div[class*="LoginFormContainer__Container"] a.hx-forgot-link,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 .dqkKHi {
    color: #9e4770 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 500 !important;
    text-transform: none !important;
    text-decoration: none !important;
    letter-spacing: 0.01em !important;
    white-space: nowrap !important;
    margin: 0 !important;
    padding: 0 !important;
    transition: color 0.18s ease !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 a.hx-forgot-link:hover,
  html body div[class*="LoginFormContainer__Container"] a.hx-forgot-link:hover {
    color: #7d1e4d !important;
    text-decoration: underline !important;
  }

  /* Pill-shaped Berry Submit Button — overrides .cDkCmT / .style-module_3kBDV_wo in panel.blade.php */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button[type="submit"],
  html body div[class*="LoginFormContainer__Container"] button[type="submit"],
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.Button__ButtonStyle-sc-1qu1gou-0,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.cDkCmT,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.dLAOsI,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.style-module_3kBDV_wo {
    width: auto !important;
    min-width: 118px !important;
    max-width: 156px !important;
    height: 36px !important;
    min-height: 36px !important;
    padding: 0 30px !important;
    margin: 0 0 0 auto !important;
    border: 0 !important;
    border-radius: 999px !important;
    background: linear-gradient(180deg, #b55784 0%, #a44673 100%) !important;
    background-color: #ad4e7b !important;
    color: #ffffff !important;
    box-shadow: 0 5px 14px rgba(174, 80, 125, 0.32) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex: 0 0 auto !important;
    cursor: pointer !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 600 !important;
    letter-spacing: 0.05em !important;
    text-transform: uppercase !important;
    transition: transform 0.16s ease, box-shadow 0.16s ease, filter 0.16s ease !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 button[type="submit"]:hover,
  html body div[class*="LoginFormContainer__Container"] button[type="submit"]:hover {
    filter: brightness(1.06) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 7px 18px rgba(174, 80, 125, 0.42) !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 button[type="submit"] span,
  html body div[class*="LoginFormContainer__Container"] button[type="submit"] span,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.Button__ButtonStyle-sc-1qu1gou-0 span,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 .Button___StyledSpan-sc-1qu1gou-2 {
    color: #ffffff !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 600 !important;
    letter-spacing: 0.05em !important;
    text-transform: uppercase !important;
    white-space: nowrap !important;
    border-radius: 999px !important;
  }

  /* =========================================================
     BOTTOM SOCIAL BAR ("Or Login With | Google | Facebook")
     Anchored to bottom of Right Panel (left: 312px, width: 488px)
     ========================================================= */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 div.hx-bottom-social-bar,
  html body div[class*="LoginFormContainer__Container"] div.hx-bottom-social-bar {
    position: absolute !important;
    left: 312px !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 488px !important;
    max-width: 488px !important;
    height: 76px !important;
    background: #ffffff !important;
    border-top: 1px solid #f2eef0 !important;
    box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.035) !important;
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    justify-content: space-between !important;
    padding: 0 48px !important;
    margin: 0 !important;
    box-sizing: border-box !important;
    z-index: 35 !important;
    visibility: visible !important;
    pointer-events: auto !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 .hx-social-label,
  html body div[class*="LoginFormContainer__Container"] .hx-social-label {
    color: #222222 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 11.5px !important;
    font-weight: 600 !important;
    letter-spacing: 0.01em !important;
    white-space: nowrap !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 a.hx-social-btn,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.hx-social-btn,
  html body div[class*="LoginFormContainer__Container"] a.hx-social-btn,
  html body div[class*="LoginFormContainer__Container"] button.hx-social-btn {
    display: inline-flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 10px !important;
    background: transparent !important;
    border: 0 !important;
    padding: 6px 10px !important;
    margin: 0 !important;
    border-radius: 8px !important;
    cursor: pointer !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #222222 !important;
    text-decoration: none !important;
    text-transform: none !important;
    white-space: nowrap !important;
    box-shadow: none !important;
    transition: background-color 0.16s ease, transform 0.16s ease !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 a.hx-social-btn span,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.hx-social-btn span,
  html body div[class*="LoginFormContainer__Container"] a.hx-social-btn span,
  html body div[class*="LoginFormContainer__Container"] button.hx-social-btn span {
    color: #222222 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    text-transform: none !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 a.hx-social-btn:hover,
  html body div.LoginFormContainer__Container-sc-cyh04c-0 button.hx-social-btn:hover,
  html body div[class*="LoginFormContainer__Container"] a.hx-social-btn:hover,
  html body div[class*="LoginFormContainer__Container"] button.hx-social-btn:hover {
    background-color: #f9f5f7 !important;
    transform: translateY(-1px) !important;
    text-decoration: none !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 .hx-social-icon-google,
  html body div[class*="LoginFormContainer__Container"] .hx-social-icon-google {
    width: 25px !important;
    height: 25px !important;
    border-radius: 5px !important;
    background: #ffffff !important;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.14) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
  }

  html body div.LoginFormContainer__Container-sc-cyh04c-0 .hx-social-icon-facebook,
  html body div[class*="LoginFormContainer__Container"] .hx-social-icon-facebook {
    width: 25px !important;
    height: 25px !important;
    border-radius: 5px !important;
    background: #3b5998 !important;
    box-shadow: 0 2px 6px rgba(59, 89, 152, 0.28) !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
  }

  /* Keep validation / alert messages clean */
  html body div.LoginFormContainer__Container-sc-cyh04c-0 [role="alert"],
  html body div[class*="LoginFormContainer__Container"] [role="alert"] {
    border-radius: 8px !important;
    border: 1px solid rgba(157, 49, 99, 0.25) !important;
    background: rgba(174, 80, 125, 0.08) !important;
    color: #7d1e4d !important;
    font-size: 11.5px !important;
    padding: 8px 12px !important;
    margin-bottom: 12px !important;
  }

  /* Responsive Proportional Scaling on Smaller Screens */
  @media (max-width: 840px), (max-height: 590px) {
    html body div.LoginFormContainer__Container-sc-cyh04c-0,
    html body div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE,
    html body div[class*="LoginFormContainer__Container"] {
      --hx-scale: min(calc((100vw - 24px) / 800), calc((100vh - 24px) / 550));
      transform: translate(-50%, -50%) scale(var(--hx-scale)) !important;
      transform-origin: center center !important;
    }
  }
</style>

<script>
(function () {
  var savedRegisterLink = null;
  var savedLoginLink = null;

  function findContainer() {
    return document.querySelector('div.LoginFormContainer__Container-sc-cyh04c-0, div[class*="LoginFormContainer__Container"]');
  }

  function ensureStylePriority() {
    var styleEl = document.getElementById('nebula-authentication-theme');
    if (styleEl && document.head && document.head.lastElementChild !== styleEl) {
      document.head.appendChild(styleEl);
    }
    if (!document.getElementById('hx-auth-stage-bg') && document.body) {
      var stageBg = document.createElement('div');
      stageBg.id = 'hx-auth-stage-bg';
      document.body.insertBefore(stageBg, document.body.firstChild);
    }
  }

  function buildLeftGeometricPanel(container) {
    if (container.querySelector('.hx-left-panel')) return;

    var leftPanel = document.createElement('div');
    leftPanel.className = 'hx-left-panel';
    leftPanel.innerHTML =
      '<svg class="hx-left-art-svg" viewBox="0 0 312 550" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">' +
        '<defs>' +
          '<filter id="hx-shadow-upper" x="-25%" y="-25%" width="150%" height="150%">' +
            '<feDropShadow dx="6" dy="6" stdDeviation="7" flood-color="#3d051f" flood-opacity="0.34"/>' +
          '</filter>' +
          '<filter id="hx-shadow-lower" x="-25%" y="-25%" width="150%" height="150%">' +
            '<feDropShadow dx="5" dy="-5" stdDeviation="6" flood-color="#3d051f" flood-opacity="0.28"/>' +
          '</filter>' +
          '<filter id="hx-shadow-corner" x="-20%" y="-20%" width="140%" height="140%">' +
            '<feDropShadow dx="3" dy="-3" stdDeviation="4" flood-color="#480725" flood-opacity="0.20"/>' +
          '</filter>' +
        '</defs>' +
        '<rect width="312" height="550" fill="#e2abc4"/>' +
        '<polygon points="56,215 312,471 312,550 0,550 0,271" fill="#9c3062" filter="url(#hx-shadow-lower)"/>' +
        '<polygon points="0,268 282,550 0,550" fill="#b95080" filter="url(#hx-shadow-corner)"/>' +
        '<polygon points="188,0 271,0 0,271 0,188" fill="#b24879" filter="url(#hx-shadow-upper)"/>' +
        '<polygon points="0,0 188,0 0,188" fill="#902859"/>' +
      '</svg>' +
      '<div class="hx-seam-tabs">' +
        '<div class="hx-tab-indicator"></div>' +
        '<button type="button" class="hx-seam-tab-btn" data-mode="login">LOGIN</button>' +
        '<button type="button" class="hx-seam-tab-btn" data-mode="register">SIGN IN</button>' +
      '</div>';

    container.appendChild(leftPanel);

    var btns = leftPanel.querySelectorAll('.hx-seam-tab-btn');
    btns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var mode = btn.getAttribute('data-mode');
        var path = window.location.pathname.toLowerCase();
        if (mode === 'register') {
          document.body.classList.add('hx-auth-register');
          if (path.indexOf('/auth/register') === -1 && savedRegisterLink) {
            savedRegisterLink.click();
          }
        } else {
          document.body.classList.remove('hx-auth-register');
          if (path.indexOf('/auth/register') !== -1) {
            if (savedLoginLink) {
              savedLoginLink.click();
            } else {
              window.location.href = '/auth/login';
            }
          }
        }
        syncFormElements(container);
      });
    });
  }

  function buildBottomSocialBar(container) {
    var oldInsideForm = container.querySelector('form .hx-bottom-social-bar');
    if (oldInsideForm && oldInsideForm.parentNode) {
      oldInsideForm.parentNode.removeChild(oldInsideForm);
    }

    if (container.querySelector(':scope > .hx-bottom-social-bar')) return;

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

    container.appendChild(socialBar);
  }

  function hideExtraRegisterLinks(container) {
    var allLinks = container.querySelectorAll('a');
    allLinks.forEach(function (a) {
      if (a.classList.contains('hx-forgot-link') || a.classList.contains('hx-social-btn')) return;
      var href = (a.getAttribute('href') || '').toLowerCase();
      var text = (a.textContent || '').trim().toLowerCase();
      if (href.indexOf('register') !== -1 || text.indexOf('register') !== -1 || text.indexOf('sign up') !== -1) {
        savedRegisterLink = a;
        a.style.setProperty('display', 'none', 'important');
        if (
          a.parentElement &&
          a.parentElement !== container &&
          !a.parentElement.querySelector('input, button[type="submit"], a.hx-forgot-link, a[href*="password"]')
        ) {
          a.parentElement.style.setProperty('display', 'none', 'important');
        }
      } else if (href.indexOf('/auth/login') !== -1 || text.indexOf('login here') !== -1 || text.indexOf('already') !== -1) {
        savedLoginLink = a;
        a.style.setProperty('display', 'none', 'important');
        if (
          a.parentElement &&
          a.parentElement !== container &&
          !a.parentElement.querySelector('input, button[type="submit"], a.hx-forgot-link, a[href*="password"]')
        ) {
          a.parentElement.style.setProperty('display', 'none', 'important');
        }
      }
    });
  }

  function syncFormElements(container) {
    var formCol = container.querySelector('div.LoginFormContainer___StyledDiv-sc-cyh04c-3, div[class*="LoginFormContainer___StyledDiv-"], form > div:first-of-type');
    if (!formCol) return;

    var isRegister = document.body.classList.contains('hx-auth-register');

    // Hide Pterodactyl mascot image wrapper if present
    var mascotImg = formCol.querySelector('img[src*="pterodactyl"]');
    if (mascotImg && mascotImg.parentElement && !mascotImg.parentElement.querySelector('input')) {
      mascotImg.parentElement.style.setProperty('display', 'none', 'important');
    }

    // Enforce full width on all inputs and set accurate placeholders
    var inputs = formCol.querySelectorAll('input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"])');
    var textIdx = 0;
    var passIdx = 0;
    inputs.forEach(function (input) {
      input.style.setProperty('width', '100%', 'important');
      input.style.setProperty('max-width', '100%', 'important');
      input.style.setProperty('min-width', '100%', 'important');
      input.style.setProperty('box-sizing', 'border-box', 'important');

      var type = (input.getAttribute('type') || 'text').toLowerCase();
      var labelText = '';
      if (input.previousElementSibling && input.previousElementSibling.tagName === 'LABEL') {
        labelText = (input.previousElementSibling.textContent || '').trim();
      } else if (input.parentElement) {
        var lbl = input.parentElement.querySelector('label');
        if (lbl) labelText = (lbl.textContent || '').trim();
      }

      if (type === 'password') {
        passIdx++;
        if (labelText && labelText.toLowerCase().indexOf('confirm') !== -1) {
          input.setAttribute('placeholder', 'Confirm Password');
        } else {
          input.setAttribute('placeholder', passIdx > 1 ? 'Confirm Password' : 'Password');
        }
      } else {
        textIdx++;
        if (!isRegister || textIdx === 1) {
          if (labelText && labelText.toLowerCase().indexOf('user') !== -1 && labelText.toLowerCase().indexOf('email') === -1) {
            input.setAttribute('placeholder', 'Username');
          } else {
            input.setAttribute('placeholder', 'Email');
          }
        } else if (labelText) {
          input.setAttribute('placeholder', labelText);
        } else {
          input.setAttribute('placeholder', 'Username');
        }
      }
    });

    // Non-destructive alignment of Forgot Password? (left) and LOGIN pill button (right)
    var submitBtn = formCol.querySelector('button[type="submit"], button.Button__ButtonStyle-sc-1qu1gou-0, button.cDkCmT');
    var forgotLink = formCol.querySelector('a[href*="password"], .LoginContainer___StyledLink-sc-qtrnpk-4');

    if (forgotLink) {
      if (forgotLink.textContent !== 'Forgot Password?') {
        forgotLink.textContent = 'Forgot Password?';
      }
      forgotLink.classList.add('hx-forgot-link');
      forgotLink.style.setProperty('text-transform', 'none', 'important');
      forgotLink.style.setProperty('color', '#9e4770', 'important');
    }

    if (submitBtn) {
      var submitParent = submitBtn.parentElement;
      var forgotParent = forgotLink ? forgotLink.parentElement : null;

      if (submitParent && forgotParent && submitParent === forgotParent) {
        submitParent.classList.add('hx-action-row');
      } else {
        if (submitParent && submitParent !== formCol) {
          submitParent.classList.add('hx-submit-row');
        }
        if (forgotParent && forgotParent !== formCol) {
          forgotParent.classList.add('hx-forgot-row');
        }
      }

      // Inline !important enforcement on submitBtn so panel.blade.php (.cDkCmT) never turns it blue
      submitBtn.style.setProperty('background', 'linear-gradient(180deg, #b55784 0%, #a44673 100%)', 'important');
      submitBtn.style.setProperty('background-color', '#ad4e7b', 'important');
      submitBtn.style.setProperty('border-radius', '999px', 'important');
      submitBtn.style.setProperty('border', '0', 'important');
      submitBtn.style.setProperty('width', 'auto', 'important');
      submitBtn.style.setProperty('min-width', '118px', 'important');
      submitBtn.style.setProperty('max-width', '156px', 'important');
      submitBtn.style.setProperty('height', '36px', 'important');
      submitBtn.style.setProperty('min-height', '36px', 'important');
      submitBtn.style.setProperty('padding', '0 30px', 'important');
      submitBtn.style.setProperty('margin', '0 0 0 auto', 'important');
      submitBtn.style.setProperty('color', '#ffffff', 'important');
      submitBtn.style.setProperty('box-shadow', '0 5px 14px rgba(174, 80, 125, 0.32)', 'important');

      var submitSpan = submitBtn.querySelector('span');
      var btnLabel = isRegister ? 'SIGN IN' : 'LOGIN';
      if (submitSpan) {
        if (submitSpan.textContent !== btnLabel) submitSpan.textContent = btnLabel;
        submitSpan.style.setProperty('color', '#ffffff', 'important');
        submitSpan.style.setProperty('text-transform', 'uppercase', 'important');
        submitSpan.style.setProperty('font-size', '11.5px', 'important');
        submitSpan.style.setProperty('font-weight', '600', 'important');
      } else if (submitBtn.textContent !== btnLabel) {
        submitBtn.textContent = btnLabel;
      }
    }
  }

  function applyHelzerXAuth() {
    ensureStylePriority();
    var path = window.location.pathname.toLowerCase();
    if (path.indexOf('/auth/register') !== -1) {
      document.body.classList.add('hx-auth-register');
    } else if (path.indexOf('/auth/login') !== -1) {
      document.body.classList.remove('hx-auth-register');
    }

    var container = findContainer();
    if (!container) return;

    buildLeftGeometricPanel(container);
    buildBottomSocialBar(container);
    hideExtraRegisterLinks(container);
    syncFormElements(container);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', applyHelzerXAuth);
  } else {
    applyHelzerXAuth();
  }

  var observer = new MutationObserver(function () {
    var container = findContainer();
    if (container) {
      ensureStylePriority();
      buildLeftGeometricPanel(container);
      buildBottomSocialBar(container);
      hideExtraRegisterLinks(container);
      syncFormElements(container);
    }
  });
  observer.observe(document.documentElement, { childList: true, subtree: true });
  window.addEventListener('popstate', applyHelzerXAuth);
})();
</script>
@endif
