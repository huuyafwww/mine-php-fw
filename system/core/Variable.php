<?php

$base_dir_mapper = [
    "root" => ROOT_DIR,
    "system" => SYSTEM_DIR,
    "core" => CORE_DIR,
    "helper" => HELPER_DIR
];

$system_file_list = [
    CORE_DIR => [
        "Common.php",
        "Tester.php",
        "Action_Hook.php"
    ]
];

$helper_file_list = [
    HELPER_DIR => [
        "__array.php",
        "__dom_parser.php",
        "__file.php",
        "__get_boolean.php",
        "__session.php",
        "__validate.php"
    ]
];

$class_mapper = [
    [
        "slug" => "test",
        "class_name" => "__Tester"
    ],
    [
        "slug" => "action",
        "class_name" => "__Action_Hook"
    ]
];

$auto_assign_mapper = [
    "dir_map" => $base_dir_mapper
];