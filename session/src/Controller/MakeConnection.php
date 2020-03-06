<?php

namespace Drupal\crain_session\Controller;


/**
 * Class for controller.
 */
class MakeConnection {
  public static function makeConnection() {
    $con = GetConnection::get_instance();
    $new = $con->getConnection();
    $new2 = $con->getConnection();
    ksm($new);
    ksm($new2);
    return $new;
  }
}
