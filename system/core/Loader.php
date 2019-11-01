<?php

class __Loader{

    /**
     * Init Loader
     */
    public function __construct(){
        $this->auto_loader();
    }

    /**
     * Auto Loader
     */
    public function auto_loader(){
        $this->vars();
    }

    /**
     * Load Define Var
     */
    public function vars(){
        include_once(CORE_DIR."/define.php");
    }

    /**
     * Load Helper File
     *
     * @param string|string[] $helpers = Helper name
     * @param bool 
     * @return object
     */
    public function helper($helpers,$this_fw_helper = false){
        is_array($helpers) || $helpers = [$helpers];
        foreach($helpers as $helper){
            $helper_path = ($this_fw_helper ? PREFIX : "").$helper.".php";
            include_once(HELPER_DIR.$helper_path);
        }
    }
}