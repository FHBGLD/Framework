<?php

declare(strict_types=1);

namespace Hawb\Framework;

class ControllerRequestHandler implements RequestHandlerInterface
{
    public function __construct(private Controller $controller,
                                private string $action,
                                private array $args) {}

    public function handle(Request $request): Response {
        $this->controller->setRequest($request);
        $response = ($this->controller)->{$this->action}(...$this->args);
        return ($this->controller)->{$this->action}(...$this->args);
    }
}
