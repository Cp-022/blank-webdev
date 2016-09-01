<?php
/**
 * @description: MVC Model blank slate by MegaXLR
 * @author: MegaXLR
 *
 */
class Model {

  public function index() {
    global $twig;
    $template = $twig->loadTemplate('default.html.twig');
    return $template->render(array('title'=>'Home' . ' - ' . $this->meta->appname));
  }

  function __construct($meta) {
    $this->meta = $meta;
  }
}

 ?>
