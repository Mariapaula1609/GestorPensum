<?php
//inclye el archivo php porque tiene ula clase
include 'Materias.php';
$json = file_get_contents('persistencia/pensum.json');
$materias = json_decode($json,true);
if(isset($_GET["codigo"]))
{    // el codigo de la materia es n(?)
    $codigo=$_GET["codigo"];
    $nombreArchivo="persistencia/".$codigo.".json";
    if(file_exists($nombreArchivo)){
    //  echo  "lo encontro!";
    }else{
       if(copy("persistencia/pensum.json",$nombreArchivo)){
      //   echo "archivo creado";
       }else {
        // echo "Ah ocurrido un error en el sistema, contacte al adminitrador";
       }
    }
    echo file_get_contents($nombreArchivo);
}
else
{
    //echo "Error, número de Materia no especificado";
}
//convierte la carta en json

?>
