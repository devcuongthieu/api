<?php

namespace App\Http\Services\Admin;
use App\Http\Services\BaseService;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserService extends BaseService
{
    protected $user;
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
        parent::__construct();
    }
    public function setModel()
    {
        $this->model = new User();
    }

    public function setTransformers($data)
    {
        return $data;
    }
}
