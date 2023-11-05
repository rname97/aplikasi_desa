<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo me-1">
          <span style="color: var(--bs-primary)">
            <a href="/" class="navbar-brand d-flex w-50 me-auto link-light"><img src="{{ URL::asset('images/logo2.svg')}}" alt=""></a>
          </span>
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>
        <li class="menu-item {{ (request()->is('admin/dashboard*')) ? 'active open' : '' }} ">
            <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Basic"><span class="{{ (request()->is('admin/dashboard*')) ? 'text-white' : '' }}">Dashboard</span></div>
            </a>
        </li>
        <!-- Icons -->
        <li class="menu-item {{ (request()->is('admin/sku*')) ? 'active open' : '' }}">
            <a href="{{ url('/admin/sku_data') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Icons"><span class="{{ (request()->is('admin/sku*')) ? 'text-white' : '' }}">SKU</span></div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/spktp*')) ? 'active open' : '' }}">
            <a href="{{ url('/admin/spktp_data') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Icons"<span class="{{ (request()->is('admin/spktp*')) ? 'text-white' : '' }}">SPKTP</span></div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/spkk*')) ? 'active open' : '' }}">
            <a href="{{ url('/admin/spkk_data') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Icons"><span class="{{ (request()->is('admin/spkk*')) ? 'text-white' : '' }}">SPKK</span></div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/spm*')) ? 'active open' : '' }}">
            <a href="{{ url('/admin/spm_data') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Icons"><span class="{{ (request()->is('admin/spm*')) ? 'text-white' : '' }}">SPM</span></div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/user*')) ? 'active open' : '' }}">
            <a href="{{ url('/admin/user_data') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Icons"><span class="{{ (request()->is('admin/user*')) ? 'text-white' : '' }}">Data User</span></div>
            </a>
        </li>
    </ul>
</aside>
