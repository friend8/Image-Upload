<?php
/**
 * This file is part of Image Upload.
 *
 * Image Upload is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Image Upload is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Image Upload.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   Image Upload
 * @author    Marian Pollzien <map@wafriv.de>
 * @copyright (c) 2015, $(copyrightUser}
 * @license   https://www.gnu.org/licenses/lgpl.html LGPLv3
 */
namespace Page;

/**
 * Class for the page headers
 *
 * @package    Image Upload
 * @subpackage Page
 * @author     Marian Pollzien <map@wafriv.de>
 * @license    https://www.gnu.org/licenses/lgpl.html LGPLv3
 */
class Header extends \SmartWork\Page\Header
{
	/**
	 * Add additional css and javascript files.
	 */
	public function process()
	{
		// Add CSS files
		$this->template->loadCss('header');
		$this->template->loadCss('style');

		parent::process();
	}
}
