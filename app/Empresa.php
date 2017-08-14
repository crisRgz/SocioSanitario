<?php namespace App;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	// Nome da taboa en MySQL.
	protected $table="empresas";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincremental
	nome -> Nome do Empresa que se rexistra na aplicación
	apelido1 -> 1º Apelido
	apelido2 -> 2º Apelido
	direccion -> Dirección
	telefono -> teléfono de contacto co Empresa
	CCC -> Conta na que se pasará o pagamento dos servizos.
	*/
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at']; 

	// Definimos a continuación a relación desta taboa con outras.
	// Exemplos de relacions:
	// 1 usuario ten 1 teléfono        -> hasOne() Relación 1:1
	// 1 teléfono pertence a 1 usuario -> belongsTo() Relación 1:1 inversa a hasOne()
	// 1 post ten moitos comentarios   -> hasMany() Relación 1:N 
	// 1 comentario pertence a 1 post  -> belongsTo() Relación 1:N inversa a hasMany()
	// 1 usuario pode ter moitos rols  -> belongsToMany()
	// 1 rol pode ter moitos usuarios  -> belongsToMany() Relación N:M precisa de táboa pivot

	// Relación de Empresa con servizo:
	public function servizo()
	{	
		// 1 Empresa ofrece un ou varios servizos
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->hasMany('App\Servizo');
	}

	// Relación de Empresa con Empregado:
	public function empregado()
	{	
		// 1 Empresa ten un ou varios empregados
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->belongsToMany('App\Empregado');
	}
}