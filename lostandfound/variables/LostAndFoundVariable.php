<?php
/**
 * Lost and Found plugin for Craft CMS
 *
 * Lost and Found Variable
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   LostAndFound
 * @since     1.0.1
 */

namespace Craft;

class LostAndFoundVariable
{

    /**
     * Maps current (4o4'd) url and see if it matches any entries where it is defined as an "old uRL"
     * If it's match we redirect the user
     *
     * @return void
     */
    public function map404()
    {
        $url = craft()->request->getUrl();

        $foundentryModels = craft()->lostAndFound->findElementByOldUrl($url);

        if (sizeof($foundentryModels) < 1) {
            return;
        }

        $entry = $foundentryModels[0];

        craft()->lostAndFound->redirectToEntry($entry);
    }
}