<div class="d-flex align-items-center">
    <div class="auto-container pb-5">
   
        <div class="row mt-4 ">
       
            <div class="col-lg-6 col-md-12 col-sm-12">

                <div role="form" class="css-div-form" >
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="fw-700 css-main-color mb-3">Meu Perfil</h4>
                        </div>
                    </div>
                    
                   
                    <form id="js-form-cadastro-usuario" class="css-form-cadastro" >
                        <div class="default-form" id="contact-form" >
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" name="nome" value="<?= $usuario->nome; ?>" size="40" class="form-control" aria-invalid="false" placeholder="Nome de usuário">
                                    </span>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <span class="">
                                        <input type="text" readonly="true" value="<?= $usuario->email; ?>" size="40" class="form-control" aria-invalid="false" placeholder="Nome de usuário">
                                    </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <span class="">

                                        <select name="estado" class="js-selecionar-estado" estado-selecionado="<?= $usuario->estado; ?>">
                                            <option value="0">Selecione seu estado</option>
                                        </select>

                                    </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    
                                    <span class="">

                                        <select name="cidade" class="js-selecionar-cidade" cidade-selecionado="<?= $usuario->cidade; ?>">
                                            <option value="0">Selecione sua cidade</option>
                                        </select>
                                        
                                    </span>
                                    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="password" name="senha" value="" size="40" class="form-control" aria-invalid="false" placeholder="Senha">
                                    </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group"> 
                                    <span class="">
                                        <input type="password" name="confirmar_senha" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Confirmar senha">
                                    </span>
                                </div>
                 
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"> 
                                    <button class="css-button-color">Atualizar</button>
                                </div>
                            </div>
                        </div>  
                    </form>
                   
                </div>


            </div>
        </div>
    </div>
</div>