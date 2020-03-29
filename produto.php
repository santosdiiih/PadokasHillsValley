<? 

?>
<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>  Padoka Hill Valley  </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
<!-- Container que possui todas as informacoes visuais da pagina -->
        <?php 
            include_once("header.php");
        ?>
        <div id="container" class="alinhamentoAoCentro">
            <!-- Area do cabecalho -->
            <div>
                
            </div>
            
            <!--  Area  do conteudo da pagina  -->
            <div class="conteudo alinhamentoAoCentro">
                <div id="containerCombos" class="alinhamentoAoCentro">
                    <h1> Promoções do Mês </h1>
                    <div id="produtoInformacao" class="alinhamentoAoCentro">
                        <div class="produtoCombos">
                            <div id="produtoComboImagem" class="alinhamentoAoCentro"></div>
                            <div id="produtoComboTexto" class="texto">
                                <p>
                                    deja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                                </p>
                            </div>
                        </div>
                        <div class="produtoCombos">
                            <div id="produtoComboImagem" class="alinhamentoAoCentro"></div>
                            <div id="produtoComboTexto" class="texto">
                                <p>
                                    deja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="produtoImagem"></div>
                </div>
                <div id="containerProdutoPromocao" class="alinhamentoAoCentro">
                    <h1> Mega Promoções </h1>
                    <div id="containerProdutoPromocao" class="alinhamentoAoCentro">
                        <div class="produtoPromocaoCombo alinhamentoAoCentro">
                            <div class="produtoPromocaoImagem alinhamentoAoCentro"></div>
                            <div class="produtoPromocaoTexto texto">
                                <p>
                                    deja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                                </p>
                            </div>
                        </div>
                        <div class="produtoPromocaoCombo alinhamentoAoCentro"> 
                            <div class="produtoPromocaoImagem alinhamentoAoCentro"></div>
                            <div class="produtoPromocaoTexto texto">
                                <p>
                                    deja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
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