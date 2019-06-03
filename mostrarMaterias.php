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
if(isset($_GET["codigoEstado"])){
  $codigoMateria=$_GET["codigoEstado"];
  //Sacar el archivo json correspondiente
  $nombreArchivo = "persistencia/".$codigo.".json";
  $json = file_get_contents($nombreArchivo);
  $materias = json_decode($json,true);
  //Buscar la respectiva materia
  foreach ($materias as $materia) {
    if($materia['codMateria'] == $codigoMateria){
      #Modifico el estado de la materias
      $estado = $materia['estado'];
      if($estado == TRUE){
        $materia['estado'] = FALSE;
      }else{
        $materia['estado'] = TRUE;
      }
    }
  }
  json_encode($materias);
  file_put_contents($nombreArchivo,$materias);
}

?>
