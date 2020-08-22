<?php $this->session = \Config\Services::session(); ?>
<?php use App\Models\UsuarioModel; ?>
<?php $usuarioModel = new UsuarioModel(); ?>
   
<!-- !$usuarioModel->estaLogado()) -->


<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white css-navbar py-2">
    <div class="container">
  <a class="navbar-brand text-dark fw-600 f-18" href="#"><img src="https://secureservercdn.net/45.40.144.60/b8k.8f1.myftpupload.com/wp-content/uploads/2020/08/cropped-logo-1-1.png?time=1597881167" alt="Logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <?php if ($usuarioModel->estaLogado()) :?>
      <li class="nav-item">
        <a href="<?php echo site_url('/home'); ?>" class="nav-link f-18 fw-600 text-dark" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
      </li>
      <?php endif; ?>

      <?php if (!$usuarioModel->estaLogado()) :?>
      <li class="nav-item">
        <a href="<?php echo site_url('planos'); ?>" class="nav-link f-18 fw-600 text-dark" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Planos
        </a>
      </li>
      <?php endif; ?>

      <?php if ($usuarioModel->estaLogado()) :?>
      <li class="nav-item">
        <a href="<?php echo site_url('planos'); ?>" class="nav-link f-18 fw-600 text-dark" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Upgrade
        </a>
      </li>
      <?php endif; ?>

      <?php if (!$usuarioModel->estaLogado()) :?>
      <li class="nav-item">
        <a href="<?php echo site_url('usuario/new'); ?>" class="nav-link f-18 fw-600 text-dark" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Cadastre-se
        </a>
      </li>
      <?php endif; ?>

      <?php if (!$usuarioModel->estaLogado()) :?>
      <li class="nav-item">
        <a href="<?php echo site_url('login'); ?>" class="nav-link f-18 fw-600 text-dark css-btn-login" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
      </li>
      <?php endif; ?>
   
      <?php if ($usuarioModel->estaLogado()) :?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle f-18 fw-600 text-dark css-btn-login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $this->session->get('usuario')->nome ?>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('perfil'); ?>">Meu Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('login/logout'); ?>">Sair</a>
          </div>
        </li>
      <?php endif; ?>

    </ul>
  </div>
</div>    
</nav>