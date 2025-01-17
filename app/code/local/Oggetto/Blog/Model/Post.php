<?php

/**
 * Oggetto Post extension for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade
 * the Oggetto Post module to newer versions in the future.
 * If you wish to customize the Oggetto Post module for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Oggetto
 * @package    Oggetto_Post
 * @copyright  Copyright (C) 2012 Oggetto Web (http://oggettoweb.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Post
 *
 * @category   Oggetto
 * @package    Oggetto_Post
 * @subpackage Model
 * @author     Dmitry Buryak <b.dmitry@oggettoweb.com>
 */
class Oggetto_Blog_Model_Post extends Mage_Core_Model_Abstract
{

    const ENTITY                = 'oggetto_blog_post';

    protected $_eventPrefix     = 'oggetto_blog_post';
    protected $_eventObject     = 'post';


    /**
     * Resource initialization
     *
     * @return void
     */
    public function _construct()
    {
        $this->setIdFieldName('entity_id');
        $this->_init('oggetto_blog/post');
    }

    /**
     * Returns formated string
     *
     * @param string $string string
     * @return string
     */
    public function generateUrlKey($string = null)
    {
        if (!$string) {
            $string = $this->getTitle();
        }
        $string = preg_replace('#[^a-z0-9-]#', '-', trim(strtolower($string)));
        $string = preg_replace('#-{2,}#', '-', $string);
        return $string;
    }

    /**
     * Retrieves category ids
     *
     * @return array
     */
    public function getCategoryIds()
    {
        $categoryIds = $this->getCategoryIds();
        if ($categoryIds) {
            return explode(',', $categoryIds);
        }
        return array();
    }
}