<?php namespace App;
//---------------- N 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	// Nome da taboa en MySQL.
	protected $table='usuarios';

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('NIF','nome','apelido1','apelido2','direccion','telefono','nomeCont','tlfCont','lat','long','idFam');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincremental
	nome -> Nome do Usuario do servizo, a persoa que recibirá os servizos
	apelido1 -> 1º Apelido
	apelido2 -> 2º Apelido
	direccion -> Dirección actual na que vive o usuario, onde recibirá os servizos
	telefono -> teléfono de contacto co usuario
	Contacto -> teléfono de contacto para emerxencias
	idFam    -> FK id familiar
	*/

	// Aquí ponhemos os campos que non queremos que se devolvan nas consultas.
	protected $hidden = ['created_at','updated_at'];

	// Relación de Usuario con Familiar:
	public function familiar()
	{
		// 1 usuario é internado por un Familiar.
		// $this hace referencia al objeto que tengamos en ese momento de USuario.
		return $this->belongsTo('App\Familiar');
	}

	// Relación de Usuario con Tratamento:
	public function tratamento()
	{
		// 1 usuario recibe un/varios tratamentos
		// $this fai referencia ao obxecto que tenhamos nese momento de Usuario.
		return $this->hasMany('App\Tratamento');
	}
}