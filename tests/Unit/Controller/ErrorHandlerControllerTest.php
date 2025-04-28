<?php

namespace Controller;

use WpWhoops\Controller\ErrorHandlerController;
use PHPUnit\Framework\TestCase;
use Brain\Monkey\Functions;
use Brain\Monkey\Constants;

class ErrorHandlerControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        \Brain\Monkey\setUp();

        Functions\when('get_bloginfo')->justReturn('WordPress Test Site');
        Functions\when('get_option')->justReturn([]);

        $themeObject = new class {
            public function get($param) {
                if ($param === 'Name') {
                    return 'Test Theme';
                }
                if ($param === 'Version') {
                    return '1.0.0';
                }
                return '';
            }
        };

        Functions\when('wp_get_theme')->justReturn($themeObject);
    }

    /**
     * @return void
     */
    public function testInitWithDebugEnabled():void
    {
        define('WP_DEBUG', true);
        define('WP_DEBUG_DISPLAY', true);

        $controller = new ErrorHandlerController();
        $result = $controller->registerErrorHandler();

        self::assertTrue($result);

        restore_error_handler();
        restore_exception_handler();
    }
}
