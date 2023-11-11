<?php

namespace App\Http\Controllers\API\Admin;
use App\Http\Controllers\BaseController;
use App\Http\Services\Admin\UserService;

class UserController extends BaseController
{
    protected $service;
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

}
