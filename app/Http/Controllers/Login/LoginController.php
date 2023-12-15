<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Domain\Login\DTO\LoginDTO;
use Domain\Login\Resources\LoginResource;
use Domain\Login\Actions\GenerateAccessToken;

/**
 * This class is responsible for handling login related functionality.
 * @extends Controller
 */
class LoginController extends Controller
{
    /*
     * Regras:
     *
     * 1 - se esta funcionando não mexa
     * 2 - !code == !dev
     * 3 - não dar push em produção na sexta
     * 4 - se o servidor cair depois das 18 ele que se levante sozinho
     * 5 - sem cafe, sem trabalho
     *
     * Horas trabalhadas nesse codigo - 8
     */

    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('Login');+
    }
    public function Login(LoginRequest $loginRequest, GenerateAccessToken $generateAccessToken):LoginResource
    {
        return new LoginResource($generateAccessToken(LoginDTO::fromRequest($loginRequest)));
    }
}
