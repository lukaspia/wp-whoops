<?php

namespace WpWhoops\Src;

interface ErrorHandlerInterface
{
    public function handleErrors(): void;
}