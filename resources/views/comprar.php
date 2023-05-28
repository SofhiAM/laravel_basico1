<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Carrito de compras</title>
</head>
<body>
    <!-- Navbar y Header-->
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center"><i class="material-icons">shopping_bag</i>Tienda de Ropa</a>
        </div>    
    </nav>
    <div class="container">
        <h4 class="center">Carrito de Compras</h4>
        <div class="row">
            <div class="col s12 m6">
                <ul class="collection">
                    <li class="collection-item">
                        <table>
                            <thead>
                            <tr>
                                <th class="center">Cantidad</th>
                                <th class="center">Artículo</th>
                                <th class="center">Precio</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="center">Tenis referencia 2121</td>
                                <td class="center">$250.000</td>
                                <th class="center"> <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></th>
                            </tr>
                            <tr>
                                <td class="center">1</td>
                                <td class="center">Blusa referencia 3030</td>
                                <td class="center">$70.000</td>
                                <th class="center"> <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></th>
                            </tr>

                            <tr>
                                <td class="center" >1</td>
                                <td class="center">Pantalon referencia 9087</td>
                                <td class="center">$150.000</td>
                                <th class="center"> <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></th>
                            </tr>

                            <tr>
                                <th class="center" colspan="2">Total</th>
                                <td class="center">$470.000</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li class="collection-item">
                        <h6>Tarjeta de Regalo</h6>
                        <input id="cod" type="text" class="validate">
                        <a class="waves-effect waves-light btn">Enviar</a>
                    </li>
                </ul>
            </div>
            <div class="col s12 m6">
                <h5>Método de Pago</h6>
                <a class="waves-effect waves-light btn"><i class="material-icons left">credit_score</i>Debito</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">credit_card</i>Crédito</a>

                <br><br>

                <h5>Método de Pago</h6>
                <a class="waves-effect waves-light btn"><i class="material-icons left">credit_score</i>Debito</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">credit_card</i>Crédito</a>
            </div>
        </div>
    </div>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>