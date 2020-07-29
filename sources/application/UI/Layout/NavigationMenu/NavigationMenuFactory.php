<?php
/**
 * Copyright (C) 2013-2020 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

namespace Combodo\iTop\Application\UI\Layout\NavigationMenu;


use ApplicationContext;
use Combodo\iTop\Application\UI\Component\PopoverMenu\PopoverMenuFactory;

/**
 * Class NavigationMenuFactory
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 * @package Combodo\iTop\Application\UI\Layout\NavigationMenu
 * @internal
 * @since 2.8.0
 */
class NavigationMenuFactory
{
	/**
	 * Make a standard NavigationMenu layout for backoffice pages
	 *
	 * @return \Combodo\iTop\Application\UI\Layout\NavigationMenu\NavigationMenu
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \DictExceptionMissingString
	 * @throws \MySQLException
	 */
	public static function MakeStandard()
	{
		return new NavigationMenu(
			NavigationMenu::BLOCK_CODE,
			new ApplicationContext(),
			PopoverMenuFactory::MakeUserMenuForNavigationMenu()
		);
	}
}