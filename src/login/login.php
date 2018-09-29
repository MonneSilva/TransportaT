<?php
	include("/conf/conexion.php");
?>

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

