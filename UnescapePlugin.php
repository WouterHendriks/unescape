<?php

namespace Craft;

/**
 * Unescape Twig Extension.
 *
 * @author    Wouter Hendriks <wouterhendriks@live.com>
 * @copyright Copyright (c) 2015, Wouter Hendriks
 * @license   MIT
 *
 * @link      http://github.com/wouterhendriks
 */
class UnescapePlugin extends BasePlugin
{
    /**
     * Get plugin name.
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('Unescape Twig Extension');
    }

    /**
     * Get plugin version.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * Get plugin developer.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Wouter Hendriks';
    }

    /**
     * Get plugin developer url.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://www.itmundi.nl';
    }

    /**
     * Import twig extension.
     *
     * @return UnescapeTwigExtension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.unescape.twigextensions.UnescapeTwigExtension');

        return new UnescapeTwigExtension();
    }
}
