<?php

namespace Domain\Shared\Interfaces;

use Illuminate\Foundation\Http\FormRequest;

interface DataTransferObjectInterface
{
    public function __construct(array $args);

    public function toArray(): array;

    public static function fromRequest(FormRequest $request): self;
}
