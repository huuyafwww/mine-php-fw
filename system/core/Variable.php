<?php

$base_dir_mapper = [
    "root" => ROOT_DIR,
    "system" => SYSTEM_DIR,
    "core" => CORE_DIR,
    "helper" => HELPER_DIR
];

$auto_load_class_files = [
    CORE_DIR => [
        "Tester.php"
    ]
];

$auto_assign_mapper = [
    "dir_map" => $base_dir_mapper
];