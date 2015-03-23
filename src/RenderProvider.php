<?php

/*
 * This file is part of the Indigo Fuel Fieldset Twig package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Fuel\Fieldset;

/**
 * Provides a renderer
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface RenderProvider
{
	/**
	 * Returns a Render
	 *
	 * @param string|null $name
	 *
	 * @return Render
	 *
	 * @throws \InvalidArgumentException If Render is not found
	 */
	public function get($name = null);
}
