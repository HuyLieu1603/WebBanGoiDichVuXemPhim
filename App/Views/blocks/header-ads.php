<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo ">
                <img width="150" src="<?php echo _WEB ?>/public/assets/images/brand/netflix.png" alt="" srcset="" style="object-fit: cover;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="<?php echo _WEB ?>/ads/Advertisement/index" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Bảng điều khiển</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Chức năng quảng cáo</span>
        </li>
        <!-- Layouts -->
        <li class="menu-item">
            <a href="<?php echo _WEB ?>/ads/Advertisement/up" class="menu-link">
                <div data-i18n="Without menu">Đăng tải quảng cáo</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?php echo _WEB ?>/ads/Advertisement/list" class="menu-link">
                <div data-i18n="Analytics">Danh sách chờ xác nhận</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?php echo _WEB ?>/ads/Advertisement/detail" class="menu-link">
                <div data-i18n="Container">Thông kê quảng cáo</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->