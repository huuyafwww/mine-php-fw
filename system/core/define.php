<?php

define("NOW_FILE",basename($_SERVER["PHP_SELF"]));
define("NOW_PAGE",basename($_SERVER["PHP_SELF"],".php"));
define("NOW_TIME",$_SERVER['REQUEST_TIME']);

define("PREFIX","__");

define("HELPER_DIR",SYSTEM_DIR."helper".DIR_SEPARATOR);
define("APP_DIR",ROOT_DIR."app".DIR_SEPARATOR);
define("VIEWS_DIR",APP_DIR."views".DIR_SEPARATOR);

define("VARIABLE_FILE",CORE_DIR."Variable.php");