<?php

/**
 * Judge the Ajax Request
 *
 * @return bool
 */
function __is_ajax(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest";
}