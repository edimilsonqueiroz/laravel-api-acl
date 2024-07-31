<?php

namespace App\DTO\Permissions;

class EditPermissionDTO
{
    public function __construct(
        readonly string $id,
        readonly string $name,
        readonly string $description
    )
    {
        
    }
}