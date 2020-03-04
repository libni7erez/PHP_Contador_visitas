<?php
//#######################EN ESTE CODIGO LO QUE HACEMOS EN GENERAR UN CONTADOR
//#######################DE vISITAS A X PÁGINA.


//En esta parte nosotros agregamos nuestro archivo
//Que llevara el control de la visitas. cantidadVisitas.txt
$archivo = fopen ('cantidadVisitas.txt', 'r+');

$can_visitas = fgets($archivo); //Lectura de la página visitada

if($can_visitas ==""){
    $can_visitas = 0;
    
}
$can_visitas++;

fseek($archivo,0);//Con fseek conseguimos ir al prinipio
fputs($archivo,$can_visitas); // Con fputs, mostramos el numero de veces de visi..

fclose($archivo); //Cerramos el archivo
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer_PHP</title>
    <style type="text/css">
    *{
       margin:0;
       padding:0;
     }
     body{
         font-family:Gotham, "Helvetica Neue",Helvetica, Arial, sans-serif;
     }
     
     .contenedor{
         width: 400px;
         margin:50px 0px;
         padding: 1em;
         border:3px solid red;
         background: white;
         border-radius:2em;
         display: inline-block;
         
     }
     .contenedor p{
         text-align: center;
         font-size:2em;
         
     }
     .contenedor span{
         font-size:5em;
         font-weight:bold;
         color: red;   
     }
    
     
     .imagen {
        float: left;
     }
     .imagen img{
         width: 300px;
         margin:20px auto 20px 20px;
         
     }
     .general{
         text-align: center;
     }
        
    </style>
    
    </head>
    <body>
        <div class="general"> 
        <div class="contenedor">
        <p>  Número de Visitas <span><?php echo $can_visitas ?></span></p>
        </div>
        <div class="imagen">
            <img src="niño.png"/>
        </div>
        </div>
    </body>
</html>
