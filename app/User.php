<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','rol'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relación de User con Familiar:
    public function familiar()
    {
        // 1 user pode definir 1 ou mais familiares
        // $this fai referencia ao obxecto que tenhamos nese momento de user.
        return $this->hasMany('App\Familiar');
    }

    // Relación de User con Empregado:
    public function empregado()
    {
        // 1 user define a un ou máis empregados
        // $this fai referencia ao obxecto que tenhamos nese momento de user.
        return $this->hasMany('App\Empregado');
    }

     // Relación de User con Empresa:
    public function empresa()
    {
        // 1 user define a un ou máis empresas
        // $this fai referencia ao obxecto que tenhamos nese momento de user.
        return $this->hasMany('App\Empresa');
    }
}
