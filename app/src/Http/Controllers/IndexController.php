<?php
namespace App\Http\Controllers;

use Dybasedev\Keeper\Http\KeeperBaseController;

class IndexController extends KeeperBaseController
{
    public function index()
    {
        return 'Hello, world';
    }
}