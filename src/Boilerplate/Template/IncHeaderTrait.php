<?php

namespace Boilerplate\Template;

// From `charcoal-core`
use \Charcoal\Translation\TranslationString;

/**
 * Header include. Provide defaults (stubs) to fulfill the interface.
 */
trait IncHeaderTrait
{
    /**
     * @return string
     */
    abstract public function lang();

    /**
     * @return string|TranslationString
     */
    public function pageTitle()
    {
        return 'Charcoal Project Boilerplate';
    }

    /**
     * @return string|TranslationString
     */
    public function metaPrefix()
    {
        return '';
    }

    /**
     * @return string|TranslationString
     */
    public function metaTitle()
    {
        return '';
    }

    /**
     * @return string|TranslationString
     */
    public function metaDescription()
    {
        return '';
    }

    /**
     * @return string|TranslationString
     */
    public function metaTags()
    {
        return '';
    }

    /**
     * @return string|TranslationString
     */
    public function opengraphTags()
    {
        return '';
    }

    /**
     * @return string|TranslationString
     */
    public function extraHeaderContent()
    {
        return '';
    }

    /**
     * @return string
     */
    public function googleAnalytics()
    {
        $analyticsCfg = $this->appConfig->get('apis.google.analytics');
        if (isset($analyticsCfg['tracking_id'])) {
            return $analyticsCfg['tracking_id'];
        }
        return '';
    }

    /**
     * @return string
     */
    public function typekit()
    {
        $typekitCfg = $this->appConfig->get('apis.typekit');
        if (isset($typekitCfg['kit_id'])) {
            return $typekitCfg['kit_id'];
        }
        return '';
    }
}