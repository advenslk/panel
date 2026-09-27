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