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
            <div class="conteudo">
                <div class="conteudoSobre alinhamentoAoCentro">
                    <div id="sobreInicio" class="texto alinhamentoAoCentro">
                        <h1> Sobre Inicio </h1>
                        <p>
                            O inicio foi o nosso primeiro desafio, ninguem conhecia a nossa marca e com tantas marcas consagradas, tivemos que lutar duro para provar o nosso valor.
                        </p>
                    </div>
                    <div id="sobreImagem" class="alinhamentoAoCentro">
                        <figure>
                            <img src="imagens/boas-vindas.jpg" alt="imagem boas de vindas"> 
                        </figure>                        
                    </div>
                </div>
                <div class="conteudoSobre alinhamentoAoCentro">
                    <div id="sobreComoFoi" class="texto alinhamentoAoCentro">
                       <h1> Como foi o Inicio </h1>
                        <p>
                            Diante de um mercado de trabalho tão competitivo selecionamos os nossos melhores candidatos depositando toda a nossa confiança em seu trabalho e valorizando seu potencial.
                        </p>
                    </div>
                    <div id="sobreImagemComoFoi" class="alinhamentoAoCentro">
                        <figure>
                            <img src="imagens/contratacao-e-recrutamento-de-novos-funcionarios.jpg">
                        </figure>
                    </div>
                </div>
                <div class="conteudoSobre alinhamentoAoCentro">
                    <div id="sobreAtualmente" class="texto alinhamentoAoCentro">
                        <h1> Atualmente </h1>
                        <p> 
                            O nosso quadro de funcionario vem crescendo, sempre atendendo e dando oportunidade a todos, pois todos merecem um voto de confiança. 
                        </p>
                    </div>
                    <div id="sobreImagemAtualmente" class="alinhamentoAoCentro"> 
                        <figure>
                            <img src="imagens/bakery-business.jpg">
                        </figure>
                    </div>
                    <div id="sobreInformacoesAdicionais" class="texto alinhamentoAoCentro">
                        <h1> Informações Adicionais </h1>
                        <p>
                            Caso esteja interessado em fazer parte de uma das maiores redes alimenticias da América Latina entre em contato e deixe seu curriculo que uma hora retornaremos o contato.
                        </p>
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