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
      <link href="styles.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id='Fondo'>
         <div id='FondoSuperior'>
            <div id='Encabezado'></div>
            <div >
               <div id='Contenido'>
               <br>
                  <?php
                     $nombre = $_POST['nombre'];
                     echo 'Nombre: ';  echo $nombre;
                     ?>
                     <br><br>
                  <?php
                     $edad = $_POST['edad'];
                     echo 'Edad: '; echo $edad;
                     ?>
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