<?php
class Torero extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function insertar($datos){

    return $this->db->insert("torero", $datos);

  }
  function obtenerTodos(){
    $listadoTorero=$this->db->get("torero");
    if ($listadoTorero->num_rows()>0) {
      return $listadoTorero->result();
    }else{
      return false;
    }
  }
  function borrar($id_tor){
    $this->db->where("id_tor",$id_tor);
    return $this->db->delete("torero");
  }
}//cierre de la clase




 ?>
