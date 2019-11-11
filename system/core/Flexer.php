<?php

/****Init-Settings Start*/
error_reporting(-1);
ini_set('display_errors',1);
error_reporting(E_ALL);
/****Init-Settings End*/

include_once(CORE_DIR."Loader.php");
$__load = new __Loader(false);

include_once(USER_DEFINE_FILE);

include_once(USER_INIT_FILE);

/*** 以下デバッグ ***/
// $Loader->helper("validate",true);
// $__load->action->add_hook("htmlspecialchars","var_dump");
// $__load->test->debugger($__load->__var->config_files);
// $__load->action->do("htmlspecialchars","<h1 class='aaa'>!=~あああ</_h1>");
// $__load->test->debugger($_SERVER);
// $__load->test->debugger(get_included_files());