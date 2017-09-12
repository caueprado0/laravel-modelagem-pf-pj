<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
{
    protected $table = 'pessoas_juridicas';
    protected $fillable = ['razao_social', 'cnpj'];

    public function pessoaType(){
    	return $this->morphMany(Pessoa::class, 'pessoa');
    }
}
