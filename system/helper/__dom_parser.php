<?php

/**
 * HTML String to DOM XPATH Object
 *
 * @param string $html
 * @return object
 */
function __html_to_xpath($html){
    $html = mb_convert_encoding($html,'HTML-ENTITIES','auto');
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    return $xpath;
}