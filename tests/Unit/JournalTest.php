<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Journal;
use App\User;

class JournalTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_has_a_creator()
    {
        $journal = factory(Journal::class)->create();
        $this->assertInstanceOf(User::class, $journal->creator);
    }

    /**
     * @test
     */
    public function journal_has_a_path()
    {
        $journal = factory(Journal::class)->create();
        $this->assertEquals('/journals/' . $journal->id, $journal->path());
    }

    /**
     * @test
     */
    public function journal_has_a_editorial_members()
    {
        $journal = factory(Journal::class)->create();
        $this->assertInstanceOf(Member::class, $journal->members);
    }
}
