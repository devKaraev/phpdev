<?php 
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/config/Config.php');
include_once (ROOT.'/components/pagination.php');
include_once (ROOT.'/components/paginationBooks.php');

$router = new Router();
$router->run();
