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
class UnescapeTwigExtension extends \Twig_Extension
{
    /**
     * Environment runtime.
     */
    protected $env;

    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'Unescape Twig Extension';
    }

    /**
     * Get extension filters.
     *
     * @return array
     */
    public function getFilters()
    {
        return array('unescape' => new \Twig_Filter_Method($this, 'unescape'));
    }

    /**
     * Get extension functions.
     *
     * @return string
     */
    public function getFunctions()
    {
        return array('unescape' => new \Twig_Function_Method($this, 'unescape'));
    }

    /**
     * Init runtime.
     *
     * @param \Twig_Environment $env
     */
    public function initRuntime(\Twig_Environment $env)
    {
        $this->env = $env;
    }

    /**
     * Unescape function.
     *
     * @param string $value
     *
     * @return string
     */
    public function unescape($value)
    {
        return html_entity_decode($value, ENT_QUOTES);
    }
}
