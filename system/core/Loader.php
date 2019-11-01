<?php

class __Loader{

    public $__var;

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
        $this->var_loader();
    }

    /**
     * Load Define Var
     */
    public function var_loader(){
        include_once(CORE_DIR."Define.php");
        include_once(VARIABLE_FILE);
        $this->assign_var($auto_assign_mapper);
        $this->class_loader($auto_load_class_files);
    }

    /**
     * Load Class
     * 
     * @param array $auto_load_class_files
     */
    public function class_loader($auto_load_class_files){
        foreach($auto_load_class_files as $dir => $files){
            foreach($files as $file){
                include_once($dir.$file);
            }
        }
    }

    /**
     * Assign Var in $__var
     *
     * @param array $auto_assign_mapper
     */
    public function assign_var($auto_assign_mapper){
        foreach($auto_assign_mapper as $var_name => $var){
            $this->__var->$var_name = $var;
        }
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
            $target_file_path = HELPER_DIR.$helper_path;
            if(file_exists($target_file_path)){
                include_once($target_file_path);
            }
        }
    }
}