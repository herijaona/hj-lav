<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body','users_id'
    ];

        public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
