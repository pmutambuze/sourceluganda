<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'sample_image_path',
        'publishing_date',
        'publishing_fee',
        'frequency',
        'guidelines',
        'submission',
        'paperpublication',
        'payment_policy',
        'loyality_reward',
        'plagiarism',
        'academic_misconduct',
        'layout',

    ];

    /**
     * The creator of the journal.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Path for the single journal.
     */
    public function path()
    {
        return '/journals/' . $this->id;
    }

    /**
     * The editorial and technical members of the journal.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        // return $this->belongsToMany(Member::class);
        return Member::all();
    }
}
