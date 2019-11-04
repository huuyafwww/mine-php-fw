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
        set_error_handler("error_handler",E_ALL);
    }

    /**
     * Auto Loader
     */
    protected function auto_loader(){
        $this->define_loader();
        include_once(VARIABLE_FILE);
        $this->files_loader($system_file_list);
        $this->assign_class($class_mapper);
        $this->assign_var($auto_assign_mapper);
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
     */
    protected function files_loader($file_list_by_directory){
        foreach($file_list_by_directory as $dir => $files){
            foreach($files as $file){
                if(file_exists($dir.$file)) include_once($dir.$file);
            }
        }
    }

    /**
     * Assign Class in $this->slug
     * 
     * @param array $class_mapper
     */
    protected function assign_class($class_mapper){
        foreach($class_mapper as $class){
            $this->{$class["slug"]} = new $class["class_name"]();
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

    /**
     * Create HTML in Head
     *
     * @return string
     */
    public function get_header(){
        include_once(VIEW_HEAD_FILE);
        $heads = "";
        foreach($head_tags as $tag_name => $tag_info){
            $index = 0;
            foreach($tag_info["list"] as $tag){
                if($index > 0) $heads .= "\t\t";
                $heads .= "<".$tag_name;
                foreach($tag as $attr => $value){
                    $heads .= " ".$attr."=\"".$value."\"";
                }
                $heads .= $tag_info["close"] ? "</".$tag_name.">\n" : ">\n";
                $index++;
            }
        }
        echo $heads;
    }
}