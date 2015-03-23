<?php

/*
 * This file is part of the Indigo Fuel Fieldset Twig package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Fuel\Fieldset\Twig;

use Fuel\Fieldset\Render\Renderable;
use Indigo\Fuel\Fieldset\RenderProvider;

/**
 * Adds form rendering capabalities to Twig
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FieldsetExtension extends \Twig_Extension
{
	/**
	 * @var RenderProvider
	 */
	protected $renderProvider;

	/**
	 * @param RenderProvider $renderProvider
	 */
	public function __construct(RenderProvider $renderProvider)
	{
		$this->renderProvider = $renderProvider;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		return 'fieldset';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFunctions()
	{
		return [
			new \Twig_SimpleFunction('render_form', [$this, 'render'], ['is_safe' => ['html']]),
		];
	}

	/**
	 * Renders a form
	 *
	 * @param Renderable  $renderable
	 * @param string|null $render
	 *
	 * @return string
	 */
	public function render(Renderable $renderable, $render = null)
	{
		$render = $this->renderProvider->get($render);

		return $render->render($renderable);
	}
}
