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
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class SimpleProvider implements RenderProvider
{
	/**
	 * @var array
	 */
	protected $renders = [
		'basic'      => 'Fuel\Fieldset\Render\BasicRender',
		'bootstrap3' => 'Fuel\Fieldset\Render\Bootstrap3',
	];

	/**
	 * @var string
	 */
	protected $defaultRender;

	/**
	 * @param string $defaultRender
	 */
	public function __construct($defaultRender = 'basic')
	{
		$this->defaultRender = $defaultRender;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get($name = null)
	{
		if (is_null($name))
		{
			$name = $this->defaultRender;
		}

		if (!isset($this->renders[$name])) {
			throw new \InvalidArgumentException(sprintf('The render "%s" is not defined', $name));
		}

		return new $this->renders[$name];
	}

	/**
	 * Adds a new render
	 *
	 * @param string $name
	 * @param string $class
	 */
	public function add($name, $class)
	{
		if (!class_exists($class))
		{
			throw new \InvalidArgumentException(sprintf('Class "%s" does not exist', $class));
		}

		$this->renders[$name] = $class;
	}
}
