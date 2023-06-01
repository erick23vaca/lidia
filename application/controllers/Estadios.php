<?php
class Estadios extends CI_Controller{

    function __construct(){

        parent::__construct();
        // cargar modelo
        $this->load->model('Estadio');
    }
    /* fincion que renderisa la vista index */
    public function index(){
        $data['estadios']=$this->Estadio->obtenerTodos();
        $this->load->view('header');
        $this->load->view('estadios/index',$data);
        $this->load->view('footer');


    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('estadios/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoEstadio=array(
        "nombre_est"=>$this->input->post('nombre_est'),
        "capacidad_est"=>$this->input->post('capacidad_est'),
        "establos_est"=>$this->input->post('establos_est'),
        "camerinos_est"=>$this->input->post('camerinos_est'),
      );
      if ($this->Estadio->insertar($datosNuevoEstadio)) {
        redirect('estadios/index');
      }else{
        echo "<h1> ERROR AL INSERTAR </h1>";
      }
    }
    public function eliminar($id_est){
      // echo $id_ins;
      if ($this->Estadio->borrar($id_est)) {
        redirect('estadios/index');
      }else{
        echo "ERROR AL BORRAR :'(";
      }
    }
}//cierre de la clase




?>
