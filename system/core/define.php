<?php

define("TOKEN_LENGTH",16);
define("TOKEN",bin2hex(openssl_random_pseudo_bytes(TOKEN_LENGTH)));

define("NOW_FILE",basename($_SERVER["PHP_SELF"]));
define("NOW_PAGE",basename($_SERVER["PHP_SELF"],".php"));
define("NOW_TIME",$_SERVER['REQUEST_TIME']);

define("PREFIX","__");

define("HELPER_DIR",SYSTEM_DIR."helper".DIR_SEPARATOR);
define("APP_DIR",ROOT_DIR."app".DIR_SEPARATOR);
define("VIEWS_DIR",APP_DIR."views".DIR_SEPARATOR);
define("CONFIG_DIR",APP_DIR."config".DIR_SEPARATOR);
define("USER_CORE_DIR",APP_DIR."core".DIR_SEPARATOR);


define("VARIABLE_FILE",CORE_DIR."Variable.php");
define("USER_DEFINE_FILE",USER_CORE_DIR."define.php");