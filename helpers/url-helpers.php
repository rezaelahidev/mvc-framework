<?php

/**
 * URL Helpers functions
 */

 /**
 * Retrieve by default the site base url.
 * 
 * @since 1.0.0
 * @return string
 */
function siteURL(string $route): string
{
    return $_ENV['SITE_URL'] . urldecode($route);
}

/**
 * Retrieve by default the assets base url.
 * 
 * @since 1.0.0
 * @return string
 */
function assetsURL(string $route): string
{
    return siteURL(
        sprintf(
            'assets/%s',
            urlencode($route ?? '')
        )
    );
}
