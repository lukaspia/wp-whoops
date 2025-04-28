<?php

namespace Handler;

use WpWhoops\Handler\ErrorHandlerInterface;
use WpWhoops\Handler\WhoopsErrorHandler;
use PHPUnit\Framework\TestCase;

class WhoopsErrorHandlerTest extends TestCase
{
    public function testImplementsErrorHandlerInterface()
    {
        $handler = $this->getMockBuilder(WhoopsErrorHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->assertInstanceOf(ErrorHandlerInterface::class, $handler);
    }
}
