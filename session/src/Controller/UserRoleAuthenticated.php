<?php

namespace Drupal\crain_session\Controller;

use Drupal\user\Entity\User;

/**
 *
 *
 */
class UserRoleAuthenticated {
  public function getUserNameWithRole() {
    $user = User::create();
    $user->setPassword("password");
    $user->enforceIsNew();
    $user->setEmail("safedia@brijesh.com");
    $user->setUsername("brijesh_safedia");
    $user->addRole('brand_admin');

    $role_name = $user->getEmail() . '_' . $user->getUsername();
    return $role_name;
  }
}
