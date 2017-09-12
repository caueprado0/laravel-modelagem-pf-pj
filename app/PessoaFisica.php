<?php

namespace App;

use Pessoa;
use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    protected $table = 'pessoas_fisicas';
    protected $fillable = ['sobrenome','cpf','rg','data_nascimento','sexo'];

    public function pessoaType(){
    	return $this->morphMany(Pessoa::class, 'pessoa');
    }
}
