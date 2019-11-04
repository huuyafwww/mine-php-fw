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
 * Get File List
 *
 * @param string $dir
 * @param string $extension
 * @return array
 */
function __get_file_list($dir,$extension = "*"){
    return glob(rtrim($dir,"/")."/".$extension);
}

/**
 * Get ALL FILE PATH from $dir
 *
 * @param string $dir
 * @return array
 */
function __get_all_file_list($dir,$extension = "*"){
    $files = __get_file_list($dir,$extension);
    $list = [];
    foreach($files as $file){
        if(is_file($file)){
            $list[] = $file;
        }
        if(is_dir($file)){
            $list = array_merge($list, __get_all_file_list($file));
        }
    }
    return $list;
}

/**
 * Delete Files
 *
 * @param string|array $dirs
 * @param string $extension
 */
function __delete_files($dirs,$extension = "*"){
    if(!is_array($dirs)){
        $files = __get_file_list($dirs,$extension);
        foreach($files as $file){
            unlink($file);
        }
    }else{
        foreach($dirs as $dir){
            $files = __get_file_list($dir,$extension);
            foreach($files as $file){
                unlink($file);
            }
        }
    }
}