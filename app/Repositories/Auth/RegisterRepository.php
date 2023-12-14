<?php

namespace App\Repositories\Auth;

use App\Repositories\BaseRepository;

use App\Models\User;

use Hash;

class RegisterRepository extends BaseRepository
{
    public function execute($request){

        $user = User::create([
            //'first_name' => $request->firstName,
            //'last_name' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole('USER');

        return $this->success("User created successfully");

    }
}
