<?php

namespace Drupal\crain_session\Controller;

/**
 * Class for controller.
 */
class GetContent {
  protected $users = array();
  protected $content;

  // First, create the carFactory object in the constructor.
  public function __construct()
  {
    $this->content = new ContentFactory();
  }

  public function getContent($role=null)
  {
    // Use the make() method from the carFactory.
    $content = $this->content->makeUserwithRole($role);
    $this->users = $content->getUserNameWithRole();

    return [
      '#markup' => $this->users,
    ];

  }

  public function getCarOrders()
  {
    return $this->users;
  }
}
