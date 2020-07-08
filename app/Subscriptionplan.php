<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptionplan extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rate',
        'word_limit',
        'interval',
        'currency',
    ];

    /**
     * plan has many features.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
