<?php
  class home extends controllers{
    public function __construct(){
      parent::__construct();
    }
    public function home($params){
      // echo "Controlador home";
      $this->views->getView($this,"home");
    }

    public function datos($params){
      echo "Datos: ".$params;
    }

    public function registros($params){
      $registros = $this->model->getRegistro($params);
      echo $registros;
    }
  }
?>