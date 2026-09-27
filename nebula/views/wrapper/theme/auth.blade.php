@if(Auth::check() != true)
<script>
  document.querySelector("head > meta[name='theme-color'][content='#0e4688']").setAttribute("content", "{{ $n_palette_auth_1 }}")
</script>
<!-- PTERODACTYL AUTHENTICATION THEMING -->
<style id="nebula-authentication-theme">
  html, body {
    background-color: #000 !important;
  }
  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY { position: fixed; z-index: 4; top: 0; left: 0 !important; width: 100% !important; }

  @keyframes backdrop {
    0%   {scale: calc(.1 +@if($n_auth_background_appearance == "1") 2.4 @else 1 @endif)}
    100% {scale: @if($n_auth_background_appearance == "1") 2 @else 1 @endif}
  }

  @if($n_auth_customlogo != "")
    .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
      content: url("{{ $n_auth_customlogo }}");
      border-radius: 10px;
      padding: 0;
      height: 65px;
      max-width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
  @endif

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    padding-bottom: .5rem !important;
    padding-top: unset !important;
  }

  .nebula-auth-wallpaper { 
    z-index: 3;
    overflow: hidden;
    @if($n_auth_background_image == "")background-color: var(--authA);
    @else background: url("{{ $n_auth_background_image }}") no-repeat; background-color: #000;@endif
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100vw;
    top: 0; left: 0;
    position: fixed;
    @if($n_auth_background_appearance == "1")filter: blur(50px);scale: 2;@endif
    @if($n_auth_background_appearance == "1")filter: blur(50px);@endif
    @if($n_auth_background_appearance == "2")opacity: 0.6;@endif
    animation: backdrop 2s;
  }
  .nebula-auth-backdrop {
    background-color: #000 !important;
    z-index: 2;
    position: fixed;
    left: 0; top: 0;
    width: 100vw; height: 100vh;
  }

  div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: var(--pageBackground) !important; z-index: 1; }
  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { padding-left: 10px !important; padding-right: 10px !important; }

  /* login container */
  div.LoginFormContainer__Container-sc-cyh04c-0 {
    z-index: 4;
    position: fixed;
    width: 30%;
    left: 50%;
    background-color: var(--authB);
    border-radius: var(--borderRadiusAuth);
    top: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    padding: 40px !important;
  }
  @media screen and (max-width: 1200px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 40%;}}
  @media screen and (max-width: 1100px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 45%;}}
  @media screen and (max-width: 1000px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 50%;}}
  @media screen and (max-width: 900px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 55%;}}
  @media screen and (max-width: 800px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 60%; padding: 30px !important;}}
  @media screen and (max-width: 700px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 70%; padding: 25px !important;}}
  @media screen and (max-width: 600px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 80%; padding: 20px !important;}}
  @media screen and (max-width: 500px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 90%; padding: 15px !important;}}


  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { background: none; background-color: #00000000; box-shadow: none; }
  div.LoginFormContainer___StyledDiv2-sc-cyh04c-4 { display: none; }
  .Input-sc-19rce1w-0.fFYzlR {
    background: none !important;
    background-color: var(--authC) !important;
    border: none;
    border-bottom: 5px var(--authD) solid !important;
    border-radius: 0;
  }
  .Input-sc-19rce1w-0.floJYL {
    background: none !important;
    background-color: var(--authC) !important;
    border: none;
    border-bottom: 5px var(--authE) solid !important;
    border-radius: 0;
  }
  input[type=text],input[type=text]::placeholder, 
  input[type=password],input[type=password]::placeholder, 
  input[type=email],input[type=email]::placeholder{
    color:white !important;
  }

  .dLAOsI:not(:disabled),
  .Button__ButtonStyle-sc-1qu1gou-0.dLAOsI {
    background: none !important;
    background-color: var(--authF) !important;
    transition: opacity .2s;
    border: none !important;
  }
  .dLAOsI:hover:not(:disabled) {
    background-color: var(--authF) !important;
    opacity: 0.90;
  }

  /* le button */
  button.Button__ButtonStyle-sc-1qu1gou-0 span.Button___StyledSpan-sc-1qu1gou-2 {
    color: var(--authH) !important;
  }
  .jtfgdV {
    border-color: var(--authH) color-mix(in hsl, var(--authH) 20%, transparent) color-mix(in hsl, var(--authH) 20%, transparent) !important;
  }

  /*ptero footer*/
  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
    padding: 0;
    margin: 0;
    opacity: 0.5;
  }


  .cjgCjC {
    color: #606060 !important;
  }
  .dqkKHi,
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC {
    color: var(--authG) !important;
    transition: color .2s !important;
  }
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC:hover {
    color: color-mix(in hsl, var(--authG) 90%, white) !important;
  }


  
  /* =========================================================
     HELZERX AUTH UI
     Glassmorphism authentication redesign
     ========================================================= */

  html, body {
    min-height: 100%;
    overflow-x: hidden;
    background:
      radial-gradient(circle at 16% 12%, rgba(255, 78, 105, .14), transparent 30%),
      radial-gradient(circle at 86% 86%, rgba(255, 255, 255, .035), transparent 28%),
      #08090b !important;
  }

  .nebula-auth-wallpaper {
    background-color: #08090b !important;
    opacity: 1 !important;
    filter: none !important;
    transform: none !important;
    animation: none !important;
  }

  .nebula-auth-wallpaper::before {
    content: "";
    position: absolute;
    inset: -18%;
    background:
      radial-gradient(circle at 18% 14%, rgba(255, 74, 102, .20), transparent 22%),
      radial-gradient(circle at 82% 80%, rgba(255, 255, 255, .035), transparent 25%);
    filter: blur(55px);
    pointer-events: none;
  }

  .nebula-auth-backdrop {
    background:
      linear-gradient(135deg, rgba(0,0,0,.78), rgba(7,8,10,.90)) !important;
    backdrop-filter: blur(3px);
    -webkit-backdrop-filter: blur(3px);
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: min(455px, calc(100vw - 32px)) !important;
    max-width: 455px !important;
    box-sizing: border-box !important;
    padding: 38px !important;
    border: 1px solid rgba(255,255,255,.17) !important;
    border-radius: 28px !important;
    background:
      linear-gradient(145deg, rgba(35,36,39,.66), rgba(15,16,18,.58)) !important;
    box-shadow:
      0 35px 90px rgba(0,0,0,.58),
      inset 0 1px 0 rgba(255,255,255,.08),
      inset 0 0 0 1px rgba(255,255,255,.025) !important;
    backdrop-filter: blur(30px) saturate(125%) !important;
    -webkit-backdrop-filter: blur(30px) saturate(125%) !important;
    overflow: hidden !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before {
    content: "";
    position: absolute;
    width: 210px;
    height: 150px;
    left: -80px;
    top: -85px;
    border-radius: 50%;
    background: rgba(255, 76, 104, .26);
    filter: blur(45px);
    pointer-events: none;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    box-shadow: inset 0 0 55px rgba(255,255,255,.018);
    pointer-events: none;
  }

  /* Replace the default Nebula/Pterodactyl heading presentation. */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    position: relative;
    display: block !important;
    width: 100% !important;
    height: auto !important;
    max-width: none !important;
    margin: 0 0 28px !important;
    padding: 0 !important;
    border: 0 !important;
    background: none !important;
    content: none !important;
    text-align: center !important;
    font-size: 0 !important;
    line-height: 1 !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
    content: "Welcome back";
    display: block;
    color: #f5f5f6;
    font-size: 30px;
    line-height: 1.15;
    font-weight: 650;
    letter-spacing: -.7px;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
    content: "Sign in to your account";
    display: block;
    margin-top: 9px;
    color: rgba(255,255,255,.43);
    font-size: 13px;
    line-height: 1.4;
    font-weight: 400;
    letter-spacing: .1px;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy img,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy svg {
    display: none !important;
  }

  /* Field labels */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label {
    color: rgba(255,255,255,.78) !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    letter-spacing: .01em !important;
    margin-bottom: 7px !important;
  }

  /* Glass input fields */
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="text"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="email"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="password"] {
    width: 100% !important;
    height: 52px !important;
    box-sizing: border-box !important;
    padding: 0 16px !important;
    color: #f7f7f8 !important;
    background: rgba(255,255,255,.055) !important;
    border: 1px solid rgba(255,255,255,.105) !important;
    border-radius: 15px !important;
    outline: none !important;
    box-shadow: inset 0 1px 1px rgba(255,255,255,.025) !important;
    transition: border-color .18s ease, background .18s ease, box-shadow .18s ease !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="text"]::placeholder,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="email"]::placeholder,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="password"]::placeholder {
    color: rgba(255,255,255,.30) !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="text"]:focus,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="email"]:focus,
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="password"]:focus {
    background: rgba(255,255,255,.075) !important;
    border-color: rgba(255,92,116,.52) !important;
    box-shadow:
      0 0 0 3px rgba(255,75,102,.08),
      0 8px 25px rgba(0,0,0,.12) !important;
  }

  .Input-sc-19rce1w-0.fFYzlR,
  .Input-sc-19rce1w-0.floJYL {
    border: 1px solid rgba(255,255,255,.105) !important;
    border-radius: 15px !important;
  }

  /* Primary action */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:not(:disabled) {
    position: relative !important;
    width: 100% !important;
    min-height: 52px !important;
    margin-top: 4px !important;
    border: 1px solid rgba(255,255,255,.10) !important;
    border-radius: 16px !important;
    background: linear-gradient(135deg, #ff617b 0%, #ff405f 100%) !important;
    color: #fff !important;
    box-shadow:
      0 12px 28px rgba(255,64,95,.18),
      inset 0 1px 0 rgba(255,255,255,.18) !important;
    transition: transform .18s ease, filter .18s ease, box-shadow .18s ease !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI:hover:not(:disabled),
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:hover:not(:disabled) {
    opacity: 1 !important;
    filter: brightness(1.05) !important;
    transform: translateY(-1px) !important;
    box-shadow:
      0 15px 32px rgba(255,64,95,.24),
      inset 0 1px 0 rgba(255,255,255,.20) !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI
  span.Button___StyledSpan-sc-1qu1gou-2 {
    color: #fff !important;
    font-weight: 600 !important;
  }

  /* Forgot password / secondary links */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE a,
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC,
  .dqkKHi {
    color: rgba(255,255,255,.54) !important;
    text-decoration: none !important;
    transition: color .18s ease !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE a:hover,
  .LoginContainer___StyledLink-sc-qtrnpk-4.cjgCjC:hover,
  .dqkKHi:hover {
    color: #ff6b82 !important;
  }

  /* Social login row */
  .SocialLogin\:container {
    display: flex !important;
    gap: 10px !important;
    margin: 22px 0 0 !important;
    padding: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
  }

  .SocialLogin\:container > * {
    flex: 1 1 0 !important;
    min-width: 0 !important;
  }

  .SocialLogin\:container button,
  .SocialLogin\:container a,
  .style-module_Yp7-2Fw- {
    min-height: 48px !important;
    border: 1px solid rgba(255,255,255,.09) !important;
    border-radius: 14px !important;
    background: rgba(255,255,255,.045) !important;
    color: rgba(255,255,255,.80) !important;
    transition: background .18s ease, border-color .18s ease, transform .18s ease !important;
  }

  .SocialLogin\:container button:hover,
  .SocialLogin\:container a:hover,
  .style-module_Yp7-2Fw-:hover {
    background: rgba(255,255,255,.085) !important;
    border-color: rgba(255,255,255,.16) !important;
    transform: translateY(-1px) !important;
  }

  /* Divider */
  .SocialLogin\:container::before {
    content: "OR";
    position: absolute;
    left: 50%;
    transform: translate(-50%, -36px);
    color: rgba(255,255,255,.32);
    background: #191a1d;
    padding: 0 12px;
    font-size: 10px;
    letter-spacing: .16em;
    font-weight: 600;
  }

  .SocialLogin\:container {
    position: relative !important;
    padding-top: 14px !important;
    margin-top: 28px !important;
    border-top: 1px solid rgba(255,255,255,.08) !important;
  }

  /* Bottom authentication text */
  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
    margin-top: 20px !important;
    padding: 0 !important;
    color: rgba(255,255,255,.38) !important;
    opacity: 1 !important;
    font-size: 12px !important;
  }

  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK a {
    color: #ff617b !important;
    font-weight: 500 !important;
  }

  /* Keep errors visible but match the new surface */
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  [role="alert"] {
    border-radius: 13px !important;
    border: 1px solid rgba(255,80,100,.22) !important;
    background: rgba(255,70,90,.08) !important;
  }

  @media (max-width: 600px) {
    div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
      width: calc(100vw - 24px) !important;
      padding: 28px 22px 24px !important;
      border-radius: 24px !important;
    }

    .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
    .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
      font-size: 27px;
    }
  }

  @media (max-height: 700px) {
    div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
      top: 12px;
      transform: translateX(-50%);
      max-height: calc(100vh - 24px);
      overflow-y: auto;
    }
  }

</style>
@endif