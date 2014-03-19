<?php

// define default bootstrap palette
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['_bootstrap_default_'] = array
(
	'type'      => array('type', 'headline'),
	'link'      => array(),
	'config'    => array(),
	'protected' => array(':hide', 'protected'),
	'expert'    => array(':hide', 'guests', 'cssID', 'space'),
	'invisible' => array(':hide', 'invisible', 'start', 'stop'),
);

// bootstrap empty palettes
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['_bootstrap_empty_'] = array
(
	'type' => array('type'),
);

// wrapper elements
$GLOBALS['TL_DCA']['tl_content']['config']['ondelete_callback'][] = array('Netzmacht\Bootstrap\Core\Contao\DataContainer\Wrapper', 'delete');
$GLOBALS['TL_DCA']['tl_content']['fields']['type']['save_callback'][] = array('Netzmacht\Bootstrap\Core\Contao\DataContainer\Wrapper', 'save');


// fields
$GLOBALS['TL_DCA']['tl_content']['fields']['bootstrap_parentId'] = array
(
	'sql'                     => "int(10) unsigned NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['bootstrap_icon'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_icon'],
	'exclude'                 => true,
	'inputType'               => 'icon',
	'options'                 => \Netzmacht\Bootstrap\Core\Bootstrap::getIcons()->getIcons(),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
	'eval'                    => array('tl_class' => 'w50', 'iconTemplate' => \Netzmacht\Bootstrap\Core\Helper\Icons::getIconTemplate()),
	'sql'                     => "varchar(32) NOT NULL default ''",
);
