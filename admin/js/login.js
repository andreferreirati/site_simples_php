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
                    digits:{ message: 'Este campo somente aceita valores númericos.' }
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
                    $( load).fadeOut( 'slow', function(){
                        btnLogar.attr( 'disabled', false );
                    } );
                    console.log(data);
                }
            } );
        } );
});