<?php
    include_once("templates/header.php");
?>
<body>
    <div id="main-banner">
        <h1>Faça seu Pedido</h1>
    </div>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> /*ocupa 12 colunas do grid do bootstrap */
                    <h2>Monte a pizza como desejar</h2>
                    <form action="process/pizzas.php" method="POST" id="pizza-form"></form>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("templates/footer.php");
?>