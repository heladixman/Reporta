<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?php echo base_url()?>" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">Reporta</span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>
          <ul class="menu-inner py-1">
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pengaturan</span>
            </li>   
            <li class="menu-item">
              <a href="<?php echo base_url()?>/metodepembayaran" class="menu-link">
                <i class='menu-icon bx bxs-credit-card'></i>
                <div data-i18n="Basic">Metode Pembayaran</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url()?>/tipeakun" class="menu-link">
                <i class='menu-icon bx bx-user' ></i>
                <div data-i18n="Basic">Tipe Akun</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url()?>/akunperkiraan" class="menu-link">
                <i class='menu-icon bx bxs-data' ></i>
                <div data-i18n="Basic">Akun Perkiraan</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>   
            <li class="menu-item">
              <a href="<?php echo base_url()?>/pembayaran" class="menu-link">
                <i class='menu-icon bx bx-money' ></i>
                <div data-i18n="Basic">Pembayaran</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url()?>/penerimaan" class="menu-link active">
                <i class='menu-icon bx bx-receipt'></i>
                <div data-i18n="Basic">Penerimaan</div>
              </a>
            </li>
          </ul>
        </aside>