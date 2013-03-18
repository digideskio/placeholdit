<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Martin Backhaus 2010
 * @author     Martin Backhaus <mrtn.bckhs@gmail.com>
 * @package    PlaceholdIt
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'phit_colors';
$GLOBALS['TL_DCA']['tl_content']['palettes']['placeholdit']     = '{type_legend},type,phit_text,phit_width,phit_height,phit_link,phit_colors;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['phit_colors'] = 'phit_foreground,phit_background';

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_text'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_width'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>4, 'rgxp'=>'digit', 'tl_class'=>'clr w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_height'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_height'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>4, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_link'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_link'],
	'inputType'               => 'text',
	'eval'					  => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
	'wizard' => array
	(
		array('tl_content', 'pagePicker')
	)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_colors'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_colors'],
	'default'                 => '0',
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_foreground'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_foreground'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>6, 'rgxp'=>'alnum', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['phit_background'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['phit_background'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>6, 'rgxp'=>'alnum', 'tl_class'=>'w50')
);
