<?php

define("DIR_SEPARATOR","/");

define("ROOT_DIR",__DIR__.DIR_SEPARATOR);

$system_dir_name  = "system";

$core_dir_name = "core";

define("SYSTEM_DIR",ROOT_DIR.$system_dir_name.DIR_SEPARATOR);

define("CORE_DIR",SYSTEM_DIR.$core_dir_name.DIR_SEPARATOR);

include_once(CORE_DIR."Loader.php");

$__load = new __Loader();

include_once(USER_DEFINE_FILE);

include_once(USER_INIT_FILE);

/*** 以下デバッグ ***/
// $Loader->helper("validate",true);
// $__load->action->add_hook("htmlspecialchars","var_dump");
// $__load->test->debugger($__load->__var->config_files);
// $__load->action->do("htmlspecialchars","<h1 class='aaa'>!=~あああ</_h1>");
// $__load->test->debugger($_SERVER);
