<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->all();
    }

    public function store($data)
    {
        return $this->user->create($data);
    }

    public function show($id)
    {
        return $this->user->find($id);
    }

    public function update($data, $id)
    {
        $user = $this->user->find($id);
        if ($user) {
            $user->update($data);
            return $user;
        }

        return null;
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);
        if ($user) {
            $user->delete();
            return true;
        }

        return false;
    }
}
