<?php

use Indigo\Fuel\Fieldset\RenderProvider\SimpleProvider;

class SimpleProviderTest extends PHPUnit_Framework_TestCase
{
	public function testRender()
	{
		$provider = new SimpleProvider;
		$render = $provider->get('basic');

		$this->assertInstanceOf('Fuel\Fieldset\Render\BasicRender', $render);
	}

	public function testDefaultRender()
	{
		$provider = new SimpleProvider('basic');
		$render = $provider->get();

		$this->assertInstanceOf('Fuel\Fieldset\Render\BasicRender', $render);
	}

	public function testRenderNotFound()
	{
		$this->setExpectedException('InvalidArgumentException', 'The render "invalid" is not defined');

		$provider = new SimpleProvider;
		$render = $provider->get('invalid');
	}

	public function testAddRender()
	{
		$provider = new SimpleProvider();
		$render = $provider->add('basic', 'Fuel\Fieldset\Render\BasicRender');
	}

	public function testAddRenderNotFound()
	{
		$this->setExpectedException('InvalidArgumentException', 'Class "InvalidClass" does not exist');

		$provider = new SimpleProvider;
		$render = $provider->add('invalid', 'InvalidClass');
	}
}
