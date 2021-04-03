<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <?php echo view('header_style'); ?>
</head>

<body>

    <?php echo view('navbar'); ?>

    <div class="d-flex align-items-center">
        <div class="auto-container pb-5">
    
            <div class="row mt-4 ">
                <div class="col-lg-6 col-md-12 col-sm-12 pr-5">

                <?php if($this->session->markAsFlashdata('mensagem')){
                    echo $this->session->markAsFlashdata('mensagem');
                } ?>
                    

                    <h1 class="fw-700">Techniques with 
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

















                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">

                <?php $this->session; ?>


                    <div role="form" class="css-div-form" >
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="fw-700 css-main-color mb-3">Entrar</h4>
                            </div>
                        </div>
                        
                    
                    
                        <form method="POST" action="<?php echo site_url('login/validar') ?>" class="css-form-cadastro">
                            <div class="default-form" id="contact-form" >
                                <div class="row ">
                        
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group"> 
                                        <span class="">
                                            <input type="email" name="email" value="" size="40" class="form-control" aria-invalid="false" placeholder="Email">
                                        </span>
                                    </div>

                                    <div class="col-lg-12 col-md-12  col-sm-12 form-group"> 
                                        <span class="">
                                            <input type="password" name="senha" value="" size="40" class="form-control" aria-invalid="false" placeholder="Senha">
                                        </span>
                                    </div>

                                
                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"> 
                                    
                                        <button type="submit" class="css-button-color">entrar</button>
                                    </div>
                                </div>
                            </div>  
                        </form>
                    
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php echo view('header_script'); ?>
    
</body>
</html>