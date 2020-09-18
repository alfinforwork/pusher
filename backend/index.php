<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'a3a108aa43a240b0a726',
    '67e001332e83543ae907',
    '1075149',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
