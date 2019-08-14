<?php
/**
 * Virtina
 * @package    Virtina_Categorysidebar
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
  
class Virtina_Categorysidebar_Model_System_Config_Source_Dropdown_Values extends Mage_Core_Model_Config_Data
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '0',
                'label' => 'Left  Column',
            ),
            array(
                'value' => '1',
                'label' => 'Right  Column',
            ),
        );
    }
}
