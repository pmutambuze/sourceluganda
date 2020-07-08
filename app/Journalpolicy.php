<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journalpolicy extends Model
{
    protected $fillable =
    [
        'guidelines',
        'paperpublication',
        'submission',
        'payment_policy',
        'loyality_reward',
        'plagiarism',
        'academic_misconduct',
        'layout',
    ];
}
