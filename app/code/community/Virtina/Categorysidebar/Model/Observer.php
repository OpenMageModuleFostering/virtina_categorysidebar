<?php
/**
 * Virtina
 * @package    Virtina_Categorysidebar
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Virtina_Categorysidebar_Model_Observer
{
	public function addAttributeSetHandle(Varien_Event_Observer $observer){
        $page = Mage::getStoreConfig('categorysidebar/general/column');   
		$observer->getEvent()->getLayout()->getUpdate()->addHandle('categorysidebar_controller_action_id_'.$page);
    } 
}

