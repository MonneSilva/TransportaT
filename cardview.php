<html>
<div id="divsito2"></div>
	<script src="scripts/jquery.js" type="text/javascript"></script>
	<script src="paginas/Registro/Scripts/js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="estilos/card.css">
</script>
	</head>
	<body>
        <table class="inputT" >
            <form action="" method=""  >
                div.fond 
	span.s1 blog 
	span.s2 card
div.card
	div.thumbnail
		img.left(src="http://www.movistar.es/estaticos/content-acc/ficha-fusion/img/fp-sim-prepago.png")
	div.right
		h1 Información de tarjeta
		div.author
			img(src="https://www.bsn.eu/wp-content/uploads/2016/12/user-icon-image-placeholder.jpg")
			h2 User
		div.separator
		h1 Número de Tarjeta:
		h1.center *******548
		h1 Tipo de Tarjeta:
		h1.center Preferencial
	ul
		li
			i.fa.fa-plus-circle.fa-2x
		li
			i.fa.fa-ban.fa-2x
		li
			i.fa.fa-check-square.fa-2x
		li
			i.fa.fa-trash.fa-2x
		li
			i.fa.fa-dollar.fa-2x
		
	div.fab
		i.fa.fa-arrow-down.fa-3x 
                <tr>
                    <th colspan="2"> Datos Personales </th>
                </tr>
                <tr>
                <td>Nombre(s) </td>
                <td><input name="alfa" id="nombre" type="text" class="form-control" placeholder="Alberto..." required></td>
                </tr><tr>
                <td>Apellido Paterno </td>
                <td><input  name="alfa" id="apepat" type="text" class="form-control" placeholder="Rodriguez..." required ></td>
                </tr> <tr>
                    <td>Apellido Materno </td>
                <td><input name="alfa" id="apemat" type="text" class="form-control" placeholder=" Hernandez..." required ></td>
                </tr> <tr>
                    <td>Fecha de Nacimiento </td>
                <td><input name="date" id="date" type="date" class="form-control" value="2000-01-01" required ></td>
           </tr>
           <tr>
              <td>Genero:</td>
              <td> <input name="gener" class="Intere" type="radio" value="F" /> Femenino
              <input name="gener" class="Intere" type="radio" value="M" checked /> Masculino </td>
                          </tr>
                  <tr>
                    <th colspan="2"> Datos de Contacto </th>
                </tr>
                <tr>                    
                <td>Telefono Movil</td>
                <td><input name="numerico" id ="telM" type="text" class="form-control" placeholder="(044)..." required ></td>
                                      
                </tr><tr><td>Telefono Fijo </td>
                <td><input name="numerico" id="telF" type="text" class="form-control" placeholder="(492)..." required > </td>
                                     
                </tr><tr><td>Correo electronico</td>
                <td><input name="email" id="correo" type="email" class="form-control" placeholder="usuario@ipn.com" required></td>
                    </tr>
                    <tr>
                    <th colspan="2"> Datos de Procedencia </th>
                </tr>
                    <tr id="Estado">
                </tr> 

                    <script type="text/javascript">
            
                       $(document).ready(function(){
    //alert("pagina carga ok0");
                        edo();
    //Debemos mostrar los registros
                                             });
                     </script>
                    <tr id="Municipio"></tr>
                     <script type="text/javascript">
            //Cuando se cargue la página
                       $(document).ready(function(){
    //alert("pagina carga ok0");
                                           mun();
    //Debemos mostrar los registros
                                             });
                     </script>
                                         
                        <tr id="Subsistema"></tr>
                                         <script type="text/javascript">
            //Cuando se cargue la página
                                           $(document).ready(function(){
    //alert("pagina carga ok0");
                                           sub();
    //Debemos mostrar los registros
                                             });
                                         </script>
                                          
                                    <tr id="Escuela"></tr>
                                         <script type="text/javascript">
                                           $(document).ready(function(){
                                            esc();
                                          });
                                         </script>
                                         <tr>
                    <th colspan="2"> Datos de Interes Académico </th>
                </tr><tr>
                                        <td>¿Esta interesado en ingresar a UPIIZ o IPN en general?</td>
                                       <td> <input name="Interes" class="Intere" type="radio" value="1" /> Si
                              <input name="Interes" class="Intere" type="radio" value="0"  checked/> No </td>
                          </tr>
                                        <tr id="Opciones"></tr>
                                         <script type="text/javascript">
                                           $(document).ready(function(){
                                            int();
                                          });
                                         </script>
                                         <tr>
                                   
                               <td colspan="2"> <input type='reset' name='registrar' onclick="guardar();"  value='Registrar'/></td></tr>
                           </form>
                       </table>
                 
</body>     
           </html>                 


    