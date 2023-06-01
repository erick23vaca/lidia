<?php
class Toreros extends CI_Controller{

    function __construct(){

        parent::__construct();
        // cargar modelo
        $this->load->model('Torero');
    }
    /* fincion que renderisa la vista index */
    public function index(){
        $data['toreros']=$this->Torero->obtenerTodos();
        $this->load->view('header');
        $this->load->view('toreros/index',$data);
        $this->load->view('footer');


    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('toreros/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoTorero=array(
        "nombre_tor"=>$this->input->post('nombre_tor'),
        "apellido_tor"=>$this->input->post('apellido_tor'),
        "ciudad_tor"=>$this->input->post('ciudad_tor'),
        "anos_tor"=>$this->input->post('anos_tor'),
      );
      if ($this->Torero->insertar($datosNuevoTorero)) {
        redirect('toreros/index');
      }else{
        echo "<h1> ERROR AL INSERTAR </h1>";
      }
    }
    public function eliminar($id_tor){
      // echo $id_ins;
      if ($this->Torero->borrar($id_tor)) {
        redirect('toreros/index');
      }else{
        echo "ERROR AL BORRAR :'(";
      }
    }
}//cierre de la clase




?>
