<?php

declare(strict_types=1);

namespace Hawb\Framework;

interface RequestHandlerInterface
{
    public function handle(Request $request): Response;
}
