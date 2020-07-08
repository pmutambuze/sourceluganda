<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * The specific document in the library.
     *eg book, kabaka's speech
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function library()
    {
        return $this->hasMany(Library::class);
    }
}
