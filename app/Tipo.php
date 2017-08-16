<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
   // Nome da taboa en MySQL.
	protected $table="tipos";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('tipo');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincremental
	tipo -> Externo/Centro/Domicilio
	*/
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at']; 
 
	// Relación de tipo con servizol:
	public function servizo()
	{	
		// 1 tipo agrupa varios servizos
		// $this fai referencia ao obxecto que tenhamos nese momento de tipo.
		return $this->hasMany('App\Servizo');
	}
}