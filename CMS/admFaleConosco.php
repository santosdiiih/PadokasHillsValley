<?php
    include_once('BD/conecta.php');

    include_once('filtrar.php');

    $conex = conexaoMysql();

    $filtro = '';
  

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> CMS - Padokas </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="container">
            <div class="cabecalho">
                <div class="titulo">
                    <p> CMS - Sistema de Gerenciamento do Site </p>
                </div>
                <div class="configuracaoImg">
                    <img src="img/settings.jpg"> 
                </div>
            </div>
            <div class="menu">
                <div class="admConteudo">
                    <img src="img/admConteudo.png">
                   <a href="admConteudo.php">
                        <p> Admin - Conteúdo </p>
                   </a>
                </div>
                <div class="contato">
                    <img src="img/contact.png">
                    <a href="admFaleConosco.php">
                        <p> Admin - Fale Conosco  </p>
                    </a>
                </div>
                <div class="admUser">
                    <img src="img/user.png">
                   <a href="admUsuario.php">
                     <p> Admin - Usuarios </p>
                   </a>
                </div>
                <div class="userLog">
                    <p> Bem vindo: </p> [Ingrid Aparecida]
                    <p class="logOut">Logout</p>
                </div>
            </div>
            <div class="conteudo">
                <table id="tblFaleConosco">
                    <tr class="tblLinhaTituloFaleConosco">
                        <td id="tituloFaleConosco" colspan="6"> Consulta de Dados </td>
                        <td class="tblColunasfaleConosco"> 
                             </td>
                    </tr>
                    <tr class="tblLinhasFaleConosco">
                        <td class="tblColunasfaleConosco"> Nome </td>
                        <td class="tblColunasfaleConosco"> Telefone </td>
                        <td class="tblColunasfaleConosco"> Celular </td>
                        <td class="tblColunasfaleConosco"> email </td>
                        <td class="tblColunasfaleConosco"> Sexo </td>
                        <td class="tblColunasfaleConosco"> Profissão </td>
                        <td class="tblColunasfaleConosco"> 
                            <form action="admFaleConosco.php" method="post" name="frmAdm">
                                <select name="sltFiltro">
                                    <p> Filtro </p>
                                    <option value="Sugestao"> Sugestão  </option>
                                    <option value="Critica"> Critica </option>
                                </select>
                                <input type="submit" name="btnFiltrar" value="Filtrar">
                                
                            </form>   
                        </td>
                    </tr>

                    <?php
                        

                       $sql = "SELECT tblcontato.idContato, tblcontato.nome,
                        tblContato.telefone, tblContato.celular,
                        tblContato.email, tblContato.sexo, tblContato.profissao, tblContato.filtro 
                        from dbpadokas.tblcontato ";

                        if(isset($_POST['btnFiltrar'])){
                            $filtro = $_POST['sltFiltro'];

                            $sql = "SELECT tblcontato.idContato, tblcontato.nome,
                            tblContato.telefone, tblContato.celular,
                            tblContato.email, tblContato.sexo, tblContato.profissao, tblContato.filtro 
                            from dbpadokas.tblcontato where tblContato.filtro = '" . $filtro . "'";
                        }

                    
                        $selectContato = mysqli_query($conex, $sql);

                        while($rsContato = mysqli_fetch_assoc($selectContato)){
                    
                    ?>

                    <tr class="tblLinhasFaleConosco">
                        <td class="tblColunasfaleConosco"><?=$rsContato['nome']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['telefone']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['celular']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['email']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['sexo']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['profissao']?></td>
                        <td class="tblColunasfaleConosco"><?=$rsContato['filtro']?></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>   
        </div>
    </body>
</html>