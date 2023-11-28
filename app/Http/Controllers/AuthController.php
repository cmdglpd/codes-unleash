<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// * REQUEST
use App\Http\Requests\Auth\{
    LoginRequest,
    RegisterRequest,
    LogoutRequest,
//    DeleteUserRequest,
//    VerifyOtpRequest
};

// * REPOSITORY
use App\Repositories\Auth\{
    LoginRepository,
    RegisterRepository,
    LogoutRepository,
//    DeleteUserRepository,
//    VerifyOtpRepository
};

class AuthController extends Controller
{
    protected $login, $register, $logout;

    public function __construct(
        LoginRepository $login,
        RegisterRepository $register,
        LogoutRepository $logout
    ) {
        $this->login = $login;
        $this->register = $register;
        $this->logout = $logout;
    }

    protected function login(LoginRequest $request)
    {
        return $this->login->execute($request);
    }

    protected function register(RegisterRequest $request)
    {
        return $this->register->execute($request);
    }

    protected function logout(LogoutRequest $request)
    {
        return $this->logout->execute();
    }
}
