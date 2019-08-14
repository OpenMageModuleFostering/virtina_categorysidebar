<?php
/**
 * Virtina
 * @package    Virtina_Categorysidebar
 * @copyright  Copyright (c) 2015-2016 Virtina. (http://www.virtina.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$setup->addAttribute('catalog_category', 'icon_image', array(
'group' => 'General Information',
'input' => 'image',
'type' => 'varchar',
'label' => 'Icon Image',
'backend' => 'catalog/category_attribute_backend_image',
'visible' => 1,
'required' => false,
'user_defined' => 1,
'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$installer->endSetup();
