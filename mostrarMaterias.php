<?php
//inclye el archivo php porque tiene ula clase
include 'Materias.php';
// Read JSON file
//carga en $json lo que tiene el archivo carts.json
$json = file_get_contents('pensum.json');
//Decode JSON
//crea un carta de a pair de los datos del json
//es es un parce//
// un arreglo de cartas!
$materias = json_decode($json,true);
//crea una carta apatir del vecot de cartaSnippet
//$c = Materia::createFromArray($materia[0]);
//si existe el objeto carta enviado por get
if(isset($_GET["codigo"]))
{    // el codigo de la materia es n(?)
    $codigo=$_GET["codigo"];
    $nombreArchivo=$codigo.".json";
    if(file_exists($nombreArchivo)){
    //  echo  "lo encontro!";
    }else{
       if(copy("pensum.json",$nombreArchivo)){
      //   echo "archivo creado";
       }else {
        // echo "Ah ocurrido un error en el sistema, contacte al adminitrador";
       }
       echo file_get_contents($nombreArchivo);
    }
}
else
{
    //echo "Error, número de Materia no especificado";
}
//convierte la carta en json

?>
