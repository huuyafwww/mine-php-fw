<?php

/**
 * Register Single SESSION
 *
 * @param string $session_name
 * @param mixed $session_value
 */
function __set_session($session_name,$session_value = true){
    $_SESSION[$session_name] = $session_value;
}

/**
 * Register Multi SESSION
 *
 * @param array $session
 */
function __set_sessions($session){
    foreach($session as $session_name => $session_value){
        $_SESSION[$session_name] = $session_value;
    }
}

/**
 * Get Single SESSION Value
 *
 * @param string $session_name
 * @return mixed
 */
function __get_session($session_name){
    return $_SESSION[$session_name];
}

/**
 * Get ALL SESSION
 *
 * @return array
 */
function __get_sessions(){
    return $_SESSION;
}

/**
 * Get ALL SESSION Name List
 *
 * @return array
 */
function __get_session_names(){
    return array_keys($_SESSION);
}