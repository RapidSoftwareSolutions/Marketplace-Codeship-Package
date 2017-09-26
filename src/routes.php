<?php
$routes = [
    'metadata',
    'getProjects',
    'getProject',
    'getBuild',
    'restartBuild'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

