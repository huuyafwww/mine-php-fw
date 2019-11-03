<?php

/**
 * Saving File
 *
 * @param string $file
 * @param mixed $save_data
 * @param bool $append
 * @return bool
 */
function __save_file($file,$data,$append = true){
    $flags = ($append ? FILE_APPEND | LOCK_EX : LOCK_EX);
    return file_put_contents($file,$data,$flags) !== false;
}

/**
 * Get ALL FILE PATH from $dir
 *
 * @param string $dir
 * @return array
 */
function __get_file_list($dir){
    $files = glob(rtrim($dir,'/').'/*');
    $list = [];
    foreach($files as $file){
        if(is_file($file)){
            $list[] = $file;
        }
        if(is_dir($file)){
            $list = array_merge($list, __get_file_list($file));
        }
    }
    return $list;
}