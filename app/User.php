<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function hasManyArticles()
    {
        return $this->hasMany('App\Article', 'user_id', 'id');
    }
}
