<?php namespace App;
//---------------- N N N ------------------------

use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
	// Nome da taboa en MySQL.
	protected $table='tratamentos';

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('dateTimeIni','dateTimeFin','realizado','causa','idUsu','idServ','idEmpo','idEmpa');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id       -> autoincremental
	dataIni  -> data e hora de inicio do servizo
	dataFin  -> data e hora de fin do servizo
	recibido -> boolean => saber si o servizo foi ou non prestado, sexa vacacións/ausencia/emerxencia/etc.
	idUsu    -> FK id usuarios
	*/

	// Aquí ponhemos os campos que non queremos que se devolvan nas consultas.
	protected $hidden = ['created_at','updated_at'];

	// Relación de Tratamento con Usuario:
	public function usuario()
	{
		// 1 Tratamento é recibido por un Usuario.
		// $this hace referencia al objeto que tengamos en ese momento de Usuario.
		return $this->belongsTo('App\Usuario');
	}

	// Relación de Tratamento con Empregado:
	public function empregado()
	{
		// 1 Tratamento é realizado por un empregado.
		// $this fai referencia ao obxecto que tenhamos nese momento de Empregado.
		return $this->belongsTo('App\Empregado');
	}

	// Relación de Tratamento con Servizos:
	public function servizo()
	{
		// 1 Tratamento dáo un servizo.
		// $this fai referencia ao obxecto que tenhamos nese momento de Servizo.
		return $this->belongsTo('App\Servizo');
	}
}