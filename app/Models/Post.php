<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* protected $filiable = [
        'user_id', 'title', 'description'
    ];
*/
    public function user() {
        return $this->belongsTo('App\Models\User');
    }


}
