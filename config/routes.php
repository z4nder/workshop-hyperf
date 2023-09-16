<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

Router::post('/link', [\App\Controller\LinkController::class, 'create'], ['middleware' => [\App\Middleware\BasicAuthMiddleware::class]]);
Router::put('/link//:id', [\App\Controller\LinkController::class, 'update']);
Router::delete('/link/:id', [\App\Controller\LinkController::class, 'delete']);
Router::get('/link/:id', [\App\Controller\LinkController::class, 'show']);
Router::get('/link/:alias', [\App\Controller\LinkController::class, 'redirect']);
Router::put('/link/:id/report', [\App\Controller\LinkController::class, 'report']);
