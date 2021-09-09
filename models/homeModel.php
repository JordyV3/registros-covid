<?php
  class homeModel{
    public function __construct(){
      // echo "Mensaje del modelo ";
    }
    public function getRegistro($params){
      return "Datos del registro No. ".$params;
    }
  }
?>