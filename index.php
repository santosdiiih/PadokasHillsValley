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
            <div id="slide" class="alinhamentoAoCentro">  </div>
                <div class="conteudo">
                    <!--   Area do menu lateral  -->
                    <div id="menuLateral">
                        <ul>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                            <li class="subItens"> Item 1 </li>
                        </ul>
                    </div>
                    <!--   Area dos cards  -->
                    <div id="containerConteudo">
                        <div class="card">
                            <div id="imagemCard" class="alinhamentoAoCentro">

                            </div>
                            <div id="informacoesCard">
                                <p> Nome: </p>
                                <p> Descrição: </p>
                                <p> Preço: </p>
                            </div>
                            <div id="detalhesCard"> Detalhes </div>
                        </div>
                        <div class="card">
                            <div id="imagemCard" class="alinhamentoAoCentro">

                            </div>
                            <div id="informacoesCard">
                                <p> Nome: </p>
                                <p> Descrição: </p>
                                <p> Preço: </p>
                            </div>
                            <div id="detalhesCard"> Detalhes </div>
                        </div>
                        <div class="card">
                            <div id="imagemCard" class="alinhamentoAoCentro">

                            </div>
                            <div id="informacoesCard">
                                <p> Nome: </p>
                                <p> Descrição: </p>
                                <p> Preço: </p>
                            </div>
                            <div id="detalhesCard"> Detalhes </div>
                        </div>
                    </div>
                </div>
                <!--  Area do Footer  -->
                <?php 
                    include_once("footer.php")
                ?>
                
        </div>
    <script src="js/jquery.js"></script>
    <script src="js/funcao.js"> 
        abreMenu();
    </script>

    </body>
</html>