<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Domain\Register\DTO\RegisterDTO;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function Register(RegisterRequest $register):JsonResponse
    {
        return response()->json(['user' => (User::create(RegisterDTO::fromRequest($register)->toArray()))]);
    }
}
