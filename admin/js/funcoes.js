/**
 * Created by luis on 14/07/14.
 */

//função de mensagens
function msg( msg, tipo ) {
    var retorno = $('.msgRetorno');
    var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert('Informe mensagem de sucesso, alerta, error ou info');

    retorno.empty().fadeOut('fast', function () {
        return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
    });

    setTimeout(function () {
        retorno.fadeOut('slow').empty();
    }, 9000);//end setTimeout
}//end function msg