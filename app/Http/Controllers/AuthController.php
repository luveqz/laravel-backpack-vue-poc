<?php

namespace App\Http\Controllers;

use App\Http\Requests\APILoginRequest;
use App\Traits\APIResponses;

class AuthController extends Controller
{
    use APIResponses;

    public function login (APILoginRequest $request) {
        return $this->ok($request->get('email') );
    }
}
