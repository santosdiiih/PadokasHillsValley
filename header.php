<?php
    $nome = null;
    $senha = null;
    if(isset($_POST['btnEnviar'])){
        include_once('BD/conecta.php');

        $conex = conexaoMysql();

        $nome = $_POST['txtNome'];
        $senha = $_POST['txtSenha'];

        $senha = md5($senha);

        $sql = "select * from tblUsuario where nome = '".$nome."' 
        and senha = '".$senha."' 
        and estado = 1" ;
        echo($sql);

    }
?>

<div id="containerCabecalho" class="alinhamentoAoCentro"> 
    <div id="conteudoCabecalho" class="alinhamentoAoCentro">
        <div id="containerMenuMobile">
            
            <div id="menuMobileIcone">

            </div>
            <div id="menuMobile">
                <div class="itens">  
                    <a href="index.php"> 
                        Home 
                    </a>
                </div>
                <div class="itens"> 
                    <a href="curiosidades.php">
                        Curiosidade
                    </a>
                </div>
                <div class="itens"> 
                    <a href="sobre.php">
                        Sobre
                    </a>
                </div>
                <div class="itens"> 
                    <a href="promocoes.php">
                        Promoções
                    </a>
                </div>
                <div class="itens"> 
                    <a href="lojas.php">
                        Lojas
                    </a>
                </div>
                <div class="itens"> 
                    <a href="produto.php">
                        Produto do mês
                    </a>
                </div>
                <div class="itens"> 
                    <a href="contato.php">
                        Entre em contato
                    </a>
                </div> 
            </div>
                
        </div>
        
        <div id="logo" class="alinhamentoAoCentro">

        </div>
            <div id="menu" class="alinhamentoAoCentro">
                <div class="itens">  
                    <a href="index.php"> 
                        Home 
                    </a>
                </div>
                <div class="itens"> 
                    <a href="curiosidades.php">
                        Curiosidade
                    </a>
                </div>
                <div class="itens"> 
                    <a href="sobre.php">
                        Sobre
                    </a>
                </div>
                <div class="itens"> 
                    <a href="promocoes.php">
                        Promoções
                    </a>
                </div>
                <div class="itens"> 
                    <a href="lojas.php">
                        Lojas
                    </a>
                </div>
                <div class="itens"> 
                    <a href="produto.php">
                        Produto do mês
                    </a>
                </div>
                <div class="itens"> 
                    <a href="contato.php">
                        Entre em contato
                    </a>
                </div>              
            </div>
            <div id="formulario">
                <form action="header.php" method="post" name="frmEnviar">
                    <div id="login">
                        <div id="nome">
                            <p> Nome: 
                                <input type="text" name="txtNome" value="" maxlength="50">
                            </p>
                        </div>
                        <div id="senha">
                            <p> Senha: 
                                <input type="password" name="txtSenha" value="" maxlength="25">
                            </p>
                        </div>
                        <div id="botao">
                            <input type="submit" name="btnEnviar" value="Ok">
                        </div>
                    </div>                        
            </form>
        </div>
    </div>          
</div>

<div id="containerSociais">
    <div class="social face"></div>
    <div class="social whats"></div>
    <div class= "social insta"></div>
</div>

