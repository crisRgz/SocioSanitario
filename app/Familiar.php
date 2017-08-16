<?php namespace App;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
	// Nome da taboa en MySQL.
	protected $table="familiares";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('NIF','nome','apelido1','apelido2','direccion','telefono','CCC','idUser');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincremental
	nome -> Nome do familiar que se rexistra na aplicación
	apelido1 -> 1º Apelido
	apelido2 -> 2º Apelido
	direccion -> Dirección
	telefono -> teléfono de contacto co familiar
	CCC -> Conta na que se pasará o pagamento dos servizos.
	*/
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at'];

	// Relación de Familiar con USER:
	public function user()
	{
		// 1 Familiar é un user
		// $this fai referencia ao obxecto que tenhamos nese momento de Familiar.
		return $this->belongsTo('App\User');
	}

	// Relación de Familiar con usuario:
	public function usuario()
	{	
		// 1 Familiar interna varios usuarios
		// $this fai referencia ao obxecto que tenhamos nese momento de Familiar.
		return $this->hasMany('App\Usuario');
	}
}