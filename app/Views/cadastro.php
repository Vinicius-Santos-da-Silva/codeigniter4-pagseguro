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
       /* background: #f7faff!important; */
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
    .fw-200 {
        font-weight: 200;
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
    .lh-30 {
        line-height: 30px;
    }
    .css-navbar {
        box-shadow: 0 10px 20px rgba(0,0,0,.2);
    }
    .css-button {
        border: 2px solid #6377ee;
        border-radius: 40px;
        padding: 12.5px 50px;
        color: #6377ee;
        font-weight: 600;       
        transition-duration: 0.3s;
    }

    .css-button:before, .css-button-color:before  {
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
    .css-button-color {
        border: 2px solid #6377ee;
        border-radius: 40px;
        padding: 12.5px 50px;
        color: #fff;
        font-weight: 600;       
        transition-duration: 0.3s;
        background: #6377ee;
    }

    .css-button-color:hover {
        background: #000;
        color: #fff;
        border: 2px solid #000;
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




    /*cadastro*/
    .css-div-form {
        position: relative;
        display: block;
        background: #f3f8ff;
        padding: 30px 50px 70px;
        border-radius: 20px;
    }
    .css-form-cadastro .form-group {
        position: relative;
        margin-bottom: 20px;
    }
    .css-form-cadastro .form-group input[type='email'],.css-form-cadastro .form-group input[type='text']{
        position: relative;
        width: 100%;
        height: 55px;
        background: #fff;
        border: 1px solid #fff;
        font-size: 15px;
        font-style: italic;
        padding: 10px 20px;
        border-radius: 10px;
        transition: all 500ms ease;
    }
    .css-form-cadastro .form-group input:focus {
        border: 1px solid #6377ee!important;
        outline: none;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }
    .auto-container {        
        max-width: 1200px;
        padding: 0 15px;
        margin: 0 auto;
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
    <div class="auto-container pb-5">
   
        <div class="row mt-4 ">
            <div class="col-lg-6 col-md-12 col-sm-12 pr-5">
                

                <h1 class="fw-700">Data Analytics Techniques with 
                    <span class="css-main-color">Detox</span> Systems.
                </h1>
                <p class="mt-4 fw-400 f-16 text-muted lh-30">Detox's real-time data management technologies, global data marketplaces, and award-winning customer service make our unstacked data solutions.</p>
                <div class="mt-4"> 
                    <ul class="list-item" style="list-style: none;">
                        <li>
                            <p class="pb-3 mb-0  d-flex text-muted f-18 fw-200">
                                <span class="material-icons css-main-color pr-2 f-24">check_circle_outline</span>coisa boa asdasd asd
                            </p>
                        </li>
                        <li>
                            <p class="pb-3 mb-0  d-flex text-muted f-18 fw-200">
                                <span class="material-icons css-main-color pr-2">check_circle_outline</span>coisdsdsd sa asa boa
                            </p>
                        </li>
                        <li>
                            <p class="pb-3 mb-0  d-flex text-muted f-18 fw-200">
                                <span class="material-icons css-main-color pr-2">check_circle_outline</span>coidasd asdasd as dsa boa
                            </p>
                        </li>
                    </ul>
                </div>
                <button class="btn css-button">Ver Algo interessante</button>
            

            </div>

















            <div class="col-lg-6 col-md-12 col-sm-12">


                <div role="form" class="css-div-form" >
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="fw-700 css-main-color mb-3">Criar conta</h4>
                        </div>
                    </div>
                    
                   
                    <form action="/detox/contact/#wpcf7-f921-p13-o1" method="post" class="css-form-cadastro" >
                        <div class="default-form" id="contact-form" >
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>  
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="text" name="nome" value="" size="40" class="form-control" aria-invalid="false" placeholder="Nome">
                                    </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="email" name="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email">
                                    </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>     
                                 <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>     
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" name="" value="" size="40" class="form-control" aria-invalid="false" placeholder="Teste">
                                    </span>
                                </div>                  
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"> 
                                    <button class="css-button-color">Registrar</button>
                                </div>
                            </div>
                        </div>  
                    </form>
                   
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