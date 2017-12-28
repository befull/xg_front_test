<?php

$v = $_POST['v'];
$v++;

$out = [
    'name' => 'xg',
    'val' => $v
];

#sleep(1);

echo json_encode($out);