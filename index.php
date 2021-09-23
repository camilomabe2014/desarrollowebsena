<!DOCTYPE html>
<!--
   To change this license header, choose License Headers in Project Properties.
   To change this template file, choose Tools | Templates
   and open the template in the editor.
   -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Mi Paguina Web</title>
      <link href="styles.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id='Fondo'>
         <div id='FondoSuperior'>
            <div id='Encabezado'></div>
            <div >
               <div id='Contenido'>
                  <form name="formulario" method="POST" action="principal.php">
                  <br>
                  Ingrese su nombre: 
                  <br>
                  <input type="text" name="nombre" value="">
                  <br>
                  <br>
                  Ingrese su edad: 
                  <br>
                  <input type="text" name="edad" value="">
                  <br> <br>
                  
                  
                  <input type='submit' value='Aceptar' name='BotonAceptar' />
                  <br>
                  </form>



               </div>
               <div id='Menu'>
               </div>
            </div>
            <div id='Final'></div>
         </div>
      </div>
   </body>
</html>