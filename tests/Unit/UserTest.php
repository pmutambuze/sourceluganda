<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_has_many_journals()
    {
        $user = factory(User::class)->create();
        $this->assertInstanceOf(Collection::class, $user->journals);
    }
}
