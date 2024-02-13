<?php

namespace App\Services;

use App\Enums\Role;
use App\Models\User;

class UserAuthService
{
    public function registerGeneralUser(array $data): User
    {
        return User::create([
            'role' => Role::GENERAL_USER,
            ...$data,
        ]);

    }

    public function registerRentalOwner(array $data): User
    {
        return User::create([
            'role' => Role::RENTAL_OWNER,
            ...$data,
        ]);

    }

    public function registerAdmin(array $data): User
    {
        return User::create([
            'role' => Role::ADMIN,
            ...$data,
        ]);

    }

}
