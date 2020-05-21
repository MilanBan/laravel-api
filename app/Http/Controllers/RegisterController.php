<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request) {
        User::create($request->getAttributes());

        return $this->respondWithMessage('User successfully created');
    }
}
