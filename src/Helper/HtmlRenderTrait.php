<?php

declare(strict_types=1);

namespace Alura\Mvc\Helper;

trait HtmlRenderTrait
{
    private function renderTemplate(string $templateName, array $context=[]): string{
        $templatePath = __DIR__ . '/../../Views/';
        extract($context);

        ob_start();
        require_once $templatePath . $templateName . '.php';
        return ob_get_clean();
    }
}