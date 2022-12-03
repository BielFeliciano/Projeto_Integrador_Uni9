<?php
 
    if(isset($_POST['submit']))
    {
      include_once('config.php');
 
      $nomecontato = $_POST['nomecontato'];
      $telefonecontato = $_POST['telefonecontato'];
      $tipomensagem = $_POST['tipomensagem'];
      $mensagem = $_POST['mensagem'];
     
      $result = mysqli_query($conexao,"INSERT INTO contato(nome,telefone,tipomensagem,mensagem) VALUES ('$nomecontato','$telefonecontato','$tipomensagem ','$mensagem')");
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
            <div class="box">
                <div class="faleconosco">
                    <form action="contato.php" method="POST">
                        <p class="tituloform">FALE CONOSCO!</p>
 
                        <div class="inputBox">
                            <label for="nomecontato">Nome:</label><br>
                            <input type="text" name="nomecontato" id="nomecontato" class="inputContato" required>
                        </div>
 
                        <div class="inputBox">
                            <label for="telefonecontato">Telefone/WhatsApp:</label><br>
                            <input type="tel" name="telefonecontato" id="telefonecontato" class="inputContato" required>
                        </div>
                       
                        <div class="inputBox">
                            <label for="tipomensagem">Tipo de mensagem:</label><br>
                            <input type="text" name="tipomensagem" id="tipomensagem" class="inputContato" required>
                        </div>
 
                        <div class="inputBox"><br>
                            <textarea id="mensagem" name="mensagem" rows="8" cols="40" class="textarea"></textarea>
                        </div>
 
                        <input type="submit" name="submit" id="submit">
                    </form>
                </div>
               
            </div>
 
            <p class="classeC">FAQ - PERGUNTAS FREQUENTES</p>
 
            <div class="faq">
                <h2 class="rosa2">- LOJA FÍSICA</h2>
 
                <p class="pergunta"> • Quais as formas de pagamento aceitas na confeitaria?</p>
                <p class="resposta">Dinheiro, Pix, Débito, Crédito (American Express, RedeShop, Mastercard, Visa, Elo).</p>
 
                <p class="pergunta"> • Qual horário de funcionamento para atendimento presencial e retiradas?</p>
                <p class="resposta">De terça á sexta das 00h00 ás 00h00 e sábados e domingos das 00h00 ás 00h00.</p>
 
                <p class="pergunta"> • A confeitaria possui serviço de entrega?</p>
                <p class="resposta">Não possuimos serviço de entrega, mas caso não consiga vir pessoalmente, pode enviar um uberflash que levamos até ele.</p>
 
                <p class="pergunta"> • Posso fazer meu pedido pelo WhatsApp?</p>
                <p class="resposta">Sim! Basta nos enviar uma mensagem pelo wpp (11) 00000-0000 informando quais itens quer e o horário que virá busca-los.</p>
 
                <p class="pergunta"> • Posso alterar algum ingrediente nas sobremesas a pronta entrega?</p>
                <p class="resposta">Infelizmente não, caso tenha alguma restrição pedimos que entre em contato e faça seu pedido por encomenda. Assim, criamos algo exclusivo a ti!</p>
 
                <h2 class="rosa2">- ENCOMENDAS</h2>
 
                <p class="pergunta"> • Devo fazer minha encomenda com qual antecedencia?</p>
                <p class="resposta">Aconselhamos que o orçamento e conclusão do pedido sejam feitos o quanto antes, no entanto, o prazo mínimo de antecedencia é de 14 dias.</p>
 
                <p class="pergunta"> • Posso fazer meu orçamento pelo WhatsApp?</p>
                <p class="resposta">Não. Os orçamentos devem ser realizados através de nosso site na página ORÇAMENTOS. Você receberá sua resposta através do email informado nele.</p>
 
                <p class="pergunta"> • Quais as formas de pagamento para encomendas?</p>
                <p class="resposta">Pix e Crédito (American Express, RedeShop, Mastercard, Visa, Elo). Sendo 50% do valor pago no ato da encomenda e o restante no dia da entrega .</p>
            </div>
           
            <button class="whatsApp"><a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511964684178"><img
                src="imagens/WhatsApp-icone.png" data-selector="img"></a></button>
        </main>
 
        <footer>
            <p>Site para fins educativos, dados e localizações genéricos.</p>
        </footer>
    </body>
</html>

