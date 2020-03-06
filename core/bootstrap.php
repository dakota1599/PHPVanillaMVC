<?php

//Models
require 'models/Model.php';

//Controllers
require 'controllers/Controller.php';

//Core
require 'routes.php';
require 'router.php';
require 'request.php';
require 'file.php';

$router = new Router($routes);
?>