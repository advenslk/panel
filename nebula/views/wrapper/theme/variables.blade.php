<style id="nebula-variables">
  <?php
    $__transparency="";
    if($n_dashboard_transparency == "1") { $__transparency="BB"; }
    elseif($n_dashboard_transparency == "2") { $__transparency="99"; }
    elseif($n_dashboard_transparency == "3") { $__transparency="60"; }
  ?>

  /* HelzerX Berry Geometric Theme Variables */
  :root {
    --hx-berry-deep: #1a0611;
    --hx-berry-stage: #240716;
    --hx-berry-card: #2f0b1e;
    --hx-berry-card-hover: #3f1029;
    --hx-berry-card-active: #521636;
    --hx-berry-accent: #b55784;
    --hx-berry-accent-dark: #902859;
    --hx-berry-rose: #e2abc4;
    --hx-berry-border: rgba(226, 171, 196, 0.18);

    --sidebarPrimary: #ffffff;
    --sidebarPrimaryHover: #f5d4e4;
    --sidebarSecondary: #47102a;
    --sidebarSecondaryHover: #5e1638;
    --sidebarSecondaryActive: #781d49;
    --sidebarSecondarySelected: #9c3062;
    --sidebarButtonActive: #e2abc4;

    --pagePrimary: #fdf7fa;
    --pagePrimaryHover: #e2abc4;
    --pageSecondary: #2f0b1e{{ $__transparency }};
    --pageSecondaryHover: #3f1029{{ $__transparency }};
    --pageSecondaryActive: #521636{{ $__transparency }};
    --pageSecondarySelected: #6b1d47{{ $__transparency }};
    --pageButtonDefault: #ad4e7b;
    --pageButtonHover: #c25f8e;

    --statusOffline: #7a5c6b;
    --statusError: #f43f5e;
    --statusStarting: #f59e0b;
    --statusOnline: #10b981;

    --authA: #660e36;
    --authB: #ffffff;
    --authC: #e2abc4;
    --authD: #ad4e7b;
    --authE: #7d1e4d;
    --authF: #b55784;
    --authG: #8b8f96;
    --authH: #9a9ea4;

    --sidebarBackground: #2d081a;
    --pageBackground: #1a0611;

    --borderRadius: 14px;
    --borderRadiusSidebar: 14px;
    --borderRadiusAuth: 16px;

    --patternSizeAuth: {{ $n_auth_background_magicsize }}px;
    --patternSizeDashboard: {{ $n_background_magicsize }}px;
  }
</style>
