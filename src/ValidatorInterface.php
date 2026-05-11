<?php

declare(strict_types=1);

namespace ChangHorizon\ValidationInterface;

interface ValidatorInterface
{
    public function validate(): ValidationResultInterface;
}
