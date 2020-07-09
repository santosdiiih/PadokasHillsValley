<?php 
    include_once('BD/conecta.php');

    $conex = conexaoMysql();

        $admUsuario = null;
        $admFaleConosco = null;
        $admConteudo = null;
        $admProduto = "";
        $tipoNivel = "";

    if(isset($_POST['btnEnviar'])){

        $admUsuario = $_POST['rdoadminUsuario'];
        $admFaleConosco = $_POST['rdoAdminFaleConosco'];
        $admConteudo = $_POST['rdoAdminConteudo'];
        $admProduto = $_POST['rdoadminProduto'];
        $tipoNivel = $_POST['sltadmNivel'];
    
    if(!($admConteudo || $admFaleConosco || $admUsuario || $admProduto) == ""){
        $sql = "insert into tblNivel (administrarUsuario, administrarConteudo, 
        administrarFaleConosco, administrarProduto, tipo) 
        values ('".$admUsuario."', '".$admConteudo."', '".$admFaleConosco."', '".$admProduto."', '".$tipoNivel."')";

        # echo($sql); exit;

        if(mysqli_query($conex, $sql)){
            echo("<script> alert('Dados Inserido com Sucesso')</script>");
        }
        else{
            echo("<script> alert('Erro ao Inserir os dados')</script>");
        }
    }
    else{
        echo("<script> alert('Preencha os Dados')</script>");
        header('location: admNiveis.php');
    }
};
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
        <?php 
                include_once('header.php');
            ?>
            <div class="conteudo">

            <form action="admNiveis.php" method="post" name="frmNiveis">
                <div class="containerNivel">
                    <select name="sltadmNivel">
                        <p> Nivel de Usuario </p>
                        <option value=""> Selecione um Nivel</option>
                        <option value="Administrador"> Administrador </option>
                        <option value="Operador Conteudo"> Operador de Conteudo </option>
                        <option value="Relacionamento Cliente"> Relacionamento Com Cliente </option>
                    </select>
                </div>

                <div class="tableNivel">
                    <table>
                        <tr>
                            <td class="Nivel"> 
                                 Administrar Conteudo
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoAdminConteudo" value="1" select> Sim.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoAdminConteudo" value="0" select> Não.
                            </td>
                        </tr>
                        <tr>
                            <td class="Nivel"> 
                                 Administrar Fale Conosco.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoAdminFaleConosco" value="1" select> Sim.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoAdminFaleConosco" value="0" select> Não.
                            </td>
                        </tr>
                        <tr>
                            <td class="Nivel"> 
                                 Administrar Usuarios.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoadminUsuario" value="1" select> Sim.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoadminUsuario" value="0" select> Não.
                            </td>
                        </tr>
                        <tr>
                            <td class="Nivel"> 
                                 Administrar Produtos.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoadminProduto" value="1" select> Sim.
                            </td>
                            <td class="radio">
                                <input type="radio" name="rdoadminProduto" value="0" select> Não.
                            </td>
                        </tr>
                    </table>
                    <div class="button">
                        <input type="submit" name="btnEnviar" value="Enviar" class="btnEnviar">
                    </div>
                </form>
                <div class="tblNiveis"> 
                    <table >
                        <tr>
                            <td colspan="5" class="tituloNivel"> Visualizar Niveis Cadastrados </td>
                        </tr>
                        <tr>
                            <td> Nivel de Acesso </td>
                            <td> Conteúdo </td>
                            <td> Administra Fale Conosco </td>
                            <td> Administra Usuario </td>
                            <td> Administra Produtos </td>
                        </tr>
                        <?php 
                            $sql = "SELECT * FROM dbpadokas.tblnivel";

                            $selectNivel = mysqli_query($conex, $sql);

                            while ($rsNivel = mysqli_fetch_assoc($selectNivel)) {
                                ?>
                        <tr>
                            <td><?=$rsNivel['tipo']?></td>
                            <td><?php if($rsNivel['administrarConteudo'] == 1) echo(" Sim "); else { echo(" Não ");}?></td>
                            <td><?php if($rsNivel['administrarFaleConosco'] == 1) echo(" Sim "); else { echo(" Não ");}?></td>
                            <td><?php if($rsNivel['administrarUsuario'] == 1) echo(" Sim "); else { echo(" Não ");}?></td>
                            <td><?php if($rsNivel['administrarProduto'] == 1) echo(" Sim "); else { echo(" Não ");}?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                </div>
                
            </div>           
            
        </div>
    </body>
</html>