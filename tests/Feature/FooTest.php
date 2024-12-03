<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooTest extends TestCase
{
    use DatabaseTruncation;

    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
