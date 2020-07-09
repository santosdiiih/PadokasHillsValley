<?php 
    include_once('BD/conecta.php');

    $conex = conexaoMysql();

    
    # echo($sql); exit;   
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
                <?php 
                    $sql = "select  tblcuriosidade.idConteudo,tblcuriosidade.texto, tblcuriosidade.titulo, tblcuriosidade.estado 
                    as estadoCuriosidade
                    from tblcuriosidade where estado = 1";
                
                    $selectConteudo = mysqli_query($conex, $sql);
                    
                    while ($rsConteudo = mysqli_fetch_assoc($selectConteudo)) {

                        ?>

                <div id="conteudoValores" class="alinhamentoAoCentro"> 
                    <h1> <?=$rsConteudo['titulo']?> </h1>
                    <div class="texto">
                        <p> 
                            <?=$rsConteudo['texto']?>
                        </p>
                    </div>
                </div>

                <?php
                    }
                ?>
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