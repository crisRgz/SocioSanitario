<?php
// usa modelo User.
use App\User;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Creamos una instancia de Faker
		$faker = Faker::create();

		// Creamos un bucle para cubrir 5 relacions:
		for ($i=0; $i<10; $i++)
		{
			// Cuando llamamos al método create del Modelo User
			// se está creando una nueva fila en la tabla.
	    	User::create(
	    		[
	    			'name'=>$faker->name,
			        'email'=>$faker->email,
			        'password'=>$faker->md5('abc123.'),
			        'rol'=>$faker->boolean($chanceOfGettingTrue = 50)
			   ]
			);
		}
    }
}
