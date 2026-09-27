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


/* =========================================================
   HELZERX AUTH V3 — reference glass plant authentication UI
   ========================================================= */
html, body {
  min-height: 100%;
  overflow-x: hidden;
  background: radial-gradient(circle at 14% 25%, rgba(255,255,255,.22), transparent 28%), linear-gradient(110deg,#b77aaa 0%,#f1d5ee 48%,#8e849e 76%,#151c35 100%) !important;
}
.nebula-auth-wallpaper {
  background: radial-gradient(circle at 18% 38%,rgba(255,182,222,.55),transparent 32%),radial-gradient(circle at 52% 20%,rgba(255,238,251,.55),transparent 35%),linear-gradient(110deg,#b77aaa 0%,#f0d4ed 48%,#8e849e 76%,#151c35 100%) !important;
  filter:none !important; opacity:1 !important; transform:none !important; animation:none !important;
}
.nebula-auth-wallpaper::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 73% 70%,rgba(109,91,255,.22),transparent 26%),radial-gradient(circle at 24% 18%,rgba(255,255,255,.2),transparent 24%);filter:blur(30px);}
.nebula-auth-backdrop{background:transparent !important;backdrop-filter:blur(2px);-webkit-backdrop-filter:blur(2px);}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE{
  z-index:4 !important;width:min(1180px,calc(100vw - 80px)) !important;max-width:1180px !important;min-height:560px !important;padding:0 !important;position:fixed !important;left:50% !important;top:50% !important;transform:translate(-50%,-50%) !important;border:1px solid rgba(255,255,255,.42) !important;border-radius:42px !important;overflow:visible !important;background:rgba(236,203,234,.46) !important;box-shadow:0 35px 90px rgba(55,31,68,.24),inset 0 1px 0 rgba(255,255,255,.55) !important;backdrop-filter:blur(28px) saturate(120%) !important;-webkit-backdrop-filter:blur(28px) saturate(120%) !important;
}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after{
  content:"";position:absolute;z-index:1;right:-1px;top:-1px;width:54%;height:calc(100% + 2px);
  background:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20520%20560%22%3E%3Cdefs%3E%3ClinearGradient%20id%3D%22b%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%221%22%20y2%3D%221%22%3E%3Cstop%20stop-color%3D%22%230b0b18%22%2F%3E%3Cstop%20offset%3D%22.55%22%20stop-color%3D%22%23101126%22%2F%3E%3Cstop%20offset%3D%221%22%20stop-color%3D%22%2319132b%22%2F%3E%3C%2FlinearGradient%3E%3ClinearGradient%20id%3D%22l%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%221%22%20y2%3D%221%22%3E%3Cstop%20stop-color%3D%22%236d72ff%22%2F%3E%3Cstop%20offset%3D%22.5%22%20stop-color%3D%22%23a987ef%22%2F%3E%3Cstop%20offset%3D%221%22%20stop-color%3D%22%23ef8db7%22%2F%3E%3C%2FlinearGradient%3E%3ClinearGradient%20id%3D%22p%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220%22%20y2%3D%221%22%3E%3Cstop%20stop-color%3D%22%23d58b9f%22%2F%3E%3Cstop%20offset%3D%221%22%20stop-color%3D%22%23694866%22%2F%3E%3C%2FlinearGradient%3E%3Cfilter%20id%3D%22g%22%3E%3CfeGaussianBlur%20stdDeviation%3D%2218%22%2F%3E%3C%2Ffilter%3E%3C%2Fdefs%3E%3Crect%20width%3D%22520%22%20height%3D%22560%22%20rx%3D%2244%22%20fill%3D%22url(%23b)%22%2F%3E%3Cellipse%20cx%3D%22260%22%20cy%3D%22500%22%20rx%3D%22175%22%20ry%3D%2234%22%20fill%3D%22%23c77bdc%22%20opacity%3D%22.28%22%20filter%3D%22url(%23g)%22%2F%3E%3Cg%20fill%3D%22url(%23l)%22%20stroke%3D%22%23f4b6d4%22%20stroke-opacity%3D%22.18%22%20stroke-width%3D%222%22%3E%3Crect%20x%3D%22225%22%20y%3D%2260%22%20width%3D%2272%22%20height%3D%22285%22%20rx%3D%2236%22%2F%3E%3Crect%20x%3D%22122%22%20y%3D%22130%22%20width%3D%2270%22%20height%3D%22225%22%20rx%3D%2235%22%20transform%3D%22rotate(-28%20157%20242)%22%2F%3E%3Crect%20x%3D%22328%22%20y%3D%22130%22%20width%3D%2270%22%20height%3D%22235%22%20rx%3D%2235%22%20transform%3D%22rotate(28%20363%20247)%22%2F%3E%3Crect%20x%3D%22170%22%20y%3D%22185%22%20width%3D%2264%22%20height%3D%22190%22%20rx%3D%2232%22%20transform%3D%22rotate(-48%20202%20280)%22%2F%3E%3Crect%20x%3D%22286%22%20y%3D%22185%22%20width%3D%2264%22%20height%3D%22190%22%20rx%3D%2232%22%20transform%3D%22rotate(48%20318%20280)%22%2F%3E%3C%2Fg%3E%3Cg%20fill%3D%22none%22%20stroke%3D%22%23ef9fbe%22%20stroke-width%3D%228%22%20stroke-linecap%3D%22round%22%3E%3Cpath%20d%3D%22M205%20365c-30-35-55-55-80-82%22%2F%3E%3Cpath%20d%3D%22M315%20365c30-35%2055-60%2080-88%22%2F%3E%3Cpath%20d%3D%22M252%20380c-32-40-42-65-52-100%22%2F%3E%3Cpath%20d%3D%22M270%20380c30-40%2040-65%2050-102%22%2F%3E%3C%2Fg%3E%3Cg%20fill%3D%22%23f3a4c2%22%3E%3Cpath%20d%3D%22M154%20298l-34-18%2010%2042z%22%2F%3E%3Cpath%20d%3D%22M382%20286l35-20-10%2042z%22%2F%3E%3Cpath%20d%3D%22M195%20338l-28-4%2020%2025z%22%2F%3E%3Cpath%20d%3D%22M327%20337l29-6-20%2025z%22%2F%3E%3C%2Fg%3E%3Cpath%20d%3D%22M112%20360Q260%20382%20408%20360L382%20480Q260%20530%20138%20480Z%22%20fill%3D%22url(%23p)%22%2F%3E%3Cellipse%20cx%3D%22260%22%20cy%3D%22360%22%20rx%3D%22148%22%20ry%3D%2230%22%20fill%3D%22%23d9829b%22%2F%3E%3Cellipse%20cx%3D%22260%22%20cy%3D%22365%22%20rx%3D%22124%22%20ry%3D%2217%22%20fill%3D%22%233b293e%22%20opacity%3D%22.72%22%2F%3E%3Cpath%20d%3D%22M135%20455Q260%20505%20385%20455%22%20fill%3D%22none%22%20stroke%3D%22%23f4a1c3%22%20stroke-opacity%3D%22.2%22%20stroke-width%3D%226%22%2F%3E%3Cg%20fill%3D%22%23fff%22%20opacity%3D%22.72%22%3E%3Ccircle%20cx%3D%2295%22%20cy%3D%22100%22%20r%3D%223%22%2F%3E%3Ccircle%20cx%3D%22430%22%20cy%3D%22120%22%20r%3D%223%22%2F%3E%3Ccircle%20cx%3D%2280%22%20cy%3D%22330%22%20r%3D%222%22%2F%3E%3Ccircle%20cx%3D%22450%22%20cy%3D%22300%22%20r%3D%222%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") center/cover no-repeat;
  border-radius:0 42px 42px 0;box-shadow:inset 1px 0 0 rgba(255,255,255,.10);pointer-events:none;
}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before{content:"";position:absolute;z-index:2;top:0;bottom:0;left:48%;width:110px;transform:translateX(-50%);background:linear-gradient(90deg,transparent,rgba(255,255,255,.18),transparent);filter:blur(14px);pointer-events:none;}
div.LoginFormContainer___StyledDiv-sc-cyh04c-3{position:relative !important;z-index:4 !important;width:60% !important;min-height:560px !important;box-sizing:border-box !important;padding:74px 90px 48px 92px !important;display:block !important;background:rgba(245,218,241,.24) !important;box-shadow:none !important;border-radius:42px 0 0 42px !important;}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy{position:relative !important;width:100% !important;height:auto !important;max-width:none !important;margin:0 0 38px !important;padding:0 !important;background:transparent !important;border:0 !important;content:none !important;text-align:center !important;font-size:0 !important;line-height:1 !important;color:#38243f !important;}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before{content:"Sign In";display:block;color:#402847;font-size:35px;line-height:1.15;font-weight:750;letter-spacing:-.8px;}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after{content:"Welcome back";display:block;margin-top:10px;color:rgba(57,35,64,.60);font-size:13px;line-height:1.4;font-weight:500;}
body.hx-auth-register .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before{content:"Sign Up";}
body.hx-auth-register .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after{content:"Create your account";}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy img,.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy svg{display:none !important;}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label{color:#35213d !important;font-size:13px !important;font-weight:650 !important;margin-bottom:4px !important;}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"],div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"],div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"]{width:100% !important;height:52px !important;box-sizing:border-box !important;padding:0 42px 0 0 !important;color:#24172c !important;background:transparent !important;border:0 !important;border-bottom:2px solid rgba(54,33,63,.45) !important;border-radius:0 !important;outline:none !important;box-shadow:none !important;}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input::placeholder{color:rgba(49,29,58,.82) !important;}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input:focus{border-bottom-color:#70466f !important;}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE .dLAOsI:not(:disabled){width:100% !important;min-height:58px !important;margin-top:20px !important;border:0 !important;border-radius:30px !important;background:linear-gradient(180deg,#a35d9d 0%,#251a37 100%) !important;color:#fff !important;box-shadow:0 12px 25px rgba(55,28,65,.22) !important;}
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI span{color:#fff !important;font-size:16px !important;font-weight:750 !important;}
.SocialLogin\:container{display:none !important;}
.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK{margin-top:34px !important;padding:0 !important;color:rgba(47,29,56,.82) !important;opacity:1 !important;text-align:center !important;font-size:13px !important;}
.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK a{color:#6c3f72 !important;font-weight:700 !important;text-decoration:none !important;}
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE [role="alert"]{border-radius:12px !important;border:1px solid rgba(122,45,85,.20) !important;background:rgba(255,255,255,.28) !important;color:#43283f !important;}
@media(max-width:760px){div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE{width:calc(100vw - 24px) !important;min-height:0 !important;max-height:calc(100vh - 24px) !important;overflow-y:auto !important;border-radius:28px !important;}div.LoginFormContainer___StyledDiv-sc-cyh04c-3{width:100% !important;min-height:0 !important;padding:44px 30px 34px !important;border-radius:28px !important;}div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after,div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before{display:none !important;}}
@media(max-width:420px){div.LoginFormContainer___StyledDiv-sc-cyh04c-3{padding:36px 22px 28px !important;}}

/* =========================================================
   HELZERX AUTH V4 — reference composition
   Built to preserve the exact visual proportions of the
   supplied glass / plant reference on desktop and mobile.
   ========================================================= */

html, body {
  min-height: 100% !important;
  overflow: hidden !important;
  background:
    radial-gradient(circle at 19% 33%, rgba(255,255,255,.22), transparent 24%),
    radial-gradient(circle at 53% 20%, rgba(255,245,255,.48), transparent 28%),
    linear-gradient(108deg, #b477a8 0%, #dbaed3 25%, #f1d6ef 49%, #a59aaa 76%, #171d37 100%) !important;
}

.nebula-auth-wallpaper {
  z-index: 3 !important;
  background:
    radial-gradient(circle at 20% 36%, rgba(255,190,227,.48), transparent 28%),
    radial-gradient(circle at 52% 16%, rgba(255,245,255,.58), transparent 30%),
    linear-gradient(108deg, #b477a8 0%, #dbaed3 25%, #f1d6ef 49%, #a59aaa 76%, #171d37 100%) !important;
  opacity: 1 !important;
  filter: none !important;
  transform: none !important;
  animation: none !important;
}

.nebula-auth-wallpaper::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 74% 75%, rgba(82,74,180,.22), transparent 25%),
    radial-gradient(circle at 26% 18%, rgba(255,255,255,.18), transparent 23%);
  filter: blur(28px);
}

.nebula-auth-backdrop {
  background: transparent !important;
  z-index: 2 !important;
  backdrop-filter: blur(1px) !important;
  -webkit-backdrop-filter: blur(1px) !important;
}

/* Main 1536px reference composition: 1310 x 560. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
  z-index: 4 !important;
  width: min(1310px, calc(100vw - 24px)) !important;
  max-width: 1310px !important;
  height: auto !important;
  min-height: 0 !important;
  aspect-ratio: 1310 / 560 !important;
  padding: 0 !important;
  position: fixed !important;
  left: 50% !important;
  top: 50% !important;
  transform: translate(-50%, -50%) !important;
  overflow: visible !important;
  border: 0 !important;
  border-radius: 42px !important;
  background: rgba(244,213,239,.40) !important;
  box-shadow:
    0 35px 80px rgba(58,35,68,.22),
    inset 0 1px 0 rgba(255,255,255,.60) !important;
  backdrop-filter: blur(24px) saturate(118%) !important;
  -webkit-backdrop-filter: blur(24px) saturate(118%) !important;
}

/* Actual reference plant artwork. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
  content: "";
  position: absolute;
  z-index: 2;
  top: -1px;
  right: -1px;
  width: 49%;
  height: calc(100% + 2px);
  border-radius: 44px;
  background:
    url("data:image/jpeg;base64,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") center center / cover no-repeat !important;
  box-shadow:
    0 20px 50px rgba(25,16,43,.20),
    inset 0 1px 0 rgba(255,255,255,.10);
  pointer-events: none;
}

/* Subtle glass edge/highlight between the two reference panels. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before {
  content: "";
  position: absolute;
  z-index: 3;
  left: 50%;
  top: 0;
  width: 110px;
  height: 100%;
  transform: translateX(-50%);
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.16), transparent);
  filter: blur(13px);
  pointer-events: none;
}

/* Form panel: reference left panel is ~55% of composition. */
div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
  position: relative !important;
  z-index: 5 !important;
  width: 55% !important;
  height: 100% !important;
  min-height: 0 !important;
  box-sizing: border-box !important;
  padding: clamp(34px, 5.2vw, 72px) clamp(34px, 5.8vw, 90px) clamp(28px, 4vw, 54px) !important;
  display: block !important;
  background: rgba(245,220,241,.23) !important;
  box-shadow: none !important;
  border-radius: 42px !important;
}

/* Reference typography. */
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
  position: relative !important;
  width: 100% !important;
  height: auto !important;
  max-width: none !important;
  margin: 0 0 clamp(20px, 2.6vw, 38px) !important;
  padding: 0 !important;
  background: transparent !important;
  border: 0 !important;
  text-align: center !important;
  font-size: 0 !important;
  line-height: 1 !important;
  color: #3b2441 !important;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
  content: "Sign In";
  display: block;
  color: #45284a;
  font-size: clamp(21px, 2.28vw, 35px);
  line-height: 1.15;
  font-weight: 750;
  letter-spacing: -.8px;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
  content: "Welcome back";
  display: block;
  margin-top: 7px;
  color: rgba(57,35,64,.60);
  font-size: clamp(9px, .85vw, 13px);
  line-height: 1.35;
  font-weight: 500;
}

body.hx-auth-register
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
  content: "Sign Up";
}

body.hx-auth-register
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
  content: "Create your account";
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy img,
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy svg {
  display: none !important;
}

/* Underline inputs, matching the reference. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label {
  color: #35213d !important;
  font-size: clamp(8px, .85vw, 13px) !important;
  font-weight: 650 !important;
  margin-bottom: 0 !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"],
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"],
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"] {
  width: 100% !important;
  height: clamp(30px, 3.4vw, 52px) !important;
  box-sizing: border-box !important;
  padding: 0 clamp(28px, 3vw, 44px) 0 0 !important;
  color: #2c1b31 !important;
  background: transparent !important;
  border: 0 !important;
  border-bottom: 2px solid rgba(54,33,63,.45) !important;
  border-radius: 0 !important;
  outline: none !important;
  box-shadow: none !important;
  font-size: clamp(9px, .9vw, 14px) !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"]::placeholder,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"]::placeholder,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"]::placeholder {
  color: rgba(49,29,58,.82) !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"]:focus,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"]:focus,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"]:focus {
  border-bottom-color: #70466f !important;
}

/* Right-side field icons, using the same simple black icon language as reference. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='3' y='5' width='18' height='14' rx='2'/%3E%3Cpath d='m3 7 9 6 9-6'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 3px center !important;
  background-size: clamp(13px, 1.45vw, 22px) !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='5' y='10' width='14' height='10' rx='2'/%3E%3Cpath d='M8 10V7a4 4 0 0 1 8 0v3'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 3px center !important;
  background-size: clamp(13px, 1.45vw, 22px) !important;
}

body.hx-auth-register
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='8' r='3'/%3E%3Cpath d='M5 20a7 7 0 0 1 14 0'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 3px center !important;
  background-size: clamp(13px, 1.45vw, 22px) !important;
}

/* Reference button. */
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.dLAOsI:not(:disabled) {
  width: 100% !important;
  min-height: clamp(34px, 3.8vw, 58px) !important;
  margin-top: clamp(8px, 1.3vw, 20px) !important;
  border: 0 !important;
  border-radius: 999px !important;
  background: linear-gradient(180deg, #a55e9c 0%, #251a37 100%) !important;
  color: #fff !important;
  box-shadow: 0 10px 24px rgba(55,28,65,.20) !important;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI span {
  color: #fff !important;
  font-size: clamp(10px, 1.05vw, 16px) !important;
  font-weight: 750 !important;
}

/* Keep the authentication footer in the reference position. */
.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
  margin-top: clamp(12px, 2.2vw, 34px) !important;
  padding: 0 !important;
  color: rgba(47,29,56,.82) !important;
  opacity: 1 !important;
  text-align: center !important;
  font-size: clamp(8px, .85vw, 13px) !important;
}

.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK a {
  color: #6c3f72 !important;
  font-weight: 700 !important;
  text-decoration: none !important;
}

/* Remove the extra social row from the reference composition. */
.SocialLogin\:container {
  display: none !important;
}

/* Errors remain functional but visually quiet. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE [role="alert"] {
  border-radius: 10px !important;
  border: 1px solid rgba(122,45,85,.20) !important;
  background: rgba(255,255,255,.28) !important;
  color: #43283f !important;
  font-size: clamp(8px, .8vw, 12px) !important;
}

/* The supplied reference scales down as one composition instead of
   switching to the broken tall/mobile card seen previously. */
@media (max-width: 760px) {
  html, body {
    overflow: hidden !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 24px) !important;
    max-width: none !important;
    aspect-ratio: 1310 / 560 !important;
    border-radius: 22px !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    width: 55% !important;
    height: 100% !important;
    padding: 7.2% 7% 5% !important;
    border-radius: 22px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 49% !important;
    border-radius: 22px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    margin-bottom: 5.5% !important;
  }
}


/* =========================================================
   HELZERX AUTH V4 — reference-matched responsive composition
   The supplied reference artwork is used as the right-side
   illustration; the composition is kept intact on desktop
   and adapted cleanly for smaller screens.
   ========================================================= */

html, body {
  min-height: 100% !important;
  overflow-x: hidden !important;
  background:
    linear-gradient(108deg, #b779ac 0%, #efd0eb 46%, #94899f 75%, #141b34 100%) !important;
}

.nebula-auth-wallpaper {
  inset: 0 !important;
  width: 100vw !important;
  height: 100vh !important;
  background:
    radial-gradient(circle at 20% 28%, rgba(255,206,239,.38), transparent 28%),
    radial-gradient(circle at 55% 42%, rgba(255,239,250,.32), transparent 30%),
    linear-gradient(108deg, #b779ac 0%, #efd0eb 46%, #94899f 75%, #141b34 100%) !important;
  opacity: 1 !important;
  filter: none !important;
  transform: none !important;
  animation: none !important;
}

.nebula-auth-wallpaper::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 78% 72%, rgba(77,62,148,.20), transparent 28%),
    radial-gradient(circle at 30% 85%, rgba(255,191,226,.22), transparent 30%);
  filter: blur(35px);
  pointer-events: none;
}

.nebula-auth-backdrop {
  background: transparent !important;
  backdrop-filter: none !important;
  -webkit-backdrop-filter: none !important;
}

/* Main reference frame: 1310 × 562. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
  z-index: 4 !important;
  position: fixed !important;
  left: 50% !important;
  top: 50% !important;
  transform: translate(-50%, -50%) !important;
  width: min(1310px, calc(100vw - 48px)) !important;
  max-width: 1310px !important;
  height: min(562px, calc(100vh - 48px)) !important;
  min-height: 0 !important;
  padding: 0 !important;
  box-sizing: border-box !important;
  overflow: visible !important;
  border: 1px solid rgba(255,255,255,.43) !important;
  border-radius: 42px !important;
  background: rgba(236,204,234,.46) !important;
  box-shadow:
    0 34px 90px rgba(56,31,69,.25),
    inset 0 1px 0 rgba(255,255,255,.56) !important;
  backdrop-filter: blur(27px) saturate(120%) !important;
  -webkit-backdrop-filter: blur(27px) saturate(120%) !important;
}

/* Reference artwork: exact crop of the supplied image's right panel.
   1536×960 source is shown as the 640×705 panel crop x=800..1440,
   y=140..845. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
  content: "" !important;
  position: absolute !important;
  z-index: 6 !important;
  right: -1px !important;
  top: -82px !important;
  width: 640px !important;
  height: 705px !important;
  max-width: none !important;
  border-radius: 42px !important;
  background-image: url("data:image/jpeg;base64,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") !important;
  background-repeat: no-repeat !important;
  background-size: 240% 136% !important;
  background-position: 89.3% 55% !important;
  background-color: #0b0b19 !important;
  box-shadow:
    0 22px 52px rgba(25,16,43,.22),
    inset 0 1px 0 rgba(255,255,255,.12) !important;
  pointer-events: none !important;
}

/* Remove the previous central glow that could cover the artwork. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::before {
  display: none !important;
}

/* Left glass panel — reference is approximately 676px wide. */
div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
  position: relative !important;
  z-index: 7 !important;
  width: 52% !important;
  height: 100% !important;
  min-height: 0 !important;
  box-sizing: border-box !important;
  padding: 74px 130px 48px !important;
  display: block !important;
  background: rgba(245,220,241,.23) !important;
  box-shadow: none !important;
  border-radius: 42px !important;
}

/* Heading. */
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
  position: relative !important;
  z-index: 8 !important;
  width: 100% !important;
  height: auto !important;
  margin: 0 0 42px !important;
  padding: 0 !important;
  background: transparent !important;
  border: 0 !important;
  text-align: center !important;
  font-size: 0 !important;
  line-height: 1 !important;
  color: #45284a !important;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
  content: "Sign In" !important;
  display: block !important;
  color: #45284a !important;
  font-size: 35px !important;
  line-height: 1.12 !important;
  font-weight: 750 !important;
  letter-spacing: -.9px !important;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
  content: "Welcome back" !important;
  display: block !important;
  margin-top: 8px !important;
  color: rgba(57,35,64,.60) !important;
  font-size: 13px !important;
  line-height: 1.35 !important;
  font-weight: 500 !important;
}

