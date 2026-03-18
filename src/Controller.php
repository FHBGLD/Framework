<?php

declare(strict_types=1);

namespace Hawb\Framework;

use Twig\Environment;

abstract class Controller
{
    protected Request $request;
    protected Response $response;
    protected Environment $viewer;

    public function setRequest(Request $request): void {
        $this->request = $request;
    }

    public function setResponse(Response $response): void {
        $this->response = $response;
    }

    public function setViewer(Environment $viewer): void {
        $this->viewer = $viewer;
    }

    protected function view(string $template, array $data = []): Response {
        $this->response->setBody($this->viewer->render($template, $data));
        return $this->response;
    }

    protected function redirect(string $url): Response {
        $this->response->redirect($url);
        return $this->response;
    }
}