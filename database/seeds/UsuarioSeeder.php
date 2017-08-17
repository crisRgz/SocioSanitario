<?php
// usa modelo Usuario.
use App\Usuario;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsuarioSeeder extends Seeder
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
		for ($i=0; $i<8; $i++)
		{
			// Cuando llamamos al método create del Modelo Usuario
			// se está creando una nueva fila en la tabla.
			Usuario::create(
				[
					'NIF'=>$faker->regexify('[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}'),
					'nome'=>$faker->firstName($gender = 'male'|'female'),
					'apelido1'=>$faker->lastName,
					'apelido2'=>$faker->lastName,
					'direccion'=>$faker->address,
					'telefono'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'nomeCont'=>$faker->name($gender = 'male'|'female'),
					'tlfCont'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'idFam'=>$faker->numberBetween(1,5),
					'lat'=>$faker->latitude($min = 41.7, $max = 43.8),
	            	'long'=>$faker->longitude($min = -6,7, $max = -9,3)
				]
			);
		}
    }
}