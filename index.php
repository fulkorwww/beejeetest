<?php

define('ROOTPATH', __DIR__);

require ROOTPATH.DIRECTORY_SEPARATOR.'App'.DIRECTORY_SEPARATOR.'App.php';

App::init();
App::$kernel->launch();

?>