body.hx-auth-register
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
  content: "Sign Up" !important;
}

body.hx-auth-register
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
  content: "Create your account" !important;
}

/* Exact reference form rhythm. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label {
  color: #35213d !important;
  font-size: 13px !important;
  line-height: 1 !important;
  font-weight: 650 !important;
  margin: 0 !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"],
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"],
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"] {
  width: 100% !important;
  height: 48px !important;
  box-sizing: border-box !important;
  padding: 0 34px 0 0 !important;
  color: #2c1b31 !important;
  background-color: transparent !important;
  border: 0 !important;
  border-bottom: 2px solid rgba(54,33,63,.45) !important;
  border-radius: 0 !important;
  outline: none !important;
  box-shadow: none !important;
  font-size: 14px !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"]::placeholder,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"]::placeholder,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"]::placeholder {
  color: rgba(49,29,58,.82) !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="text"]:focus,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="email"]:focus,
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
input[type="password"]:focus {
  border-bottom-color: #70466f !important;
}

/* Reference icons. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="email"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='3' y='5' width='18' height='14' rx='2'/%3E%3Cpath d='m3 7 9 6 9-6'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 2px center !important;
  background-size: 20px 20px !important;
}

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="password"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='5' y='10' width='14' height='10' rx='2'/%3E%3Cpath d='M8 10V7a4 4 0 0 1 8 0v3'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 2px center !important;
  background-size: 20px 20px !important;
}

body.hx-auth-register
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE input[type="text"] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22' height='22' viewBox='0 0 24 24' fill='none' stroke='%23251a2c' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='8' r='3'/%3E%3Cpath d='M5 20a7 7 0 0 1 14 0'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 2px center !important;
  background-size: 20px 20px !important;
}

/* Reference button. */
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
.dLAOsI:not(:disabled) {
  width: 100% !important;
  min-height: 58px !important;
  margin-top: 20px !important;
  border: 0 !important;
  border-radius: 999px !important;
  background: linear-gradient(180deg, #a45e9b 0%, #241a36 100%) !important;
  color: #fff !important;
  box-shadow: 0 10px 24px rgba(55,28,65,.20) !important;
}

.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI span {
  color: #fff !important;
  font-size: 16px !important;
  font-weight: 750 !important;
}

/* Reference footer. */
.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
  margin: 34px 0 0 !important;
  padding: 0 !important;
  color: rgba(47,29,56,.82) !important;
  opacity: 1 !important;
  text-align: center !important;
  font-size: 13px !important;
}

.LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK a {
  color: #6c3f72 !important;
  font-weight: 700 !important;
  text-decoration: none !important;
}

/* Reference does not show social login buttons. */
.SocialLogin\:container {
  display: none !important;
}

/* Desktop scaling between the exact reference size and tablet. */
@media (max-width: 1360px) and (min-width: 761px) {
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 48px) !important;
    height: min(562px, calc(100vh - 48px)) !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 49% !important;
    height: 125.45% !important;
    top: -14.6% !important;
    background-size: 204.1% 108.4% !important;
    background-position: 89.3% 55% !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    padding: 13.2% 9.9% 8.5% !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
    font-size: clamp(25px, 2.55vw, 35px) !important;
  }
}

/* Mobile: keep the same visual language while making every control readable. */
@media (max-width: 760px) {
  html, body {
    overflow: hidden !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 24px) !important;
    height: min(540px, calc(100vh - 32px)) !important;
    max-height: 540px !important;
    border-radius: 28px !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    width: 76% !important;
    height: 100% !important;
    padding: 54px 34px 28px !important;
    border-radius: 28px !important;
    background: rgba(245,220,241,.62) !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 58% !important;
    height: 82% !important;
    top: 9% !important;
    right: -3% !important;
    border-radius: 28px !important;
    background-size: 176% 136% !important;
    background-position: 89.3% 55% !important;
    opacity: .96 !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    margin-bottom: 30px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::before {
    font-size: 29px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy::after {
    font-size: 11px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE label {
    font-size: 11px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="text"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="email"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="password"] {
    height: 45px !important;
    font-size: 13px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:not(:disabled) {
    min-height: 50px !important;
    margin-top: 16px !important;
  }

  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
    margin-top: 25px !important;
    font-size: 11px !important;
  }
}

@media (max-width: 420px) {
  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    width: 82% !important;
    padding: 45px 27px 24px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 52% !important;
    right: -2% !important;
    opacity: .72 !important;
  }
}


/* =========================================================
   HELZERX AUTH V5 — structural alignment fix
   IMPORTANT: keep the reference composition; do not let
   Nebula's original flex/margin rules move the glass form.
   ========================================================= */

div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
  display: block !important;
  isolation: isolate !important;
  margin: 0 !important;
  left: 50% !important;
  right: auto !important;
  transform: translate(-50%, -50%) !important;
  overflow: visible !important;
}

