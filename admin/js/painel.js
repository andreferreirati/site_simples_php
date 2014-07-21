$(document).ready(function() {
    var container_fluid = $( '.container-fluid' );
    var row             = container_fluid.find( '.row' );
    var tbody           = row.find( 'tbody' );

    var direccion  = window.location;
    var host       = direccion.protocol + "//" + direccion.host;

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
                url: host + "/admin/app/controller/controller.php",
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
                            document.location.href = host + "/admin/painel/?p=clientes" ;
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
                url: host + "/admin/app/controller/controller.php",
                type:"POST",
                data: "acao=alterarCliente&" + formulario.serialize(),
                beforeSend: function(){
                    btnAlterar.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    console.log(data);
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
        BootstrapDialog.confirm( "Realmente deseja deletar este registro?", function(result) {
            if ( result === true ) {
                $.post( host + "/admin/app/controller/controller.php", {acao:'deletarCliente',idCliente:idCliente}).done( function( data ){
                    if( data == 'clienteDeletadoSucesso' ) {
                        msg( 'Registro deletado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/admin/painel/?p=clientes" ;
                        }, 1000);
                    }else if( data == 'erroDeletarCliente' ) {
                        msg( 'Erro ao tentar deletar o registro!', 'erro');
                    }
                    console.log( data )
                } );
            }
        } );
    } );

    // =============== Usuarios ======================
    $('#frmCadastrarUsuario').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nomeUsuario: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o nome do usuário!.' }
                }
            },
            cpfUsuario: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o CPF do usuário!.' },
                    digits:{ message: 'Este campo somente aceita valores númericos. Ex: 21267811862' }
                }
            },
            senhaUsuario: {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório. Favor informar a senha.'
                    },
                    identical: {
                        field: 'confirmaSenhaUsuario',
                        message: 'A senha e a confirmação da senha não são iguais, favor verificar'
                    }
                }
            },
            confirmaSenhaUsuario: {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório. Favor informar a confirmação da senha'
                    },
                    identical: {
                        field: 'senhaUsuario',
                        message: 'A senha e a confirmação da senha não são iguais, favor verificar'
                    }
                }
            },
            sit_cancelado:{
                validators: {
                    notEmpty: {
                        message: 'Por favor informe a situação do usuario.'
                    }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formularioCadUsuario  = $( event.target );
            var btnCadastrarUsuario   = formularioCadUsuario.find(':button');
            var load                  = formularioCadUsuario.find('.load');
            $.ajax( {
                url: host + "/admin/app/controller/controller.php",
                type:"POST",
                data: "acao=CadastrarUsuario&" + formularioCadUsuario.serialize(),
                beforeSend: function(){
                    btnCadastrarUsuario.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    $( load).fadeOut( 'slow', function(){
                        btnCadastrarUsuario.attr( 'disabled', false );
                    } );

                    if( data == 'usuarioCadastradoSucesso' ) {
                        msg( 'Usuario cadastrado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/admin/painel/?p=usuarios" ;
                        }, 2000);
                    }else if( data == 'erroCadastroUsuario' ) {
                        msg( 'Erro ao tentar cadastrar os dados do usuário!', 'erro');
                    }else if( data == 'cpf_invalido' ) {
                        msg( 'O CPF informado não é valido. Favor verificar', 'erro');
                        $( '#divCPF' ).addClass( 'has-error');
                        $( '#divCPF > i').addClass( 'glyphicon glyphicon-remove' );
                    }else if( data == 'cpfExiste' ) {
                        msg( 'Já existe um cpf cadastrado com esse numero', 'erro' );
                        $( '#divCPF' ).addClass( 'has-error');
                        $( '#divCPF > i').addClass( 'glyphicon glyphicon-remove' );
                    }
                }
            } );
        } );

    $('#frmAlterarUsuarios').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nomeUsuario: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o nome do usuário!.' }
                }
            },
            cpfUsuario: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o CPF do usuário!.' },
                    digits:{ message: 'Este campo somente aceita valores númericos. Ex: 21267811862' }
                }
            },
            senhaUsuario: {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório. Favor informar a senha.'
                    },
                    identical: {
                        field: 'confirmaSenhaUsuario',
                        message: 'A senha e a confirmação da senha não são iguais, favor verificar'
                    }
                }
            },
            confirmaSenhaUsuario: {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório. Favor informar a confirmação da senha'
                    },
                    identical: {
                        field: 'senhaUsuario',
                        message: 'A senha e a confirmação da senha não são iguais, favor verificar'
                    }
                }
            },
            sit_cancelado:{
                validators: {
                    notEmpty: {
                        message: 'Por favor informe a situação do usuario.'
                    }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formularioCadUsuario  = $( event.target );
            var btnCadastrarUsuario   = formularioCadUsuario.find(':button');
            var load                  = formularioCadUsuario.find('.load');
            $.ajax( {
                url: host + "/admin/app/controller/controller.php",
                type:"POST",
                data: "acao=alterarUsuario&" + formularioCadUsuario.serialize(),
                beforeSend: function(){
                    btnCadastrarUsuario.attr( 'disabled', true );
                    $( load).fadeIn( 'slow' );
                },
                success: function( data ) {
                    $( load).fadeOut( 'slow', function(){
                        btnCadastrarUsuario.attr( 'disabled', false );
                    } );

                    if( data == 'usuarioAtualizadoSucesso' ) {
                        msg( 'Usuario alterado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/admin/painel/?p=usuarios" ;
                        }, 2000);
                    }else if( data == 'erroAtualizarUsuario' ) {
                        msg( 'Erro ao tentar atualizar os dados do usuário!', 'erro');
                    }else if( data == 'cpf_invalido' ) {
                        msg( 'O CPF informado não é valido. Favor verificar', 'erro');
                        $( '#divCPF' ).addClass( 'has-error');
                        $( '#divCPF > i').addClass( 'glyphicon glyphicon-remove' );
                    }
                }
            } );
        } );

    tbody.on( 'click', '#btnDeletarUsuario', function(e) {
        e.preventDefault();
        var idUsuario = $(this).attr( 'data-id' );
        BootstrapDialog.confirm( "Realmente deseja deletar este registro?", function(result) {
            if ( result === true ) {
                $.post( host + "/admin/app/controller/controller.php", {acao:'deletarUsuario',idUsuario:idUsuario}).done( function( data ){
                    if( data == 'usuarioDeletadoSucesso' ) {
                        msg( 'Registro deletado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/admin/painel/?p=usuarios" ;
                        }, 1000);
                    }else if( data == 'erroDeletarUsuario' ) {
                        msg( 'Erro ao tentar deletar o registro!', 'erro');
                    }
                } );
            }
        } );
    } );

    // =============== Conteudo ======================
    $('#frmCadastrarConteudo').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titulo: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o titulo!.' }
                }
            },
            slug: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o slug!.' }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formulario   = $( event.target );
            var titulo       = formulario.find('#titulo').val();
            var slug         = formulario.find('#slug').val();
            var conteudo     = tinyMCE.get('conteudo').getContent();
            var btnCadastrar = formulario.find(':button');
            var load         = formulario.find('.load');
            if( conteudo == 0 ){
                msg( 'Por favor informar o conteudo da pagina!', 'erro');
                $( '#divConteudoTextearea iframe' ).css('border', '2px solid red');
                btnCadastrar.attr( 'disabled', false );
            }else{
                $.ajax( {
                    url: host + "/admin/app/controller/controller.php",
                    type:"POST",
                    data: "acao=cadastrarConteudo&" +"titulo="+titulo+"&slug="+slug+"&conteudo="+conteudo,
                    beforeSend: function(){
                        btnCadastrar.attr( 'disabled', true );
                        $( load).fadeIn( 'slow' );
                    },
                    success: function( data ) {
                        $( load).fadeOut( 'slow', function(){
                            btnCadastrar.attr( 'disabled', false );
                        } );

                        if( data == 'conteudoCadastradoSucesso' ) {
                            msg( 'Conteudo cadastrado com sucesso!!', 'sucesso' );
                            setTimeout(function(){
                                document.location.href = host + "/admin/painel/?p=conteudo" ;
                            }, 2000);
                        }else if( data == 'erroCadastroConteudo' ) {
                            msg( 'Erro ao tentar cadastrar os dados do cliente!', 'erro');
                        }

                        console.log(data);
                    }
                } );
            }
        } );

    $('#frmAlterarConteudo').bootstrapValidator({
        message: 'Este valor não é válido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titulo: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o titulo!.' }
                }
            },
            slug: {
                validators: {
                    notEmpty: { message: 'Este campo é obrigatório. Favor informar o slug!.' }
                }
            }
        }
    })
        .on( 'success.form.bv', function( event ){
            event.preventDefault();
            var formulario   = $( event.target );
            var titulo       = formulario.find('#titulo').val();
            var idConteudo   = formulario.find('#idConteudo').val();
            var slug         = formulario.find('#slug').val();
            var conteudo     = tinyMCE.get('conteudo').getContent();
            var btnCadastrar = formulario.find(':button');
            var load         = formulario.find('.load');
            if( conteudo == 0 ){
                msg( 'Por favor informar o conteudo da pagina!', 'erro');
                $( '#divConteudoTextearea iframe' ).css('border', '2px solid red');
                btnCadastrar.attr( 'disabled', false );
            }else{
                $.ajax( {
                    url: host + "/admin/app/controller/controller.php",
                    type:"POST",
                    data: "acao=alterarConteudo&" +"titulo="+titulo+"&slug="+slug+"&conteudo="+conteudo+"&id="+idConteudo,
                    beforeSend: function(){
                        btnCadastrar.attr( 'disabled', true );
                        $( load).fadeIn( 'slow' );
                    },
                    success: function( data ) {
                        $( load).fadeOut( 'slow', function(){
                            btnCadastrar.attr( 'disabled', false );
                        } );

                        if( data == 'conteudoAlteradoSucesso' ) {
                            msg( 'Conteudo alterado com sucesso!!', 'sucesso' );
                            setTimeout(function(){
                                document.location.href = host + "/admin/painel/?p=conteudo" ;
                            }, 2000);
                        }else if( data == 'erroAlterarConteudo' ) {
                            msg( 'Erro ao tentar alterar os dados do conteudo!', 'erro');
                        }

                        console.log(data);
                    }
                } );
            }
        } );

    tbody.on( 'click', '#btnDeletarConteudo', function(e) {
        e.preventDefault();
        var idConteudo = $(this).attr( 'data-id' );
        BootstrapDialog.confirm( "Realmente deseja deletar este registro?", function(result) {
            if ( result === true ) {
                $.post( host + "/admin/app/controller/controller.php", {acao:'deletarConteudo',idConteudo:idConteudo}).done( function( data ){
                    if( data == 'conteudoDeletadoSucesso' ) {
                        msg( 'Registro deletado com sucesso!!', 'sucesso' );
                        setTimeout(function(){
                            document.location.href = host + "/admin/painel/?p=conteudo" ;
                        }, 1000);
                    }else if( data == 'erroDeletarConteudo' ) {
                        msg( 'Erro ao tentar deletar o registro!', 'erro');
                    }
                    console.log( data )
                } );
            }
        } );
    } );
});