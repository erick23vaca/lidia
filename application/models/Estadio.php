<?php
class Estadio extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function insertar($datos){

    return $this->db->insert("estadio", $datos);

  }
  function obtenerTodos(){
    $listadoEstadio=$this->db->get("estadio");
    if ($listadoEstadio->num_rows()>0) {
      return $listadoEstadio->result();
    }else{
      return false;
    }
  }
  function borrar($id_est){
    $this->db->where("id_est",$id_est);
    return $this->db->delete("estadio");
  }
}//cierre de la clase




 ?>
