<?php
require 'Kayes.php';
require 'Tasnia.php';

use App\Kayes\Dhaka as dhaka1;
use App\Tasnia\Dhaka as dhaka2;

echo dhaka2::hello;

class Hello {
  public function tanim() {
    var_dump('hello');
  }
}

class World extends Hello {
  public function tanim() {
    var_dump('world');
  }
}

$obj = new World();

$obj->tanim();