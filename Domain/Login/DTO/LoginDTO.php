<?php

namespace Domain\Login\DTO;

use Domain\Shared\Interfaces\DataTransferObjectInterface;
use Illuminate\Foundation\Http\FormRequest;

class LoginDTO implements DataTransferObjectInterface
{
    private string $email;
    private string $password;

    public function __construct(array $args)
    {
        $this->email = $args['email'];
        $this->password = $args['password'];
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    public static function fromRequest(FormRequest $request): static
    {
        return new static([
            'email' => $request->validated('email'),
            'password' => $request->validated('password'),
        ]);
    }
}
