<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	protected $fillable = ['name', 'description'];

	protected $table = 'schools';

    public function campi(){
        return $this->hasMany('App\Campus');
    }
}
