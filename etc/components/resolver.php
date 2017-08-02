<?php

return [
    'class' => '\Micro\Web\HMvcResolver',
    'arguments' => [
        'request' => '@request',
        'appDir' => __DIR__ . '/../../src'
    ]
];