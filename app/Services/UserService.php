<?php

namespace App\Services;

use App\Models\User;
use App\Services\Core\BaseModelService;

class UserService extends BaseModelService
{
    public function model(): string
    {
        return User::class;
    }

    public function getUsers()
    {
        return $this->model()::whereNot('role', 'admin')->get();
    }

    public function getAdminUser()
    {
        return $this->model()::where(['role' => 'admin', 'is_active' => true])->first();
    }

    public function getUser($userId)
    {
        return $this->model()::where('id', $userId)->first();
    }
}
