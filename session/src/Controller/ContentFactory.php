<?php

namespace Drupal\crain_session\Controller;

/**
 *
 */
class ContentFactory {

  protected $user;

  // Determine which model to manufacture, and instantiate
  //  the concrete classes that make each model.
  public function makeUserwithRole($role=null)
  {
    if (strtolower($role) == 'brandadmin') {
      return $this->user = new UserRoleAuthenticated();
    }
    else {
      return $this->user = new UserRoleOther();
    }
  }
}
