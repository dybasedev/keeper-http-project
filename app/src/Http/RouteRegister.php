<?php
namespace App\Http;

use App\Http\Controllers;
use Dybasedev\Keeper\Routing\RouteCollector;
use Dybasedev\Keeper\Routing\RouteRegister as BaseRegister;

class RouteRegister extends BaseRegister
{
    public function register(RouteCollector $collector)
    {
        $collector->get('/', [Controllers\IndexController::class, 'index']);
    }
}