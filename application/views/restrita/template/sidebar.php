<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="../../../../public/assets/img/logo.png" class="header-logo" /> <span class="logo-name">Otika</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>

      <li class="dropdown <?= $this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?= base_url('restrita'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Widgets</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
          <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
        </ul>
      </li>

      <li class="dropdown <?= $this->router->fetch_class() == 'usuarios' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?= base_url('restrita/usuarios'); ?>" class="nav-link"><i class="fas fa-users"></i><span>Usuários</span></a>
      </li>

    </ul>
  </aside>
</div>