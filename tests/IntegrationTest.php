<?php

use Indigo\Fuel\Fieldset\Twig\FieldsetExtension;
use Prophecy\Argument;

class IntegrationTest extends Twig_Test_IntegrationTestCase
{
	public function getExtensions()
	{
		$renderProvider = $this->prophesize('Indigo\Fuel\Fieldset\RenderProvider');
		$basicRender = $this->prophesize('Fuel\Fieldset\Render\BasicRender');
		$bs3Render = $this->prophesize('Fuel\Fieldset\Render\Bootstrap3');

		$basicRender->render(Argument::type('Fuel\Fieldset\Render\Renderable'))->willReturn('RENDERED_BASIC_FORM');
		$bs3Render->render(Argument::type('Fuel\Fieldset\Render\Renderable'))->willReturn('RENDERED_BOOTSTRAP3_FORM');

		$renderProvider->get(null)->willReturn($basicRender->reveal());
		$renderProvider->get('bootstrap3')->willReturn($bs3Render->reveal());

		return [new FieldsetExtension($renderProvider->reveal())];
	}

	public function getFixturesDir()
	{
		return __DIR__.'/Fixtures/';
	}
}
