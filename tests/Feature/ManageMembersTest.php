<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Member;

class ManageMembersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guests_cannot_manage_members()
    {
        $this->withoutExceptionHandling();
        $member = factory(Member::class)->create();
        $this->get('/members/create')->assertRedirect('login');
        $this->get('/admin/members')->assertRedirect('login');
        $this->get($member->path() . '/edit')->assertRedirect('login');
        $this->patch($member->path())->assertRedirect('login');
    }

    /**
     * @test
     */
    public function admin_can_create_a_new_member()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = factory(User::class)->create());

        $this->get('/members/create')->assertStatus(200);
        $attributes = factory(Member::class)->raw();
        $this->post('/members', $attributes);
        $this->assertDatabaseHas('members', [
            'title' => $attributes['title'],
            'address' => $attributes['address'],
            'name' => $attributes['name'],
        ]);
    }

    /**
     * @test
     */
    public function admin_can_view_a_single_member()
    {
        $member = factory(member::class)->create();
        $this->get($member->path())->assertStatus(200);
    }

    /**
     * @test
     */
    public function guests_view_a_single_member_editorial_members()
    {
        // $member = factory(member::class)->create();
        // $this->get($member->path())->assertStatus(200);
    }

    /**
     * @test
     */
    public function admin_can_view_all_members()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        factory(member::class)->create();
        $this->get('/members')->assertStatus(200);
    }

    /**
     * @test
     */
    public function admin_can_update_a_member()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $member = factory(member::class)->create();
        $this->get($member->path() . '/edit')->assertOk();
        $attributes = [
            'title' => 'Changed',
            'address' => 'Description Changed',
            'name' => 'John Doe',
        ];
        $this->patch($member->path(), $attributes)->assertRedirect('/members');
        $this->assertDatabaseHas('members', $attributes);
    }
}
