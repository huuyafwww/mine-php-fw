<?php

/**
 * array_rand Used Mersenne Twister RNG
 *
 * @param [type] $array
 * @return mixed
 */
function __array_rand($array){
    $array_count = count($array) - 1;
    $key = mt_rand(0,$array_count);
    return $array[$key];
}