<?php

namespace App\Traits;

use App\Models\{
    User,
    Appointment
};

trait Getter
{
    protected function getUserId($userNumber){
        $user = User::where('user_number', $userNumber)->first();

        return $user->id;
    }
    
}
