<?php
/**
 * @description: MVC View blank slate by MegaXLR
 * @author: MegaXLR
 *
 */
class View {

  // Controller and Model DO NOT CHANGE
  private $model;
  private $controller;

  public function index() {
    return $this->model->index();
  }


  public function __construct($controller,$model) {
    $this->controller = $controller;
    $this->model = $model;
  }
}

 ?>
