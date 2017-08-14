<?php namespace App;
//---------------- N ------------------------

use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
	// Nome da taboa en MySQL.
	protected $table='tratamentos';

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('dataIni','dataFin','realizado');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id       -> autoincremental
	dataIni  -> data e hora de inicio do servizo
	dataFin  -> data e hora de fin do servizo
	recibido -> boolean => saber si o servizo foi ou non prestado, sexa vacacións/ausencia/emerxencia/etc.
	*/
	
	// Aquí ponhemos os campos que non queremos que se devolvan nas consultas.
	protected $hidden = ['created_at','updated_at']; 

	// Relación de Tratamento con Familiar:
	public function usuario()
	{
		// 1 Tratamento é recibido por un Usuario.
		// $this hace referencia al objeto que tengamos en ese momento de Usuario.
		return $this->belongsTo('App\Usuario');
	}

	// Relación de Tratamento con Empregado:
	public function empregado()
	{
		// 1 Tratamento cunha hora de ini e fin é realizado por un ou varios empregados.
		// $this fai referencia ao obxecto que tenhamos nese momento de Empregado.
		return $this->belongsToMany('App\Empregado');
	}
}