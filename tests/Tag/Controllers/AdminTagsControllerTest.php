<?php

namespace TrezeVel\Tag\Tests\Controllers;

use TrezeVel\Tag\Tests\AbstractTestCase;
use TrezeVel\Tag\Controllers\Controller;
use TrezeVel\Tag\Models\Tag;
use TrezeVel\Tag\Controllers\AdminTagsController;
use Mockery as m;

/**
* Classe de teste de tag
*/
class AdminTagsControllerTest extends AbstractTestCase
{
	
	public function testShouldExtendFromController()
	{
		$tag = m::mock(Tag::class);

		$controller = new AdminTagsController($tag);

		$this->assertInstanceOf(Controller::class, $controller);
	}
}