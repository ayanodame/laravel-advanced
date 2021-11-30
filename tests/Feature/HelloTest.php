<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    public function testHello()
    {
        Author::factory()->create([
            'name'=>'aaa',
            'age'=>'11',
            'nationality'=>'test',
        ]);
        $this->assertDatabaseHas('authors',[
            'name'=>'aaa',
            'age'=>'11',
            'nationality'=>'test',
        ]);
    }
}