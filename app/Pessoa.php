<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $fillable = ['nome'];

    public function pessoa(){
    	return $this->morphTo();
    }
}
