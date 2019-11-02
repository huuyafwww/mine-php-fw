<?php

$base_dir_mapper = [
    "root" => ROOT_DIR,
    "system" => SYSTEM_DIR,
    "core" => CORE_DIR,
    "helper" => HELPER_DIR
];

$class_files = [
    CORE_DIR => [
        "Tester.php",
        "Action_Hook.php"
    ]
];

$class_mapper = [
    "Tester.php" => [
        "slug" => "test",
        "class_name" => "__Tester"
    ],
    "Action_Hook.php" => [
        "slug" => "action",
        "class_name" => "__Action_Hook"
    ]
];

$auto_assign_mapper = [
    "dir_map" => $base_dir_mapper
];