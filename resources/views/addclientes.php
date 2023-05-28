<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Clientes</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Navbar y Header-->
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center"><i class="material-icons">shopping_bag</i>Tienda de Ropa</a>
        </div>    
    </nav>
    <div class="container">
        <h4 class="center">Sé nuestro cliente</h2>
        <h6>Para nosotros sería genial recomendarte de nuestras ofertas y descuentos. Registrate y no te pierdas de las mejores promociones</h6>
        <br>
        
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Nombre</label>
                    </div>

                    <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Apellido</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="email" type="number" class="validate">
                        <label for="telefono">Telefono</label>
                    </div>
                    <br>
                    <label>
                        <input type="checkbox" />
                        <span>Acepto los términos y condiciones</span>
                    </label>
                </div>

                <a class="waves-effect waves-light btn-large"><i class="material-icons left">send</i>Enviar mis datos</a>
            </form>
        </div>
    </div>
</body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>