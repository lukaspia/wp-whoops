# WP-Whoops

WP-Whoops is a WordPress plugin that integrates the powerful [Whoops](https://github.com/filp/whoops) error handler into your WordPress environment. It transforms PHP errors into beautiful, interactive stack traces that make debugging a breeze.

![GitHub Release](https://img.shields.io/github/v/release/lukaspia/wp-whoops)
![GitHub License](https://img.shields.io/github/license/lukaspia/wp-whoops)

## Installation

1. Upload the plugin files to the `/wp-content/plugins/wp-whoops` directory
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Define `WP_DEBUG` and `WP_DEBUG_DISPLAY` in wp-config.php and set them to `true`
```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
```
4. That's it! WP-Whoops will automatically handle errors in your development environment

## Important Note

This plugin is intended for development environments only. For security reasons, I recommend disabling it on production sites (set `WP_DEBUG_DISPLAY` to `false`).

