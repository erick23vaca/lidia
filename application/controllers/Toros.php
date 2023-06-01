<?php
class Toros extends CI_Controller{

    function __construct(){

        parent::__construct();
        // cargar modelo
        $this->load->model('Toro');
    }
    /* fincion que renderisa la vista index */
    public function index(){
        $data['toros']=$this->Toro->obtenerTodos();
        $this->load->view('header');
        $this->load->view('toros/index',$data);
        $this->load->view('footer');


    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('toros/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoToro=array(
        "nombre_toro"=>$this->input->post('nombre_toro'),
        "raza_toro"=>$this->input->post('raza_toro'),
        "peso_toro"=>$this->input->post('peso_toro'),
        "acienda_toro"=>$this->input->post('acienda_toro'),
      );
      if ($this->Toro->insertar($datosNuevoToro)) {
        redirect('toros/index');
      }else{
        echo "<h1> ERROR AL INSERTAR </h1>";
      }
    }
    public function eliminar($id_toro){
      // echo $id_ins;
      if ($this->Toro->borrar($id_toro)) {
        redirect('toros/index');
      }else{
        echo "ERROR AL BORRAR :'(";
      }
    }
}//cierre de la clase




?>
