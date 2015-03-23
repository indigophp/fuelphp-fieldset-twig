<?php

use Indigo\Fuel\Fieldset\RenderProvider\CoreRenders;

class CoreRendersTest extends PHPUnit_Framework_TestCase
{
	public function testRender()
	{
		$provider = new CoreRenders;
		$render = $provider->get('basic');

		$this->assertInstanceOf('Fuel\Fieldset\Render\BasicRender', $render);
	}

	public function testDefaultRender()
	{
		$provider = new CoreRenders('basic');
		$render = $provider->get();

		$this->assertInstanceOf('Fuel\Fieldset\Render\BasicRender', $render);
	}

	public function testRenderNotFound()
	{
		$this->setExpectedException('InvalidArgumentException', 'The renderer "invalid" is not defined');

		$provider = new CoreRenders;
		$render = $provider->get('invalid');
	}
}
