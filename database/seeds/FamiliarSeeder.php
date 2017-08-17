<?php
// usa modelo Familiar.
use App\Familiar;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FamiliarSeeder extends Seeder
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
		for ($i=0; $i<5; $i++)
		{
			// Cuando llamamos al método create del Modelo Familiar 
			// se está creando una nueva fila en la tabla.
			Familiar::create(
				[
					'NIF'=>$faker->regexify('[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}'),
					'nome'=>$faker->firstName($gender = 'male'|'female'),
					'apelido1'=>$faker->lastName,
					'apelido2'=>$faker->lastName,
					'direccion'=>$faker->address,
					'telefono'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'CCC'=>$faker->regexify('[0-9]{4}-[0-9]{4}-[0-9]{2}-[0-9]{4}-[0-9]{4}-'),
					'idUser'=>$faker->numberBetween(6,10)
				]
			);
		}
    }
}