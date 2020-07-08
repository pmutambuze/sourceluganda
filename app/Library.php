<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'abstract',
        'keywords',
        'category_id',
        'authors_name',
        'authors_email',
        'address',
        'country',
        'organisation',
        'mobile',
        'approved',
        'status',
        'viewers_name',
        'viewers_email',
        'library_url',
        'total_words',
        'package_id',
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'approved' => 'boolean'
    ];


    /**
     * library has many categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * owner of the content in the library
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Mark the library as approved.
     */
    public function approve()
    {
        $this->update(['approved' => true]);
    }

    /**
     * Mark the library as disapproved.
     */
    public function disapprove()
    {
        $this->update(['approved' => false]);
    }

}
