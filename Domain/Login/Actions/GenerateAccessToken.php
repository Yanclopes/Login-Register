<?php

namespace Domain\Login\Actions;

use App\Models\User;
use Carbon\Carbon;
use Domain\Login\DTO\LoginDTO;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use function config;

readonly class GenerateAccessToken
{
    /**
     * @param LoginDTO $loginDTO
     * @return string
     * @throws AuthenticationException
     */
    public function __invoke(LoginDTO $loginDTO): string
    {
        if (!Auth::attempt($loginDTO->toArray())) {
            throw new AuthenticationException('invalid credentials');
        }

        /** @var User $user */
        $user = Auth::user();
        $expiration = Carbon::now()->addMinutes(config('sanctum.expiration'));

        return $user->createToken($user->getKey(), expiresAt: $expiration)->plainTextToken;
    }
}
