$(document).ready(function() {
    var container_fluid = $( '.container-fluid' );
    var row             = container_fluid.find( '.row' );
    var tbody           = row.find( 'tbody' );

    var direccion  = window.location;
    var host       = direccion.protocol + "//" + direccion.host + "/" + direccion.pathname.split('/')[1];

    $('#frmCadastrarClientes').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nome: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o nome!.' }
                }
            },
            email: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o email!.' }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formulario   = $( event.target );
            var btnCadastrar = formulario.find(':button');
            var load         = formulario.find('.load');
            $.ajax( {
                url: host + "/app/controller/controller.php",
                type:"POST",
                data: "acao=CadastrarCliente&" + formulario.serialize(),
                beforeSend: function(){
                    btnCadastrar.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    $( load).fadeOut( 'slow', function(){
                        btnCadastrar.attr( 'disabled', false );
                    } );

                    if( data == 'clienteCadastradoSucesso' ) {
                        msg( 'Cliente cadastrado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/painel/clientes" ;
                        }, 2000);
                    }else if( data == 'erroCadastrarCliente' ) {
                        msg( 'Erro ao tentar cadastrar os dados do cliente!', 'erro');
                    }
                }
            } );
        } );


    $('#frmAlterarClientes').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nome: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o nome.' }
                }
            },
            email: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o email.' }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formulario = $( event.target );
            var btnAlterar = formulario.find(':button');
            var load       = formulario.find('.load');
            $.ajax( {
                url: host + "/app/controller/controller.php",
                type:"POST",
                data: "acao=alterarCliente&" + formulario.serialize(),
                beforeSend: function(){
                    btnAlterar.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    $( load).fadeOut( 'slow', function(){
                        btnAlterar.attr( 'disabled', false );
                    } );

                    if( data == 'clienteAtualizadoSucesso' ) {
                        msg( 'Cliente atualizado com sucesso!!', 'sucesso' );
                    }else if( data == 'erroAtualizarCliente' ) {
                        msg( 'Erro ao tentar atualizar os dados do cliente!', 'erro');
                    }
                }
            } );
        } );

    tbody.on( 'click', '#btnDeletarCliente', function(e) {
        e.preventDefault();
        var idCliente = $(this).attr( 'data-id' );
        bootbox.confirm( "Realmente deseja deletar este registro?", function(result) {
            if ( result === true ) {
                $.post( host + "/app/controller/controller.php", {acao:'deletarCliente',idCliente:idCliente}).done( function( data ){
                    if( data == 'clienteDeletadoSucesso' ) {
                        msg( 'Registro deletado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/painel/clientes" ;
                        }, 2000);
                    }else if( data == 'erroDeletarCliente' ) {
                        msg( 'Erro ao tentar deletar o registro!', 'erro');
                    }
                    console.log( data )
                } );
            }
        } );
    } );
});