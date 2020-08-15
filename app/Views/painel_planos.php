<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Painel</title>
	<meta name="description" content="Dashboard">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<style type="text/css">

    html,body {
        height: 100%;
        font-family: 'Poppins', sans-serif;
        padding-top: 50px;
        background: #f7faff!important;
    }
    .css-border-dashed {
        border-bottom: 1px dashed #e0e0e0;
    }
    .f-14 {
        font-size: 14px!important;
    }
    .f-16 {
        font-size: 16px!important;
    }
    .f-18 {
        font-size: 18px!important;
    }
    .f-20 {
        font-size: 20px!important;
    }
    .fw-400 {
        font-weight: 400;
    }
    .fw-500 {
        font-weight: 500;
    }
    .fw-600 {
        font-weight: 600;
    }
   .fw-700 {
        font-weight: 700;
    }
    .fw-800 {
        font-weight: 800;
    }
    .fw-900 {
        font-weight: 900;
    }

    .css-navbar {
        box-shadow: 0 10px 20px rgba(0,0,0,.2);
    }

    .css-button {
        border: 2px solid #6377ee;
        border-radius: 40px;
        padding: 10.5px 30px;
        color: #6377ee;
        font-weight: 600;
        width: 100%;
         transition-duration: 0.3s;
    }

    .css-button:before {
        transform-origin: 100% 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .css-button:hover {
        background: #6377ee;
        color: #fff;
    }

    .css-main-color {
        color: #6377ee;
    }

    .css-card {
        border: 0px;
        box-shadow: 1px 1px 20px #dadada;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    .css-card:hover {
        transform: scale(1.1);
    }



</style>

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
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</div>    
</nav>

<div class="d-flex align-items-center">
    <div class="container pb-5">
       <div class="row mb-4 ">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h3 class="fw-700">Selecione o plano desejado campeão</h3>
                <h5 class="fw-400 css-main-color">Alguma frase boa pode vir aqui</h5>
            </div>
        </div>
 
   
        <div class="row  ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card p-4 css-card">
                    <div class="card-body">
                        <h1 class="small css-main-color f-16">Plano básico</h1>
                        <h1 class="card-title fw-700">R$ 34</h1>
                        <h1 class="small pb-4 css-border-dashed text-muted f-18">Texto de apoio</h1>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <button class="btn css-button w-100 css-main-color">Selecionar</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card p-4 css-card">
                    <div class="card-body">
                        <h1 class="small css-main-color f-16">Plano médio</h1>
                        <h1 class="card-title fw-700">R$ 34</h1>
                        <h1 class="small pb-4 css-border-dashed text-muted f-18">Texto de apoio</h1>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <button class="btn css-button w-100 css-main-color">Selecionar</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card p-4 css-card">
                    <div class="card-body">
                        <h1 class="small css-main-color f-16">Plano completo</h1>
                        <h1 class="card-title fw-700">R$ 34</h1>
                        <h1 class="small pb-4 css-border-dashed text-muted f-18">Texto de apoio</h1>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                        <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                         <p class="pb-1 mb-0  d-flex text-dark fw-500">
                            <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisa boa
                        </p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <button class="btn css-button w-100 css-main-color">Selecionar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


















    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>