div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
  position: absolute !important;
  left: 0 !important;
  right: auto !important;
  top: 0 !important;
  bottom: auto !important;
  float: none !important;
  margin: 0 !important;
  width: 52% !important;
  max-width: 52% !important;
  height: 100% !important;
  min-height: 100% !important;
  transform: none !important;
  display: block !important;
  box-sizing: border-box !important;
  z-index: 20 !important;
}

/* The artwork is ALWAYS the right-hand overlapping panel. */
div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
  left: auto !important;
  right: 0 !important;
  z-index: 10 !important;
  width: 49% !important;
  height: 125.45% !important;
  top: -14.6% !important;
  background-size: 100% 100% !important;
  background-position: center center !important;
  background-repeat: no-repeat !important;
  border-radius: 42px !important;
}

/* Never allow Nebula's original second visual/image block
   to appear on top of the custom reference composition. */
div.LoginFormContainer___StyledDiv2-sc-cyh04c-4,
div[class*="LoginFormContainer___StyledDiv2"] {
  display: none !important;
  visibility: hidden !important;
  pointer-events: none !important;
}

/* Make the actual form content use the complete left half. */
div.LoginFormContainer___StyledDiv-sc-cyh04c-3 > * {
  max-width: 100% !important;
  box-sizing: border-box !important;
}

