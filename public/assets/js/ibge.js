$(document).ready(function(){

    aciona_integracao_ibge_select();

    $('.js-selecionar-cidade').select2({
        theme: "bootstrap"
    }); 

    $('.js-selecionar-estado').select2({
        theme: "bootstrap"
    }); 

});

function aciona_integracao_ibge_select () {
    
    listaEstados()

    $('.js-selecionar-estado').on('change' , function(){

        var _this = $(this);
        var option = $(_this[0].options[_this[0].selectedIndex]);
        
        buscar_cidades_estado(option.attr('data-id'));

        console.log(option)
        console.log(_this)
    });
}

function buscar_cidades_estado(estado)
{

    $.ajax({
        method:"GET",
        url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados/"+estado+"/municipios",
        success: function(data){
            var select = $('.js-selecionar-cidade');

            select.empty();

            let selecionado = select.attr('cidade-selecionado')
            console.log(selecionado);

            data.map(function(cidade){
                if(selecionado == cidade.nome){
                    select.append(`
                        <option selected="true" value='${cidade.nome}'>${cidade.nome}</option>
                    `);
                }else{
                    select.append(`
                        <option value='${cidade.nome}'>${cidade.nome}</option>
                    `);
                }
                
            });
            select.select2({
                theme: "bootstrap"
            }); 
        }

    });

}

function listaEstados(){
    $.ajax({
        method:"GET",
        url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados",
        success: function(data){
            var select = $('.js-selecionar-estado');

            let selecionado = select.attr('estado-selecionado')
            console.log(selecionado)
            //select.empty();

            data.map(function(estado){
                
                if (selecionado == estado.sigla) {
                    
                    select.append(`
                        <option selected="true" data-id='${estado.id}' value='${estado.sigla}'>${estado.nome}</option>
                    `); 

                    buscar_cidades_estado(estado.sigla)

                } else {
                     select.append(`
                        <option data-id='${estado.id}' value='${estado.sigla}'>${estado.nome}</option>
                    `);

                }
            });
            select.select2({
                theme: "bootstrap"
            });
            
        }

    });

}
