<?php /* MICRO TESTER */

function dvd($mix = null) { die(var_dump($mix)); }

require __DIR__ . '/../src/__bootstrap.php';

$app = new \Micro\Web\Application(new \App\Kernel('devel', true));

/** @var \Zend\Diactoros\Response $response */
$response = $app->handle(
    \Zend\Diactoros\ServerRequestFactory::fromGlobals( $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES )
);

$app->terminate($response);




// MAIL
/*
$transport = new \Micro\Mail\Transport\SmtpTransport;
$mail = new \Micro\Mail\Mail;
$mail->setTo('asdasdasd@sdf.sdf');

(new \Micro\Mail\Transport\SmtpTransport)->send($mail);
*/

// QUEUE
/*
$rabbitmq = new \Micro\Queue\Adapter\RabbitMQ\RabbitMQ;
$queueRabbitMq = \Micro\Queue\Queue(
    [
        'server1'=> [
            // 'class' => 'Micro\Queue\Adapter\RabbitMQ\RabbitMQ'
            'ip'=>'192.168.5.5',
            'user'=>'name',
            'pass'=>'word'
        ]
    ],
    [
        'user.*'=>['async'=>['server1'],'server1'],
        'file.*'=>['sync'=>['server1']],
    ],
    ['server1' => $rabbitmq]
);
$queueRabbitMq->sync('user.profile', ['id' => 5], 1); // вытащить профиль откуда либо
$queueRabbitMq->async('file.upload', ['url' => '...'], 5); // скачать файл, с урлы
$queueRabbitMq->stream('user.donate', ['amount' => 5], 1); // ользователь внёс 5
*/

// CACHE
/*

$mem = new \Micro\Driver\Memcache\Memcache([ 'type'=>'memcached', 'server'=>['true'] ]);
$cacheMem = new Micro\Cache\Adapter\Memcache\Memcache($mem);
dvd($cacheMem->get('one'));
*/

// LOGGER
/*

$logger = new Micro\Logger\Logger([
    [
        'class' => '\\Micro\\Logger\\Adapter\\File',
        'levels' => [
            Psr\Log\LogLevel::NOTICE,
            Psr\Log\LogLevel::INFO
        ],
        'filename' => '/tmp/deeers.txt'
    ]
]);
*/

// VALIDATOR
/*
$manager = new Micro\Validator\Manager();

$model = [
    'test' => 5
];

var_dump($manager->run($model, [
    ['test', 'boolean', ['strict'=>true]]
]));

var_dump($manager->run($model, [
    ['test', 'boolean', []]
], true));
*/

// DISPATCHER
/*
$dispatcher = new Micro\Dispatcher\Dispatcher();
$dispatcher->addListener('kernel.initialize', function($ds) { var_dump($ds.'3'); });
$dispatcher->addListener('kernel.initialize', function($ds) { var_dump($ds.'2'); }, -1);
$dispatcher->addListener('kernel.initialize', function($ds) { var_dump($ds.'1'); }, -2);
$dispatcher->signal('kernel.initialize', ['dds'=>'trololo']);
*/
