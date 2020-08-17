<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <?php echo view('header_style'); ?>
</head>

<body>

    <?php echo view('navbar'); ?>

    <div class="container">
        <form method="POST" action="<?php echo site_url('login/validar') ?>">
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" name="email" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="senha">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">entrar</button>
        </form>
    </div>

    
    <?php echo view('header_script'); ?>
    
    
</body>
</html>