<?php

declare(strict_types=1);


namespace WpWhoops\Handler;


use Whoops\Handler\HandlerInterface;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Implements Whoops error handling for WordPress.
 *
 * This handler provides detailed error pages during development using the Whoops error handling framework.
 */
class WhoopsErrorHandler implements ErrorHandlerInterface
{
    private const string WP_SECTION_TITLE = 'WordPress Info';
    private const string WP_VERSION_LABEL = 'Version';
    private const string WP_THEME_LABEL = 'Theme';
    private const string WP_PLUGINS_LABEL = 'Plugins';

    private Run $whoops;

    private HandlerInterface $handler;

    public function __construct()
    {
        $this->whoops = new Run();
        $this->setHandler();
    }

    /**
     * @return void
     */
    public function registerErrorsHandler(): void
    {
        $this->whoops->pushHandler($this->handler);
        $this->whoops->register();
    }

    /**
     * @return void
     */
    private function setHandler(): void
    {
        $this->handler = new PrettyPageHandler();
        $this->handler->addDataTable(self::WP_SECTION_TITLE, [
            self::WP_VERSION_LABEL => get_bloginfo('version'),
            self::WP_THEME_LABEL => wp_get_theme()->get('Name'),
            self::WP_PLUGINS_LABEL => implode('; ', get_option('active_plugins')),
        ]);
    }
}