<?php
 
    if(isset($_POST['submit']))
    {
      // print_r($_POST['nomeorcamento']);  
      // print_r($_POST['emailorcamento']);
      // print_r($_POST['telefoneorcamento']);
      // print_r($_POST['cep']);
      // print_r($_POST['evento']);
      // print_r($_POST['convidados']);
      // print_r($_POST['mensagemorcamento']);
 
      include_once('config.php');
 
      $nomeorcamento = $_POST['nomeorcamento'];
      $emailorcamento = $_POST['emailorcamento'];
      $telefoneorcamento = $_POST['telefoneorcamento'];
      $cep = $_POST['cep'];
      $evento = $_POST['evento'];
      $convidados = $_POST['convidados'];
      $mensagemorcamento = $_POST['mensagemorcamento'];
 
      $result = mysqli_query($conexao,"INSERT INTO orcamento(nome,email,telefone,cep,evento,convidados,mensagem) VALUES ('$nomeorcamento','$emailorcamento','$telefoneorcamento','$cep','$evento','$convidados','$mensagemorcamento')");
    }
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="imagens/malie (1).png" type="image/x-icon">
    <title>Malie Confeitaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-bar">
 
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.html" target="_self" class="nav-link">SOBRE NÓS</a></li>
                    <li class="nav-item"><a href="contato.php" target="_self"  class="nav-link" >CONTATO</a></li>
                    <li class="nav-item"><a href="orcamentos.php" target="_self"  class="nav-link">ORÇAMENTOS</a></li>
                    <li class="nav-item"><a href="menu.html" target="_self" class="nav-link">MENU</a></li>
                </ul>
            </div>
 
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="imagens/icone-menu-jaune.png" alt="" style="width: 27px;"></button>
            </div>
        </nav>
       
        <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="index.html" target="_self" class="nav-link">SOBRE NÓS</a></li>
                    <li class="nav-item"><a href="contato.php" target="_self" rel="next" class="nav-link" >CONTATO</a></li>
                    <li class="nav-item"><a href="orcamentos.php" target="_self" rel="next" class="nav-link">ORÇAMENTOS</a></li>
                    <li class="nav-item"><a href="menu.html" target="_self" rel="next" class="nav-link">MENU</a></li>
                </ul>
        </div>    
    </header>
 
    <script src="script.js"></script>
   
    <main>
 
        <div class="fotoP">
            <img src="imagens/foto_orcamentosP.jpg" alt="foto.espaco" width="100%">
        </div>
 
        <div class="fotoG">
            <img src="imagens/foto_orcamentos.jpg" alt="foto.espaco" width="100%">
        </div>
 
       
        <p class="classeC">SOLICITE O ORÇAMENTO PARA SUA FESTA AQUI!</p>
        <div class="box">
            <div class="faleconosco">
                <form action="orcamentos.php" method="POST">
 
                        <div class="inputBox">
                            <label for="nomeorcamento">Nome:</label><br>
                            <input type="text" name="nomeorcamento" id="nomeorçamento" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="emailorcamento">E-mail:</label><br>
                            <input type="email" name="emailorcamento" id="emailorcamento" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="telefoneorcamento">Telefone/WhatsApp:</label><br>
                            <input type="tel" name="telefoneorcamento" id="telefoneorcamento" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="cep">CEP:</label><br>
                            <input type="text" name="cep" id="cep" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="evento">Tipo de Evento:</label><br>
                            <input type="text" name="evento" id="evento" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="convidados">Quantidade de Convidados:</label><br>
                            <input type="number" name="convidados" id="convidados" class="inputContato" required>
                        </div>
                       
                        <div class="inputBox"><br>
                            <label for="mensagemorcamento"> Digite quais produtos e quantidades pretende orçar:</label><br>
                            <textarea id="mensagemorcamento" name="mensagemorcamento" rows="8" cols="71" class="textarea2">  </textarea>
                        </div>
 
                       
                        <input type="submit" name="submit" id="submit">
                </form>
            </div>
        </div>
       
        <button class="whatsApp"><a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511964684178"><img
            src="imagens/WhatsApp-icone.png" data-selector="img"></a></button>
    </main>
    <footer>
        <p>Site para fins educativos, dados e localizações genéricos.</p>
    </footer>
</body>
</html>

