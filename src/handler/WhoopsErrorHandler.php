<?php

declare(strict_types=1);


namespace WpWhoops\Src\Handler;


use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

if (!defined('ABSPATH')) {
    exit;
}

class WhoopsErrorHandler implements ErrorHandlerInterface
{
    public function handleErrors(): void
    {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
    }
}