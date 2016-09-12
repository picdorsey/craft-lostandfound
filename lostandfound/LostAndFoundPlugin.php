<?php
/**
 * Lost and Found plugin for Craft CMS
 *
 * 404 mapping using an &#39;old url&#39; field inside an entry.
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   LostAndFound
 * @since     1.0.1
 */

namespace Craft;

class LostAndFoundPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Lost and Found');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Maps 404 pages to the correct entry using an "old url" field.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/picdorsey/craft-lostandfound/blob/master/readme.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/picdorsey/craft-lostandfound/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Piccirilli Dorsey, Inc.';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://picdorsey.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }

    /**
     * @return array
     */
    protected function defineSettings()
    {
        return [
            'oldUrl' => [
                AttributeType::String,
                'label' => 'Old URL field',
                'default' => ''
            ],

            'redirectType' => [
                AttributeType::Number,
                'label' => 'Redirect Type',
                'default' => '302'
            ]
        ];
    }

    /**
     * @return mixed
     */
    public function getSettingsHtml()
    {
       return craft()->templates->render('lostandfound/LostAndFound_Settings', array(
           'settings' => $this->getSettings()
       ));
    }

    /**
     * @param mixed $settings  The Widget's settings
     *
     * @return mixed
     */
    public function prepSettings($settings)
    {
        // Modify $settings here...

        return $settings;
    }

}