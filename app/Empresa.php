<?php namespace App;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	// Nome da taboa en MySQL.
	protected $table="empresas";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('CIF','nome','nomeContacto','direccion','telefono','lat','long','idUser');
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

	// Relación de Empresa con USER:
	public function user()
	{
		// 1 Empresa é un user
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->belongsTo('App\User');
	}


	// Relación de Empresa con servizo:
	public function servizo()
	{
		// 1 Empresa ofrece un ou varios servizos
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->belongsToMany('App\Servizo');
	}

	// Relación de Empresa con Empregado:
	public function empregado()
	{
		// 1 Empresa ten un ou varios empregados
		// $this fai referencia ao obxecto que tenhamos nese momento de Empresa.
		return $this->belongsToMany('App\Empregado')->withTimestamps()->withPivot('idEmpo');
	}
}