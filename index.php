<?php

require __DIR__ . '/vendor/autoload.php';

use App\App;

try {
    $app = new App();

    $app->render('search', 'index');
} catch (Throwable $e) {
    print 'Hubo algún error';
} finally {
    die();
}
