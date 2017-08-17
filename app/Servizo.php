<?php namespace App;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Servizo extends Model
{
	// Nome da taboa en MySQL.
	protected $table="servizos";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('nome','descricion','idTipo');

	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincremental
	nome -> Nome do familiar que se rexistra na aplicación
	tipo -> Externo/Centro/Domicilio
	descricion -> 2º Apelido

	*/

	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at'];

	// Relación de Servizo con Tratamento:
	public function tratamento()
	{
		// 1 Servizo dá un ou varios tratamentos
		// $this fai referencia ao obxecto que tenhamos nese momento de Tratamento.
		return $this->hasMany('App\Tratamento');
	}

	// Relación de Servizo con Empresa:
	public function empresa()
	{
		// 1 Servizo ofrecéceo unha empresa
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->belongsToMany('App\Empresa');
	}

	// Relación de servizo con tipo:
	public function tipo()
	{
		// 1 servizo só pertence a un tipo.
		// $this fai referencia ao obxecto que tenhamos nese momento de servizo.
		return $this->belongsTo('App\Tipo');
	}
}