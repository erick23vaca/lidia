<?php
class Toro extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function insertar($datos){

    return $this->db->insert("toro", $datos);

  }
  function obtenerTodos(){
    $listadoToro=$this->db->get("toro");
    if ($listadoToro->num_rows()>0) {
      return $listadoToro->result();
    }else{
      return false;
    }
  }
  function borrar($id_toro){
    $this->db->where("id_toro",$id_toro);
    return $this->db->delete("toro");
  }
}//cierre de la clase




 ?>
