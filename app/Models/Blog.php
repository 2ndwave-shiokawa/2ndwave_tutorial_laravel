<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'created_user_id',
        'ceated_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_user_id');
    }
}