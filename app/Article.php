<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     public function belongsToUser()
     {
         return $this->belongsTo('App\User', 'user_id', 'id');
     }

     public function belongsToCategory()
     {
         return $this->belongsTo('App\Category', 'catrgory_id', 'id');
     }
}
