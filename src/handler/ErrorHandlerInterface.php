<?php

namespace WpWhoops\Src\Handler;

interface ErrorHandlerInterface
{
    public function handleErrors(): void;
}