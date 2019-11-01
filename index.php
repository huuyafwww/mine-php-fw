<?php

define("DIR_SEPARATOR","/");

define("ROOT_DIR",__DIR__.DIR_SEPARATOR);

$system_dir_name  = "system";

$core_dir_name = "core";

define("SYSTEM_DIR",ROOT_DIR.$system_dir_name.DIR_SEPARATOR);

define("CORE_DIR",SYSTEM_DIR.$core_dir_name.DIR_SEPARATOR);

include_once(CORE_DIR."Loader.php");

$Loader = new __Loader();

/*** 以下デバッグ ***/

$Loader->helper("validate",true);

$Tester = new __Tester();
$Tester->debugger($Loader->__var);