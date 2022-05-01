<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function create(array $data)
    {
        return parent::create([
            'name' => $data['nome'].' '.$data['sobrenome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
