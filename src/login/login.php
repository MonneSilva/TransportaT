<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Iniciar sesión</title>
        <script src="../../js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
        <!-- Para mostrar mensajes flash bonitos -->
    </head>
    <body>
        <div class="" id="main-container">
            <h1>TransportaT</h1>
            <form id="acceso" action="" class="" method="post">
                <input type="email"  id="userAcceso" name="userAcceso" class="campo" placeholder="Nombre Usuario" autofocus maxlength="65" required>
                <input type="password" name="passAcceso" id="passAcceso" class="campo" placeholder="Password" maxlength="85" required>
                <div class="" id="control">
                    <div id="boton">
                        <input type="submit" id="btn-sign-in" name="btn-sign-in" value="Iniciar sesión">
                    </div>
                </div>
            </form>
        </div>
   </body>
</html>
