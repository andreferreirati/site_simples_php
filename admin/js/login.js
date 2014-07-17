$(document).ready(function() {

    var direccion   = window.location;
    var base_url_js = direccion.protocol + "//" + direccion.host + "/" + direccion.pathname.split('/')[1];

    //Validações dos campos do formulario
    $('#defaultForm').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cpf: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o CPF.' },
                    digits:{ message: 'Este campo somente aceita valores númericos. Ex: 21267811862' }
                }
            },
            senha: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar a senha.' }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formulario = $( event.target );
            var btnLogar   = formulario.find(':button');
            var load       = formulario.find('.load');
            $.ajax( {
                url: base_url_js + "/app/controller/controller.php",
                type:"POST",
                data: "acao=login&" + formulario.serialize(),
                beforeSend: function(){
                    btnLogar.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    console.log(data);
                    $( load).fadeOut( 'slow', function(){
                        btnLogar.attr( 'disabled', false );
                    } );

                    if( data == 'cpf_invalido' ) {
                        msg( 'o CPF informado não é valido', 'erro');
                        $( '#divSenha' ).addClass( 'form-group has-feedback has-error');
                        $( '#divSenha > i').addClass( 'form-control-feedback glyphicon glyphicon-remove' );
                    }
                    else if( data == 'naohabilitado' ) {
                        msg( 'Usuário inabilitado para acesso ao sistema. Favor contatar ao administrador do portal', 'alerta' );
                    }
                    else if( data == 'usuario_ou_senha_invalido' ) {
                        msg( 'Usuário ou senha inválidos, favor tente novamente', 'erro' );
                    }
                    else if( data == 'logadoComSucesso' ) {
                        formulario.fadeOut( 'fast', function() {
                            msg( 'Logado com sucesso!!. Aguarde até ser redirecionado para a administração', 'sucesso' );
                        } );
                        setTimeout( function() {
                            $(location).attr( 'href', base_url_js + '/painel/' );
                        }, 3000 );

                    }
                }
            } );
        } );
});