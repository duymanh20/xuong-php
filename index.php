<?php 
// Require tất cả các file có trong dự án

// Require file có trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';

// Require file có trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);
GetUser();
echo "<br>";
HomeIndex();
echo "<br>";
AbcIndex();
// điều hướng



require_once './commons/disconnect-db.php';