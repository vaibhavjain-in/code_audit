<?php

/**
 * @file Robofile for Code Audit.
 */

use Robo\Tasks;

class RoboFile extends Tasks {
  function hello($world)
  {
    $this->say("Hello, $world");
  }
}

