<?php

namespace Drupal\crain_session\Controller;


/**
 * Class for controller.
 */
class GetConnection {

  private static $instance = NULL;
  private $mem = NULL;

  // The constructor is private
  // to prevent initiation with outer code.
  private function __construct()
  {
    $this->mem = [
      '#markup' => spl_object_hash($this),
    ];
    // The expensive process (e.g.,db connection) goes here.
  }

  public function getConnection() {
    return $this->mem;
  }


  public static function get_instance()
    {
      if(empty(self::$instance)) {
        self::$instance = new GetConnection();
      }
      return self::$instance;
    }

}
