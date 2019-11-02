<?php

/**
 * Coordination of Action And Hook
 */
class __Action_Hook{

    protected $hooks = [];

    /**
     * Get the All Hooks
     *
     * @return array
     */
    public function get_all_hooks(){
        return $this->hooks;
    }

    /**
     * Any Registered Hook Info Returns
     *
     * @param string $hook_name
     * @return array|bool
     */
    public function get_hook($hook_name){
        return $this->hook_exists($hook_name) ? $this->hooks[$hook_name] : false;
    }

    /**
     * Hook Exists Judge
     *
     * @param string $hook_name
     * @return bool
     */
    protected function hook_exists($hook_name){
        return isset($this->hooks[$hook_name]);
    }

    /**
     * Register Processing to Queue
     *
     * @param string $hook_name
     * @param string $action_name
     * @param array $argv
     */
    public function add_hook($hook_name,$action_name){
        $this->hooks[$hook_name][] = [
            "name" => $action_name,
        ];
    }

    /**
     * Execute Action Registered in Hook
     *
     * @param string $hook_name
     */
    public function do($hook_name,$argv =  NULL){
        echo "<pre>";
        print_r($this->get_all_hooks());
        print_r($this->get_hook($hook_name));
        echo "</pre>";
        $argv = $hook_name($argv);
        foreach($this->get_hook($hook_name) as $action){
            $action["name"]($argv);
        }
    }

}