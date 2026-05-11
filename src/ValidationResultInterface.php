<?php

declare(strict_types=1);

namespace ChangHorizon\ValidationInterface;

interface ValidationResultInterface
{
    public function isValid(): bool;

    public function getError(): ?string;

    public function getCode(): ?string;
}
