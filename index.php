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
      <link href="css/styles.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id='Fondo'>
         <div id='FondoSuperior'>
            <div id='Encabezado'></div>
            <div >
               <div id='Contenido'>
                  <form name="formulario" method="POST" action="principal.php">
                     <br>
                     <center>
                        <table>
                           <tr>
                              <td><label style="color:white" >Ingrese su nombre: </label></td>
                              <td><input type="text" name="nombre" value=""></td>
                           </tr>
                           <tr>
                              <td><label style="color:white" >Ingrese su edad: </label> </td>
                              <td><input type="text" name="edad" value=""></td>
                           </tr>
                        </table>
                        <br>
                        <input type='submit' value='Aceptar' name='BotonAceptar' />
                     </center>
                  </form>
                  <br>
               </div>
               <div id='Menu'>
               </div>
            </div>
            <div id='Final'></div>
         </div>
      </div>
   </body>
</html>