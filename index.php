<?php
  // require archivos externos
  require_once('config/config.php');

  $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
  $arraUrl = explode('/', $url);
  $controller = $arraUrl[0];
  $method = $arraUrl[0];
  $params = "";

  if(!empty($arraUrl[1])){
    if($arraUrl[1] != ""){
      $method = $arraUrl[1];
    }
  }

  if(!empty($arraUrl[2])){
    if($arraUrl[2] != ""){
      for ($i=2; $i < count($arraUrl); $i++) { 
        $params .= $arraUrl[$i].',';
      }
      $params = trim($params, ',');
    }
  }

  spl_autoload_register(function($class){
    if(file_exists(LIBS.'core/'.$class.".php")){
      require_once(LIBS.'core/'.$class.".php");
    }
  });

  // load

  $controllerFile = "controllers/".$controller.".php";

  if(file_exists($controllerFile)){
    require_once($controllerFile);
    $controller = new $controller();
    if(method_exists($controller, $method)){
      $controller->{$method}($params);
    }else{
      // echo " No metodo";
      require_once("controllers/error.php");
    }
  }else{
    // echo "No controllers";
    require_once("controllers/error.php");
  }


  // echo "</br>";
  // echo "controlador: ".$controller;
  // echo "</br>";
  // echo "method:" . $method;
  // echo "</br>";
  // echo "params:" . $params;
?>