<?php
//inclye el archivo php porque tiene ula clase
include 'Materias.php';

//print_r($_GET);
if(isset($_GET["codigo"]))
{    // el codigo de la materia es n(?)
    //echo "obteniendp masterias de: ".$_GET["codigo"];
    $codigo=$_GET["codigo"];
    $nombreArchivo="persistencia/".$codigo.".json";
    if(file_exists($nombreArchivo)){
      //echo "exite el archivo";
    }else{
       if(copy("persistencia/pensum.json",$nombreArchivo)){
         //echo "mierda";
       }else {
         //echo "se creo el archivo ".$nombreArchivo;
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
