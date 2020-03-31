<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>  Padoka Hill Valley  </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            /* AREA DO SLIDE */
    #slideHome{
        width: 100%;
        height: 400px;
        display: flex;
        margin-bottom: 30px;
        margin: 0;
        overflow: hidden;
    }
    figure{
        width: 1000px;
        height: 350px;
        margin-left: 100px;
        margin-right: 100px;
        
    }
    figure img{
        width: 100%;
        height: 100%;
        display: flex;
        align-content: center;
        border-radius: 30px;
        box-shadow: 0px 30px 20px black;
    }
    #previous, #next{
        position: absolute;
        width: 35px;
        height: 300px;
        z-index: 970;
        text-align: center;
        padding-top: 150px;
        box-sizing: border-box;
        font-size: 3.2em;
    }
    #previous {
        margin-left: 65px;
    }
    #next{
        margin-left: 1100px;
    }
    #previous:hover, #next:hover{
        cursor: pointer;
        transition: 1.5s;
    }
        </style>     
    </head>
    <body>
        <!-- Area do cabecalho -->
        <?php 
            include_once("header.php");
        ?>
        <div id="container" class="alinhamentoAoCentro">
           
                <div class="conteudo">
                    
                      
            <!-- div do slide  -->
            <div id="slideHome" class="alinhamentoAoCentro">  
                <ul>
                    <li>
                        <figure> 
                            <img src="imagens/imgSlide/img1.jpg">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="imagens/imgSlide/img2.jpg">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="imagens/imgSlide/img3.jpg">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="imagens/imgSlide/img4.jpg">
                        </figure>
                    </li>
                </ul>
                <div id="previous"> &laquo;</div>
                <div id="next"> &raquo;</div>
            </div>  
                    
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
                    <div id="menuLateralMobileImg" class="alinhamentoAoCentro">
                        <img src="imagens/iconfinder_Filter_4781833.png">
                    </div>
                    <div id="menuLateralMobile">
                        <ul>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
                            <li class="subItensMobile"> Item 1 </li>
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
    <script src="js/jqueryCycle.js"> </script>
    <script src="js/funcaoSlide.js"> </script>
    <script src="js/funcaoMenu.js"> 
        abreMenu();
    </script>
    <script src="js/funcaoMenuLateral.js">
        abremenuLateral();
    </script>

    </body>
</html>