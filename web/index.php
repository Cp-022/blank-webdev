<?php
  session_start();

  // Include MVC model base classes
  include_once '../model/Model.class.php';
  include_once '../view/View.class.php';
  include_once '../controller/Controller.class.php';

  // Metadata for quick access
  $meta = json_decode(file_get_contents('../project.json'));

  // Initialize Twig
  include_once '../vendor/twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();

  $twigloader = new Twig_Loader_Filesystem('../template');
  $twig = new Twig_Environment($twigloader, array(
    'cache' => '../cache/twig/compilation_cache'
  ));

  // Initialize MVC
  $model = new Model($meta);
  $controller = new Controller($model);
  $view = new View($controller, $model);


  if (isset($_GET['r']) && !empty($_GET['r'])) {
    if(function_exists($controller->{$_GET['r']})) {
      $controller->{$_GET['r']}();
    } else {
      echo $view->index();
    }
  } else {
    echo $view->index();
  }
?>
