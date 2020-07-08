<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Researchpaper extends Model
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
        'journal_id',
        'authors_name',
        'authors_email',
        'address',
        'country',
        'organisation',
        'mobile',
        'viewers_name',
        'viewers_email',
        'research_paper_url',
        'total_words',
        'package_id',
    ];
}
