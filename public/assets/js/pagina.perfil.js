function atualizarPerfil(usuario_id)
{
    let formulario = new FormData($("#js-form-cadastro-usuario")[0]);

    $.ajax({
        method:"POST",
        url:site_url+"/API/UsuarioAPI/atualizar/"+usuario_id,
        processData:false,
        proccessData:false,
        contentType:false,
        data:formulario,
        success:(data)=>{
            alert("Usuário atualizado com sucesso.");
            window.location.reload();
        },
        error:(erro)=>{
            alert("Não foi possível atualizar os dados.");
        }
    });
}