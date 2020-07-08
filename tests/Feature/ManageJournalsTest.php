<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Journal;

class ManageJournalsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guests_cannot_manage_journals()
    {
        $journal = factory(Journal::class)->create();
        $this->get('/journals/create')->assertRedirect('login');
        $this->get('/admin/journals')->assertRedirect('login');
        $this->get($journal->path() . '/edit')->assertRedirect('login');
        $this->patch($journal->path())->assertRedirect('login');
    }

    /**
     * @test
     */
    public function a_user_can_create_a_new_journal()
    {
        $this->actingAs(factory(User::class)->create());
        $this->get('/journals/create')->assertStatus(200);
        $attributes = factory(Journal::class)->raw();
        $this->post('/journals', $attributes)
            ->assertSee($attributes['title'])
            ->assertSee($attributes['description'])
            ->assertSee($attributes['publishing_date'])
            ->assertSee($attributes['publishing_fee'])
            ->assertSee($attributes['frequency']);
        $this->assertDatabaseHas('journals', [
            'title' => $attributes['title'],
            'description' => $attributes['description'],
            'publishing_date' => $attributes['publishing_date'],
            'publishing_fee' => $attributes['publishing_fee'],
            'frequency' => $attributes['frequency'],
        ]);
    }

    /**
     * @test
     */
    public function guests_view_a_single_journal()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path())->assertStatus(200);
    }

    /**
     * @test
     */
    public function guests_can_view_all_journals()
    {
        factory(Journal::class)->create();
        $this->get('/journals')->assertStatus(200);
    }

    /**
     * @test
     */
    public function admin_can_view_all_journals()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        factory(Journal::class)->create();
        $this->get('/admin/journals')->assertStatus(200);
    }

    /**
     * @test
     */
    public function admin_can_update_a_journal()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit')->assertOk();
        $attributes = [
            'title' => 'Changed',
            'description' => 'Description Changed',
            'publishing_fee' => 300,
            'publishing_date' => '2020',
            'frequency' => 'annually',
        ];
        $this->patch($journal->path(), $attributes)->assertRedirect('/admin/journals');
        $this->assertDatabaseHas('journals', $attributes);
    }

    /**
     * @test
     */
    public function admin_can_update_a_journal_layout()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/layout')
            ->assertOk();
        $attributes = [
            'layout' => 'changed',
        ];
        $this->put($journal->path() . '/update/layout', $attributes)
            ->assertRedirect($journal->path() . '/edit/layout');
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_submission()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/papersubmission')
            ->assertOk();
        $attributes = [
            'submission' => 'changed',
        ];
        $this->put($journal->path() . '/update/papersubmission', $attributes)
            ->assertRedirect($journal->path() . '/edit/papersubmission');

        $this->assertDatabaseHas('journals', [
            'submission' => 'changed',
        ]);
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_publication_process()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/paperpublication')
            ->assertOk();
        $attributes = [
            'paperpublication' => 'changed',
        ];
        $this->put($journal->path() . '/update/paperpublication', $attributes)
            ->assertRedirect($journal->path() . '/edit/paperpublication');
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_payment_policy_guide()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/paymentpolicy')
            ->assertOk();
        $attributes = [
            'payment_policy' => 'changed',
        ];
        $this->put($journal->path() . '/update/paymentpolicy', $attributes)
            ->assertRedirect($journal->path() . '/edit/paymentpolicy');
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_guidelines()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/guidelines')
            ->assertOk();
        $attributes = [
            'guidelines' => 'changed',
        ];
        $this->put($journal->path() . '/update/guidelines', $attributes)
            ->assertRedirect($journal->path() . '/edit/guidelines');
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_plagiarism_policy()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/plagiarismpolicy')
            ->assertOk();
        $attributes = [
            'plagiarism' => 'changed',
        ];
        $this->put($journal->path() . '/update/plagiarismpolicy', $attributes)
            ->assertRedirect($journal->path() . '/edit/plagiarismpolicy');
    }

    /**
     * @test
     */
    public function admin_can_update_a_paper_academic_misconduct_policy()
    {
        $journal = factory(Journal::class)->create();
        $this->get($journal->path() . '/edit/misconduct')
            ->assertOk();
        $attributes = [
            'academic_misconduct' => 'changed',
        ];
        $this->put($journal->path() . '/update/misconduct', $attributes)
            ->assertRedirect($journal->path() . '/edit/misconduct');
    }
}
