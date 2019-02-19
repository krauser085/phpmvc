<?php
class Router {

  protected $routes = [];
  protected $params = [];

  /**
   * add new route to router object
   * @return void
   */
  public function add($route, $params) {
    $this->routes[$route] = $params;
  }

  /**
   * return true if passed url is founed in the router
   * @return bool
   */
  public function match($url) {
    foreach($this->routes as $route => $params) {
      if(strtolower($url) == $route) {
        $this->params = $params;
        return true;
      }
    }
    return false;
  }

  /**
   * Get the value of routes
   * @return Array routes
   */
  public function getRoutes() {
    return $this->routes;
  }

  /**
   * Get the value of params
   * @return Array params
   */
  public function getParams() {
    return $this->params;
  }
}