<?php

/**
 * All of the Arguments do Sanitize
 *
 * @param string|array $stringer
 * @return string|array
 */
function __h($stringer){
    if(is_array($stringer) || !$stringer = htmlspecialchars($stringer)){
        foreach($stringer as &$string){
            $string = htmlspecialchars($string);
        }
    }
    return $stringer;
}


/**
 * Sanitize everything in HTTP methods POST and GET
 *
 * @param string $METHOD_NAME
 */
function __h_method($METHOD_NAME){
    foreach($$METHOD_NAME as $key => $value){
        $$METHOD_NAME[$key] = htmlspecialchars($value);
    }
}