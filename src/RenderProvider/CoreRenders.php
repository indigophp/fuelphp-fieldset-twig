<?php

/*
 * This file is part of the Indigo Fuel Fieldset Twig package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Fuel\Fieldset\RenderProvider;

use Indigo\Fuel\Fieldset\RenderProvider;

/**
 * Provides the core renderers
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class CoreRenders implements RenderProvider
{
	/**
	 * @var array
	 */
	protected $renderers = [
		'basic'      => 'Fuel\Fieldset\Render\BasicRender',
		'bootstrap3' => 'Fuel\Fieldset\Render\Bootstrap3',
	];

	/**
	 * @var string
	 */
	protected $defaultRenderer;

	/**
	 * @param string $defaultRenderer
	 */
	public function __construct($defaultRenderer = 'basic')
	{
		$this->defaultRenderer = $defaultRenderer;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get($name = null)
	{
		if (is_null($name))
		{
			$name = $this->defaultRenderer;
		}

		if (!isset($this->renderers[$name])) {
			throw new \InvalidArgumentException(sprintf('The renderer "%s" is not defined', $name));
		}

		return new $this->renderers[$name];
	}
}
