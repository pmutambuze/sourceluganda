<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'address', 'user_id'];

    /**
     *  journals assigned to the member.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function journals()
    {
        return $this->belongsToMany(Journal::class);
    }

    /**
     * A user creates amember.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->BelongsTo(User::class);
    }

    /**
     * Path for the single member.
     */
    public function path()
    {
        return '/members/' . $this->id;
    }
}
