<?php

namespace App;

class Route{
  public function initRoutes() {

    $Routes['home'] = array(
      'route' => '/',
      'controller' => 'indexController',
      'action' => 'index'
    );

    $Routes['sobreNos'] = array(
      'route' => '/sobrenos',
      'controller' => 'indexController',
      'action' => 'SobreNos'
    );

  }

  public function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}



?>