<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/** Override this View */
JLoader::register('ContentViewArticle', JPATH_BASE . '/components/com_content/views/article/view.html.php');

/** Override this Model */
JLoader::register('ContentModelArticle', JPATH_BASE . '/components/com_content/models/article.php');

/**
 * Extend the real View
 */
class ContentViewArticle2 extends ContentViewArticle
{
    /**
     * Display the view
     */
    public function display($tpl = null)
    {
        /** Put your view into this folder - or change the path */
        $this->addTemplatePath(__DIR__ . '/tmpl/');
        parent::display($tpl);
    }
}
/**
 * Extend the real model
 */
class ContentModelArticle2 extends ContentModelArticle {}

