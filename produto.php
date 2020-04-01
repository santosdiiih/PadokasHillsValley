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
                            <div id="produtoComboImagem" class="alinhamentoAoCentro">
                                
                                    <img src="imagens/combo1.jpeg">
                                 
                            </div>
                            <div class="texto produtoComboTexto">
                                <p>
                                    Neste combo temos uma porção de batatas, nugget, dois hamburguers e coxinhas para saborear a dois.
                                </p>
                            </div>
                        </div>
                        <div class="produtoCombos">
                            <div id="produtoComboImagem" class="alinhamentoAoCentro">
                                <img src="imagens/combo2.jpg">
                            </div>
                            <div class="texto produtoComboTexto">
                                <p>
                                    Compo exclusivo para quem resgatar o cupom pelo smartphone
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="produtoImagem" class="alinhamentoAoCentro">
                        <img src="imagens/combo3.jpg">
                    </div>
                </div>
                <div id="containerProdutoPromocao" class="alinhamentoAoCentro">
                    <h1> Mega Promoções </h1>
                    <div id="containerProdutoPromocao" class="alinhamentoAoCentro">
                        <div class="produtoPromocaoCombo alinhamentoAoCentro">
                            <div class="produtoPromocaoImagem alinhamentoAoCentro">
                                <img src="imagens/combo4.jpg" >
                            </div>
                            <div class="produtoPromocaoTexto texto">
                                <p>
                                    Neste combo também temos um refrigerante de sua preferência incluso no combo.
                                </p>
                            </div>
                        </div>
                        <div class="produtoPromocaoCombo alinhamentoAoCentro"> 
                            <div class="produtoPromocaoImagem alinhamentoAoCentro">
                                <img src="imagens/combo5.jpg">
                            </div>
                            <div class="produtoPromocaoTexto texto">
                                <p>
                                    E para aqueles que preferem algo mais natural também temos combos com sucos naturais de diversos sabores.
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
    <script src="js/funcaoMenu.js"> 
        abreMenu();
    </script>
    </body>
</html>