<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author',
        'issue_date',
        'synopsis',
        'publisher',
    ];

    protected $casts = [
        'issue_date' => 'date'
    ];
    //public function user()
    //{
      //  return $this->
    //}
    
}

