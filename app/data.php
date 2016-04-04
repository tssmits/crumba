<?php

namespace crumba;

require_once __DIR__ . '/../vendor/parsecsv/php-parsecsv/parsecsv.lib.php';

define('DATA_DIR', __DIR__ . '/../data');
define('EXAMPLE_DIR', __DIR__ . '/../example');

class Data {
  public function __construct() {

  }

  public function example() {
    $csv = new \parseCSV(EXAMPLE_DIR . '/log-2016-04.csv');
    return $csv->data();
  }
}
