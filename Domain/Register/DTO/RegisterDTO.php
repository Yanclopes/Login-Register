<?php

namespace Domain\Register\DTO;

use Domain\Shared\Interfaces\DataTransferObjectInterface;
use Illuminate\Foundation\Http\FormRequest;

class RegisterDTO implements DataTransferObjectInterface
{
    private string $email;
    private string $password;
    private string $name;

    public function __construct(array $args)
    {
        $this->email = $args['email'];
        $this->password = $args['password'];
        $this->name = $args['name'];
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'password' => $this->password,
            'name' => $this->name,
        ];
    }

    public static function fromRequest(FormRequest $request): static
    {
        return new static([
            'email' => $request->validated('email'),
            'password' => $request->validated('password'),
            'name' => $request->validated('name'),
        ]);
    }
}
