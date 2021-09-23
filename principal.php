<!DOCTYPE html>
<!--
   To change this license header, choose License Headers in Project Properties.
   To change this template file, choose Tools | Templates
   and open the template in the editor.
   -->
<html>
   <head>
      <meta charset="UTF-8">
      <title>Datos capturados</title>
      <link href="css/styles.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id='Fondo'>
         <div id='FondoSuperior'>
            <div id='Encabezado'></div>
            <div >
               <div id='Contenido'>
                  <center>
                  <table>
                     <tr>
                        <td><label style="color:white" >Nombre: </label></td>
                        <td style="color:white"><?php $nombre = $_POST['nombre']; echo $nombre;?></td>
                     </tr>
                     <tr>
                        <td><label style="color:white" >Edad: </label> </td>
                        <td style="color:white"><?php $edad = $_POST['edad']; echo $edad;?></td>
                     </tr>
                  </table>
                  <center>
               </div>
               <br>
               <div id='Menu'>
               </div>
            </div>
            <div id='Final'></div>
         </div>
      </div>
   </body>
</html>