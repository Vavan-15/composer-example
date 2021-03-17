<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

/**
 * Created by
 * @Author:Vladimir <wladimir083@gmail.com>
 */

require_once "vendor/autoload.php";

use apelsin\parser\Parser;

$parser = new Parser();
$parser->process();



 