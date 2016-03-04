<?php

namespace TrezeVel\Tag\Tests\Models;

use TrezeVel\Tag\Models\Tag;
use TrezeVel\Tag\Tests\AbstractTestCase;
use Illuminate\Validation\Validator;
use Mockery as m;

/**
* Model de teste da tag
*/
class TagTest extends AbstractTestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_if_a_tag_can_be_persisted()
    {
        $tag = Tag::create(['name' => 'Tag test']);
        $this->assertEquals('Tag test', $tag->name);

        $tag = Tag::all()->first();
        $this->assertEquals('Tag test', $tag->name);
    }
}
