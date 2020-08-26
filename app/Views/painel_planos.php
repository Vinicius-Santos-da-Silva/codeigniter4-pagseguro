<?php 

use App\Models\UsuarioModel;

$usuario_model = new UsuarioModel();


?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="UTF-8">
	
    <title>Painel</title>

    <?php echo view('header_style'); ?>

</head>

<body>

<?php echo view('navbar'); ?>

<div class="d-flex align-items-center">
    <div class="container pb-5">
       <div class="row mb-4 ">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h3 class="fw-700">Selecione o plano desejado campeão</h3>
                <h5 class="fw-400 css-main-color">Alguma frase boa pode vir aqui</h5>
            </div>
        </div>
   
        <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 <?php if($usuario_model->hasPlano(1)){echo "disabled";} ?>">
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

                            <?php if($usuario_model->hasPlano(1)): ?>

                                <a href="#" role="button" class="disabled plano-adquirido btn css-button w-100 css-main-color">Já adquirido
                                </a>

                            <?php else: ?>

                                <a href="<?=site_url('checkout/1');?>" role="button" class="btn css-button w-100 css-main-color">Selecionar
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4 col-md-6 col-sm-12 <?php if($usuario_model->hasPlano(2)){echo "disabled";} ?>">
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
                            <?php if($usuario_model->hasPlano(2)): ?>

                                <a href="#" role="button" class="disabled plano-adquirido btn css-button w-100 css-main-color">Já adquirido
                                </a>

                            <?php else: ?>

                                <a href="<?=site_url('checkout/2');?>" role="button" class="btn css-button w-100 css-main-color">Selecionar
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 <?php if($usuario_model->hasPlano(3)){echo "disabled";} ?>">
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
                            <?php if($usuario_model->hasPlano(3)): ?>

                                <a href="#" role="button" class="disabled plano-adquirido btn css-button w-100 css-main-color">Já adquirido
                                </a>

                                <?php else: ?>

                                <a href="<?=site_url('checkout/3');?>" role="button" class="btn css-button w-100 css-main-color">Selecionar
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
    
<?php echo view('header_script'); ?>
    
</body>
</html>