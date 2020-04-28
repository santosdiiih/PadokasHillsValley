<?php
    
?>

<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>  Padoka Hill Valley  </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
              
    </head>
    <body>
        <!-- Area do cabecalho -->
        <?php 
            include_once("header.php");
        ?>
        <div id="container" class="alinhamentoAoCentro">
             
            <!-- div do slide  -->
            
                <div class="conteudo">
                    <div id="formularioContato" class="alinhamentoAoCentro texto">
                    <h1> Entre em Contato </h1>
                    <form method="post" action="contato.php" name="frmContado">
                        
                    <div class="dadosPadronizados">
                        <div class="descricao"> Nome*: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtNome" value="" maxlength="50">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao" > Telefone*: 

                        </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtTelefone" value="" maxlength="10" id="telefone">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Celular*: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtCell" value="" maxlength="11" id="celular">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Email*: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtEmail" value="" maxlength="50">
                        </div>
                    </div>
                     <div class="dadosPadronizados">
                        <div class="descricao"> Cep: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtCep" value="" id="cep" maxlength="9">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Endereço: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtEndereco" value="" id="endereco" disabled>
                        </div>
                    </div>
                     <div class="dadosPadronizados">
                        <div class="descricao"> Cidade: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtNome" value=""  id="cidade" disabled>
                        </div>
                    </div>
                     <div class="dadosPadronizados">
                        <div class="descricao"> Bairro: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtNome" value=""  id="bairro" disabled>
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Home Page: 

                        </div>
                        <div class="entradaDeDados"> 
                            <input type="url" name="txtNome" value="" maxlength="50">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Link no Facebook: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtNome" value="" maxlength="50">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Filtro: </div>
                        <div class="entradaDeDados"> 
                            <select>
                                <p> Filtro </p>
                                <option> Sugestâo  </option>
                                <option> Critica </option>
                            </select>
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Mensagem*: </div>
                        <div class="entradaDeDados"> 
                            <textarea name="" cols="30" rows="7" maxlength="210"></textarea>
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Sexo: </div>
                        <div class="entradaDeDados"> 
                            <input type="radio"  name="rdoGenero" value="feminino"> Feminino.
                            <input type="radio" name="rdoGenero" value="masculino"> Masculino.
                            <input type="radio" name="rdoGenero" value="outras"> Outros.
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="descricao"> Profisão*: </div>
                        <div class="entradaDeDados"> 
                            <input type="text" name="txtProfisao" value="" maxlength="50">
                        </div>
                    </div>
                    <div class="dadosPadronizados">
                        <div class="entradaDeDados"> 
                            <input type="submit" name="btnEnviar" value="Enviar" class="btnEnviar">
                        </div>
                        <div class="entradaDeDados"> 
                            <input type="submit" name="btnLimpar" value="Limpar" class="btnEnviar">
                        </div>
                    </div>  
                </form>
            </div>
                    
                </div>
                <!--  Area do Footer  -->
                 <?php 
                    include_once("footer.php")
                ?>
                
        </div>
       
    <script src="js/jquery.js"></script>
    <script src="js/funcaoMenu.js"> 
        abreMenu();
    </script>
    <script src="js/funcaoCep.js"></script>
    <script src="js/funcaoTel.js"></script>
    </body>
</html>