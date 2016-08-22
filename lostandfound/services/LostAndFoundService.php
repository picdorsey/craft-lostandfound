<?php
/**
 * Lost and Found plugin for Craft CMS
 *
 * LostAndFound Service
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   LostAndFound
 * @since     1.0.0
 */

namespace Craft;

class LostAndFoundService extends BaseApplicationComponent
{
    /**
     * Search elements for "old url" equal to url
     *
     * @param url to search
     * @return Array of EntryModel matching search results
     */
    public function findElementByOldUrl($url)
    {
        $oldUrl = craft()->plugins->getPlugin('lostAndFound')->getSettings()->oldUrl;

        $criteria = craft()->elements->getCriteria(ElementType::Entry);
        $criteria->search = $oldUrl . ':*' . $url . '*';

        return $criteria->find();
    }

    /**
     * Redirects user to an entry's url
     *
     * @param EntryModel entry to redirect to
     * @return void
     */
    public function redirectToEntry(EntryModel $entry)
    {
        if (is_null($entry)) {
            return;
        }

        $url = $entry->getUrl();
        $redirectType = (int)craft()->plugins->getPlugin('lostAndFound')->getSettings()->redirectType;

        header('Location: ' . $url, TRUE, $redirectType);
    }

}