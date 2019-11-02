# 連想配列の設計

## core

### Action_Hook

```
$hooks = [
    $hook_name => [
        [
            "action_name" => $action_name,
        ]
    ],,,
];
```

- $hook_name => フックを行うメソッド名
- $action_name => アクションを行うメソッド名