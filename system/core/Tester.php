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
}