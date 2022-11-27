<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>
    <!--Menu-->
    <div class="fixar">
    <?php include("assets/menu.php") ?>
    </div>
    <!--BANNER-->
    <div class="default-hero-banner">
        <section>
            Comanda Online
        </section>
    </div>




    <!--Comanda-->
    <div class="list-section"><a name="comanda"></a>
        <div class="left-section">
            <section class="column-2">
                <h1 id="comanda">Carrinho</h1>

                <a onclick="enviar()" href="#">Enviar</a>
            </section>
        </div>
        <div class="right-section">
            <h1>Pizzas</h1>
            <div class="list-cards">
                <!--Produto Pra Venda-->
                <div onclick="comanda()" class="list-card">
                    <section id="pedido">
                        <h1>Pizza 1</h1>
                        <p>Sabor de molhar os labios</p>
                        <span class="price">R$ 28,30</span>
                    </section>
                    <section>
                        <img src="https://i.ibb.co/H46FFhP/01.jpg" alt="">
                        <span class="list-category">
                            <p>Adicinar no carrinho.</p>
                        </span>
                    </section>
                </div>
                <!--FIM -->
            </div>
            <h1>Bebidas</h1>
            <div onclick="comandaBebida()" class="list-cards">
                <!--Produto Pra Venda-->
                <div class="list-card">
                    <section>
                        <h1>Refrigerante</h1>
                        <p>Esta com sede, venha molhar garganta.</p>
                        <span class="price">R$ 12,50</span>
                    </section>
                    <section>
                        <img src="https://s2.glbimg.com/0TOi9LK5B-kQI2K2NhCXLg9YMnY=/620x413/smart/e.glbimg.com/og/ed/f/original/2018/09/18/gettyimages-1005364128.jpg" alt="">
                        <span class="list-category">
                            <p>Adicionar na comanda.</p>
                        </span>
                    </section>
                </div>
                <!--FIM -->
            </div>
        </div>
    </div>



    <!--FOOTER-->
    <footer>
        <div class="footer">
            <section>
                <h3>Pizza Do Boca09</h3>
                <p>WhatsApp. (86)0909-0909</p>
            </section>
            <section>
                <h3>LINKS</h3>
                <a href="#">Home</a>
                <a href="#">Sobre</a>
                <a href="#">Contato</a>
            </section>
            <section>
                <h3>OUTROS</h3>
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos & Condições</a>
            </section>
            <section>
                <h3>ALGUMA PERGUNTA?</h3>
                <a href="emailto:support@teste.com"><span><i class="fa fa-envelope"></i></span><span>support@teste.com</span></a>
                <a href="tel:xxxxxxxxx"><span><i class="fa fa-phone"></i></span><span>(13) 89271-8371</span></a>
            </section>
        </div>
    </footer>
    <div class="sub-footer">
        Copyright ©2022 Todos os direitos reservados | Comanda Online
    </div>


    <!--ADDITIONAL-->
    <a href="#" id="roll_back" class="animate"><i class="fa fa-angle-up"></i></a>
    <script>
        function comanda() {

            const node = document.createElement("li");

            const textnode = document.createTextNode("Pizza 1...........R$28,30");

            node.appendChild(textnode);

            document.getElementById("comanda").appendChild(node);
        }

        function comandaBebida() {

            const node = document.createElement("li");

            const textnode = document.createTextNode("Refrigerante...R$ 12,50");

            node.appendChild(textnode);

            document.getElementById("comanda").appendChild(node);
        }

        function enviar() {
            alert("Pedido Enviado!")
        }
    </script>
</body>

</html>