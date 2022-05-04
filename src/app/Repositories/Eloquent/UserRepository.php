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
        $user = new $this->model();
        $user->nome = $data['nome'].' '.$data['sobrenome'];
        $user->email = $data["email"];
        $user->password = Hash::make($data['password']);

        return $user;
    }

    public function get(string $id)
    {
        // TODO: Implement get() method.
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(string $data)
    {
        // TODO: Implement delete() method.
    }
}
