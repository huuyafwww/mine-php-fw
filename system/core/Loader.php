<?php

/**
 * Load the Base Proccess File
 */
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
    protected function auto_loader(){
        $this->define_loader();
        include_once(VARIABLE_FILE);
        $this->assign_var($auto_assign_mapper);
        $this->class_loader($class_files,$class_mapper);
    }

    /**
     * Load Define Var
     */
    protected function define_loader(){
        include_once(CORE_DIR."Define.php");
    }

    /**
     * Load Class
     * 
     * @param array $class_files
     * @param array $class_mapper
     */
    protected function class_loader($class_files,$class_mapper){
        foreach($class_files as $dir => $files){
            foreach($files as $file){
                include_once($dir.$file);
                if(isset($class_mapper[$file])){
                    $class = $class_mapper[$file];
                    $this->{$class["slug"]} = new $class["class_name"]();
                }
            }
        }
    }

    /**
     * Assign Var in $__var
     *
     * @param array $auto_assign_mapper
     */
    protected function assign_var($auto_assign_mapper){
        foreach($auto_assign_mapper as $var_name => $var){
            $this->__var->$var_name = $var;
        }
    }

    /**
     * Load Helper File
     *
     * @param string|string[] $helpers = Helper name
     * @param bool $this_fw_helper
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

    /**
     * Include View File
     *
     * @param string $view_file_name
     */
    public function view($view_file_name){
        $view_file_path = VIEWS_DIR.$view_file_name;
        if(file_exists($view_file_path)){
            include_once($view_file_path);
        }
    }
}