<? 

?>
<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>  Padoka Hill Valley  </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            #slideCurioidade{
                width: 100%;
                height: 250px;
                display: flex;
                margin-bottom: 30px;
                overflow: hidden;
            }
            figure{
                width: 800px;
                height: 350px;
                margin-left: 200px;
                margin-right: 200px;
               
            }
            figure img {
                width: 100%;
                height: 100%;
                display: flex;
                align-content: center;
                border-radius: 30px;
                
            }
            #previous, #next{
                position: absolute;
                width: 35px;
                height: 250px;
                text-align: center;
                font-size: 3.2em;
                z-index: 971;
                box-sizing: border-box;
                padding-top: 105px;
            }
            #previous {
                margin-left: 150px;
            }
            #next {
                margin-left: 1010px;
            }
            #previous:hover, #next:hover{
                cursor: pointer;
                transition: 1.5s;
            }
        </style>
        
    </head>
    <body>
<!-- Container que possui todas as informacoes visuais da pagina -->
        <?php 
            include_once("header.php");
        ?>
        <div id="container" class="alinhamentoAoCentro">
            
            
            <!--  Area  do conteudo da pagina  -->
            <div class="conteudo">
                <div id="slideCurioidade" class="alinhamentoAoCentro"> 
                    <ul>
                        <li>
                            <figure>
                                <img src="imagens/slide2Img/img1.png">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="imagens/slide2Img/img2.png">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="imagens/slide2Img/img3.jpeg">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="imagens/slide2Img/img4.png">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="imagens/slide2Img/img5.jpg">
                            </figure>
                        </li>
                    </ul>
                    <div id="previous"> &laquo; </div>
                    <div id="next"> &raquo; </div>
                </div>
                <div id="conteudoValores" class="alinhamentoAoCentro"> 
                    <h1> Valores </h1>
                    <div class="texto">
                        <p> 
                            Somos uma empresa familiar engajada  em promovos conforto aos nossos clientes e funcionarios.
                        </p>
                    </div>
                </div>
                <div id="conteudoVisao" class="alinhamentoAoCentro"> 
                    <h1> Visão </h1>
                    <div class="texto"> 
                        <p>
                            é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os e
                        </p>
                    </div>
                </div>
                <div id="ConteudoMissao" class="alinhamentoAoCentro"> 
                    <h1> Missão  </h1>
                    <div class="texto"> 
                        <p>
                            é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os e
                        </p>
                    </div>
                </div>
            </div>
               
           
            <?php 
                include_once("footer.php")
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/jqueryCycle.js"></script>
        <script src="js/slideCuriosidade.js"></script>
    <script src="js/funcaoMenu.js"> 
        abreMenu();
    </script>

    </body>
</html>