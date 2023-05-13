<?php

return [

    'telegram' => [
        'api_token' => '6055537452:AAGEX7C1jQ0hZBKLMJMbDUFKs8tFH52jb8k',
        'bot_username' => 'GempaSistem',
        'channel_username' => '@GempaSistem_bot', // Channel username to send message
        'channel_signature' => 'Hello zzzzzzzzzzzzzzzzzzzzzzzz', // This will be assigned in the footer of message
        'proxy' => false,   // True => Proxy is On | False => Proxy Off
    ],

    'twitter' => [
        'consurmer_key' => '',
        'consurmer_secret' => '',
        'access_token' => '',
        'access_token_secret' => ''
    ],

    'facebook' => [
        'app_id' => '',
        'app_secret' => '',
        'default_graph_version' => '',
        'page_access_token' => ''
    ],

    // Set Proxy for Servers that can not Access Social Networks due to Sanctions or ...
    'proxy' => [
        'type' => '',   // 7 for Socks5
        'hostname' => '', // localhost
        'port' => '' , // 9050
        'username' => '', // Optional
        'password' => '', // Optional
    ]
];
