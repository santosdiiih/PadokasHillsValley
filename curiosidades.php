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
                margin-bottom: 30px;
                overflow: hidden;
/*                float: left;*/
            }
            figure{
                width: 800px;
                height: 350px;
                margin-left: 200px;
                margin-right: 200px;
                float: left;
               
            }
            figure img {
                width: 100%;
                height: 100%;
                display: flex;
                align-content: center;
                border-radius: 30px;
                float: left;
                
            }
            #previous, #next{
                 position: absolute;
                width: 35px;
                height: 300px;
                z-index: 970;
                text-align: center;
        /*        padding-top: 150px;*/
                box-sizing: border-box;
                font-size: 3.2em;
                float: left;
                margin-top: -270px;
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
                background-color: #ffffff10;
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
                            O compromisso com nnossos clientes, a etica diante da sociedade, a inovação de nosso produtos e por fim a dedicação com tudo oque fazemos são nossos principais valores.
                        </p>
                    </div>
                </div>
                <div id="conteudoVisao" class="alinhamentoAoCentro"> 
                    <h1> Visão </h1>
                    <div class="texto"> 
                        <p>
                            Desejamos ser referencia e lider em performance, atraindo a confiança de nossos colaboradores da forma mais honesta possível, visando sempre o conforto dos nossos clientes. 
                        </p>
                    </div>
                </div>
                <div id="ConteudoMissao" class="alinhamentoAoCentro"> 
                    <h1> Missão  </h1>
                    <div class="texto"> 
                        <p>
                            A padokas é uma empresa que visa todos os gostos, com a inteção de promover momentos únicos na vida de seus colabores sendo eles seus clientes, funcionarios e patrocinadores.
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