/* Desktop reference proportions. */
@media (min-width: 1361px) {
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: 1310px !important;
    height: 562px !important;
    max-width: calc(100vw - 48px) !important;
    max-height: calc(100vh - 48px) !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    width: 52% !important;
    max-width: 52% !important;
    padding: 74px 130px 48px !important;
    border-radius: 42px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 49% !important;
    height: 125.45% !important;
    top: -14.6% !important;
    right: 0 !important;
    background-size: 100% 100% !important;
  }
}

/* Tablet: preserve the same left-card/right-art composition. */
@media (min-width: 761px) and (max-width: 1360px) {
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 48px) !important;
    height: min(562px, calc(100vh - 48px)) !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    left: 0 !important;
    width: 52% !important;
    max-width: 52% !important;
    padding: clamp(40px, 7vw, 74px) clamp(34px, 9.9vw, 130px) 40px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    right: 0 !important;
    width: 49% !important;
    height: 125.45% !important;
    top: -14.6% !important;
    background-size: 100% 100% !important;
  }
}

/* Mobile: use the same visual composition at a readable scale.
   The artwork remains on the right and overlaps the glass card. */
@media (max-width: 760px) {
  html, body {
    overflow: hidden !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 24px) !important;
    height: min(500px, calc(100vh - 150px)) !important;
    min-height: 0 !important;
    max-height: 500px !important;
    padding: 0 !important;
    border-radius: 28px !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    left: 0 !important;
    top: 0 !important;
    width: 72% !important;
    max-width: 72% !important;
    height: 100% !important;
    min-height: 100% !important;
    padding: 50px 30px 25px !important;
    border-radius: 28px !important;
    background: rgba(245,220,241,.66) !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    left: auto !important;
    right: 0 !important;
    top: 7% !important;
    width: 52% !important;
    height: 86% !important;
    border-radius: 28px !important;
    background-size: 100% 100% !important;
    background-position: center center !important;
    opacity: 1 !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .LoginFormContainer___StyledH-sc-cyh04c-1.hpqfJy {
    margin-bottom: 28px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="text"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="email"],
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  input[type="password"] {
    height: 44px !important;
  }

  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  button.Button__ButtonStyle-sc-1qu1gou-0.dLAOsI,
  .LoginFormContainer__Container-sc-cyh04c-0.cEWvSE
  .dLAOsI:not(:disabled) {
    min-height: 50px !important;
  }
}

@media (max-width: 420px) {
  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE {
    width: calc(100vw - 18px) !important;
    height: min(470px, calc(100vh - 140px)) !important;
    border-radius: 25px !important;
  }

  div.LoginFormContainer___StyledDiv-sc-cyh04c-3 {
    width: 78% !important;
    max-width: 78% !important;
    padding: 42px 23px 22px !important;
    border-radius: 25px !important;
  }

  div.LoginFormContainer__Container-sc-cyh04c-0.cEWvSE::after {
    width: 49% !important;
    height: 84% !important;
    top: 8% !important;
    right: 0 !important;
    border-radius: 25px !important;
  }
}

</style>

<script>
(function () {
  function applyHelzerXAuthMode() {
    var path = window.location.pathname.toLowerCase();
    document.body.classList.toggle(
      'hx-auth-register',
      path.indexOf('/auth/register') !== -1
    );
  }
  applyHelzerXAuthMode();
  window.addEventListener('popstate', applyHelzerXAuthMode);
})();
</script>
@endif