<?php $this->session = \Config\Services::session(); ?>

<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white css-navbar py-2">
    <div class="container">
  <a class="navbar-brand text-dark fw-600 f-18" href="#"><img src="http://smartdemowp.com/detox/wp-content/themes/detox/assets/images/small-logo.svg" alt="Logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle f-18 fw-600 text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nome do Usuário
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('planos'); ?>">Planos</a>
          <a class="dropdown-item" href="<?php echo site_url('usuario/new'); ?>">Usuario</a>
			    <a class="dropdown-item" href="<?php echo site_url('login/logout'); ?>">Sair</a>
          <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="<?php echo site_url('/home'); ?>">Dashboard</a>
        </div>
      </li>
    </ul>
  </div>
</div>    
</nav>