<?php

$base_dir_mapper = [
    "root" => ROOT_DIR,
    "system" => SYSTEM_DIR,
    "core" => CORE_DIR,
    "helper" => HELPER_DIR
];

$class_files = [
    CORE_DIR => [
        "Tester.php"
    ]
];

$class_mapper = [
    "Tester.php" => [
        "slug" => "test",
        "class_name" => "__Tester"
    ]
];

$auto_assign_mapper = [
    "dir_map" => $base_dir_mapper
];