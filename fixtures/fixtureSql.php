<?php
/**
 * File: fixturesSql.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 21/07/14
 * Time: 20:16
 * Project: estudo_php
 * Copyright: 2014
 */

require_once ( '../config.php' );

try{

    $sqlMenu  = "CREATE TABLE IF NOT EXISTS `tbl_menu` (
                                                  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
                                                  `nome_menu` varchar(60) NOT NULL,
                                                  `href_menu` varchar(60) NOT NULL,
                                                  `hint_menu` varchar(60) NOT NULL,
                                                  `sit_cancelado` char(1) NOT NULL,
                                                  PRIMARY KEY (`id_menu`)
                                                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    echo ( executaSQL( $sqlMenu, null ) ) ? 'Tabela tbl_menu criada com sucesso!'.chr(13).chr(10) : 'Erro ao tentar criar a tabela tbl_menu'.chr(13).chr(10);

    $sqlMenuInsert = "INSERT INTO `tbl_menu` (`id_menu`, `nome_menu`, `href_menu`, `hint_menu`, `sit_cancelado`) VALUES
                                            (1, 'Home', 'home', 'Pagina inicial', 'N'),
                                            (2, 'Empresa', 'empresa', 'Pagina empresa', 'N'),
                                            (3, 'Produtos', 'produtos', 'Pagina dos produtos', 'N'),
                                            (4, 'Servi&ccedil;os', 'servicos', 'Pagina dos servi&ccedil;os', 'N'),
                                            (5, 'Clientes', 'clientes', 'Nossos clientes', 'N'),
                                            (6, 'Contato', 'contato', 'Pagina de contato', 'N'),
                                            (10, 'Menu teste', 'menu_teste', 'Menu de teste', 'S'),
                                            (11, 'Menu teste23', 'menu_teste23', 'Menu de teste23', 'S');";
    echo ( executaSql( $sqlMenuInsert ) ) ? 'Inserts na tabela tbl_menu efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_menu'.chr(13).chr(10);

    $sqlClientes  = "CREATE TABLE IF NOT EXISTS `tbl_clientes` (
                                                  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
                                                  `nome_cliente` varchar(100) NOT NULL,
                                                  `email_cliente` varchar(50) NOT NULL,
                                                  PRIMARY KEY (`id_cliente`)
                                                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    echo ( executaSQL( $sqlClientes, null ) ) ? 'Tabela tbl_clientes criada com sucesso!'.chr(13).chr(10) : 'Erro ao tentar criar a tabela tbl_clientes'.chr(13).chr(10);

    $sqlClientesInsert = "INSERT INTO `tbl_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`) VALUES
                                                (1, 'Luis Alberto Concha Curay', 'luvett11@gmail.com'),
                                                (2, 'Maria Gomes da Silva', 'maria@gmail.com'),
                                                (3, 'Veronica Perez Albujar', 'veronica@gmail.com'),
                                                (4, 'Jesus Enrique Concha Curay', 'jesus@gmail.com'),
                                                (5, 'Pedro Alcantara Velez', 'pedor@gmail.com'),
                                                (6, 'Monica Arajo', 'mocica@gmail.com'),
                                                (7, 'Susana Villaram ', 'susana@gmail.com'),
                                                (8, 'Fernanda Montes del Pilar', 'susana@gmail.com');
                                                ";

    echo ( executaSql( $sqlClientesInsert ) ) ? 'Inserts na tabela tbl_clientes efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_clientes'.chr(13).chr(10);

    $sqlConteudo = "CREATE TABLE IF NOT EXISTS `tbl_conteudo` (
                                                      `id` int(11) NOT NULL AUTO_INCREMENT,
                                                      `titulo_conteudo` varchar(200) NOT NULL,
                                                      `conteudo_conteudo` text NOT NULL,
                                                      `slug_conteudo` varchar(200) NOT NULL,
                                                      PRIMARY KEY (`id`)
                                                    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COLLATE=utf8_unicode_ci;";
    echo ( executaSql( $sqlConteudo ) ) ? 'Tabela tbl_conteudo criada com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_conteudo'.chr(13).chr(10);

    $sqlConteudoInsert = "INSERT INTO `tbl_conteudo` (`id`, `titulo_conteudo`, `conteudo_conteudo`, `slug_conteudo`) VALUES
                        (1, 'Pagina inicial', 'E um fato conhecido de todos que um leitor se distraira com o conteudo de texto legivel de uma pagina quando estiver examinando sua diagramacao. A vantagem de usar Lorem Ipsum e que ele tem uma distribuicao normal de letras, ao contrario de ''''Conteudo aqui, conteudo aqui'''', fazendo com que ele tenha uma aparencia similar a de um texto legivel. Muitos softwares de publicacao e editores de paginas na internet agora usam Lorem Ipsum como texto-modelo padrao, e uma rapida busca por ''''lorem ipsum'''' mostra varios websites ainda em sua fase de construcao. Varias versoes novas surgiram ao longo dos anos, eventualmente por acidente, e as vezes de proposito (injetando humor, e coisas do genero).', 'home'),
                        (2, 'Empresa', 'E um fato conhecido de todos que um leitor se distraira com o conteudo de texto legivel de uma pagina quando estiver examinando sua diagramacao. A vantagem de usar Lorem Ipsum e que ele tem uma distribuicao normal de letras, ao contrario de ''''Conteudo aqui, conteudo aqui'''', fazendo com que ele tenha uma aparencia similar a de um texto legivel. Muitos softwares de publicacao e editores de paginas na internet agora usam Lorem Ipsum como texto-modelo padrao, e uma rapida busca por ''''lorem ipsum'''' mostra varios websites ainda em sua fase de construcao. Varias versoes novas surgiram ao longo dos anos, eventualmente por acidente, e as vezes de proposito (injetando humor, e coisas do genero).', 'empresa'),
                        (3, 'Produto', 'E um fato conhecido de todos que um leitor se distraira com o conteudo de texto legivel de uma pagina quando estiver examinando sua diagramacao. A vantagem de usar Lorem Ipsum e que ele tem uma distribuicao normal de letras, ao contrario de ''''Conteudo aqui, conteudo aqui'''', fazendo com que ele tenha uma aparencia similar a de um texto legivel. Muitos softwares de publicacao e editores de paginas na internet agora usam Lorem Ipsum como texto-modelo padrao, e uma rapida busca por ''''lorem ipsum'''' mostra varios websites ainda em sua fase de construcao. Varias versoes novas surgiram ao longo dos anos, eventualmente por acidente, e as vezes de proposito (injetando humor, e coisas do genero).', 'produtos'),
                        (4, 'Setor', 'E um fato conhecido de todos que um leitor se distraira com o conteudo de texto legivel de uma pagina quando estiver examinando sua diagramacao. A vantagem de usar Lorem Ipsum e que ele tem uma distribuicao normal de letras, ao contrario de ''''Conteudo aqui, conteudo aqui'''', fazendo com que ele tenha uma aparencia similar a de um texto legivel. Muitos softwares de publicacao e editores de paginas na internet agora usam Lorem Ipsum como texto-modelo padrao, e uma rapida busca por ''''lorem ipsum'''' mostra varios websites ainda em sua fase de construcao. Varias versoes novas surgiram ao longo dos anos, eventualmente por acidente, e as vezes de proposito (injetando humor, e coisas do genero).', 'servicos'),
                        (5, 'Tema de teste', 'E um fato conhecido de todos que um leitor se distraira com o conteudo de texto legivel de uma pagina quando estiver examinando sua diagramacao. A vantagem de usar Lorem Ipsum e que ele tem uma distribuicao normal de letras, ao contrario de ''''Conteudo aqui, conteudo aqui'''', fazendo com que ele tenha uma aparencia similar a de um texto legivel. Muitos softwares de publicacao e editores de paginas na internet agora usam Lorem Ipsum como texto-modelo padrao, e uma rapida busca por ''''lorem ipsum'''' mostra varios websites ainda em sua fase de construcao. Varias versoes novas surgiram ao longo dos anos, eventualmente por acidente, e as vezes de proposito (injetando humor, e coisas do genero).', 'tema');";
    echo ( executaSql( $sqlConteudoInsert ) ) ? 'Inserts na tabela tbl_conteudo efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_conteudo'.chr(13).chr(10);

    $sqlUsuario = "CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
                                                  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
                                                  `nome_usuario` varchar(60) NOT NULL,
                                                  `cpf_usuario` varchar(11) NOT NULL,
                                                  `senha_usuario` varchar(80) NOT NULL,
                                                  `dat_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                                  `sit_cancelado` char(1) NOT NULL COMMENT '1=ativo, 2=inativo',
                                                  PRIMARY KEY (`id_usuario`)
                                                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    echo ( executaSql( $sqlUsuario ) ) ? 'Tabela tbl_usuarios criada com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_usuarios'.chr(13).chr(10);

    $sqlUsuarioInsert = "INSERT INTO `tbl_usuarios` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `senha_usuario`, `dat_cadastro`, `sit_cancelado`) VALUES
                        (1, 'Luis Alberto Concha Curay', '21267811862', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuxDn6STZCPC0LGOd.c/kQuEtq6Nb7EfS'."', '2014-07-17 03:03:39', '1'),
                        (2, 'Maria Pepa Gonsales'      , '22045478246', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:33:11', '1'),
                        (3, 'Jose de la Riva Aguero'   , '58803876405', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:34:40', '1'),
                        (4, 'Maria Pepa Gomes'         , '50237033127', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:59:50', '1'),
                        (5, 'Amanda del Pilar'         , '44661008103', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:05:25', '2'),
                        (6, 'Jose Maria Campos'        , '32332881581', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:07:02', '2'),
                        (7, 'Alberto Suares'           , '54571020929', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:09:20', '2');";


    echo ( executaSql( $sqlUsuarioInsert ) ) ? 'Inserts na tabela tbl_usuarios efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_usuarios'.chr(13).chr(10);
}
catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}


function executaSql( $sql )
{
    $pdo  = conecta();
    $stmt = $pdo->prepare( $sql );
    $res  = $stmt->execute();
    return ( $res ) ? true : false;
}

?>