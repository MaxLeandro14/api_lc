<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
		protected $table = 'rooms';
    protected $fillable = [
    	'nome_livro','url_img','infor_regras','cod_sala','ativo', 'data_inicio', 'data_fim', 'data_leituras', 'data_debate', 'paginas', 'total_sala'
    ];
}
