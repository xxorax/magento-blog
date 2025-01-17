<?php

/**
 * Oggetto Blog extension for Magento
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
 * the Oggetto Blog module to newer versions in the future.
 * If you wish to customize the Oggetto Blog module for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Oggetto
 * @package    Oggetto_Blog
 * @copyright  Copyright (C) 2012 Oggetto Web (http://oggettoweb.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Blog
 *
 * @category   Oggetto
 * @package    Oggetto_Blog
 * @subpackage Block
 * @author     Dmitry Buryak <b.dmitry@oggettoweb.com>
 */
class Oggetto_Blog_Block_Adminhtml_Blog extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_blog';
        $this->_blockGroup = 'oggetto_blog';
        $this->_headerText = Mage::helper('oggetto_blog')->__('Blog Manager');
        $this->_addButtonLabel = Mage::helper('oggetto_blog')->__('Add Post');
        parent::__construct();
        $this->setTemplate('oggetto_blog/blog.phtml');
    }

    /**
     * Checks if store single mode
     *
     * @return boolean
     */
    public function isSingleStoreMode()
    {
        if (!Mage::app()->isSingleStoreMode()) {
               return false;
        }
        return true;
    }
}