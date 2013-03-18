<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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

class ContentPlaceholdit extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_placeholdit';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$this->Template->phit_text = $this->phit_text;
		$this->Template->phit_width = $this->phit_width;
		if ($this->phit_height)
		{
			$this->Template->phit_height = $this->phit_height;
		}
		else
		{
			$this->Template->phit_height = '';
		}
		if ($this->phit_colors)
		{
			$this->Template->phit_foreground = $this->phit_foreground;
			$this->Template->phit_background = $this->phit_background;
		}
		else
		{
			$this->Template->phit_foreground = '333333';
			$this->Template->phit_background = '666666';
		}
	}
}