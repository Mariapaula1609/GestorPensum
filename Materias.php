<?php
class Materia
{
  public $codigo=0;
  public $nombre=null;
  public $semestre=0;
  public $numeroCreditos=0;
  public $estado="repobrado";

function __construct(int $codigo, string $nombre, string $semestre, string $numeroCreditos, string $estado){
    $this->codigo= $codigo;
    $this->nombre=$nombre;
    $this->semestre=$semestre;
    $this->numeroCreditos=$numeroCreditos;
    $this->estado= $estado;
}
public static function createFromArray($arr){
    $materia = new Materia( $arr["codigo"],$arr["nombre"],$arr["semestre"],$arr["numeroCreditos"],$arr["estado"]);
}

/**
     * Get the value of codigo
     */
public function getcodigo(){
    return $this->codigo;
}
/**
 * Set the value of numero
 *
 * @return  self
 */
public function setCodigo($codigo){
     $this->codigo=$codigo;
}

/**
* Get the value of nombre
*/
public function getNombre(){
   return $this->nombre;
}
/**
 * Set the value of nombre
 *
 * @return  self
 */
public function setNombre($nombre){
  $this->nombre=$nombre;
}

public function getSemestre(){
  return $this->semestre;
}

public function setSemestre($semestre){
  $this->semestre=$semestre;
}

}
 ?>
