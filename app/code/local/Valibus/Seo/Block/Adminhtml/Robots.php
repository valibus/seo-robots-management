<?php
/**
 * Valib.us
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Local
 * @package    Valibus_Seo
 * @copyright   Copyright (c) 2012 Valib.us (http://www.valib.us)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml system config array field renderer
 *
 * @category   Local
 * @package    Valibus_Seo
 * @author     Valib.us <pvalibus@gmail.Com>
 */
class Valibus_Seo_Block_Adminhtml_Robots extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function __construct()
    {
        //router controller action
        $this->addColumn('router', array(
            'label' => Mage::helper('adminhtml')->__("Router"),
            'style' => 'width:120px',
        ));
        $this->addColumn('controller', array(
            'label' => Mage::helper('adminhtml')->__("Controller"),
            'style' => 'width:120px',
        ));
        $this->addColumn('robotsdirective', array(
            'label' => Mage::helper('adminhtml')->__("Robots Directive"),
            'style' => 'width:120px',
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('adminhtml')->__('Add Robots Directive');
        parent::__construct();
    }
}