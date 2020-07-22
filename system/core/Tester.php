<?php

class __Tester{
    
    /**
     * Debug Var
     *
     * @param mixed $var
     * @param bool $dump
     */
    public function debugger($var,$dump = false){
        echo "<pre>";
        $dump ? var_dump($var) : print_r($var);
        echo "</pre>";
    }

    /**
     * Debug The Include Files
     */
    public function __inc_files(){
        $this->debugger(get_included_files());
    }
    
    /**
     * Debug The Defined Constants
     */
    public function __def_consts(){
        $this->debugger(get_defined_constants());
    }

    /**
     * Debug The Defined Functions
     */
    public function __def_funcs(){
        $this->debugger(get_defined_functions());
    }

    /**
     * Debug The Defined Variable
     */
    public function __def_vars(){
        $this->debugger(get_defined_vars());
    }
    
}