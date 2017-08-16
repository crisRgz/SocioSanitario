<?php
// usa modelo Empresa.
use App\Empresa;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmpresaSeeder extends Seeder
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
			// Cando chamamos ao método create do Modelo Empresa
			Empresa::create(
				[
					'CIF'=>$faker->regexify('[0-9]{8}[^AEIOU]{1}'),
	             	'nome'=>$faker->word,
	            	'nomeContacto'=>$faker->name($gender = 'male'|'female'),
	             	'direccion'=>$faker->address,
	            	'telefono'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
	            	'lat'=>$faker->latitude($min = 41.49, $max = 43.47),
	            	'long'=>$faker->longitude($min = 6.42, $max = 9.18)
				]
			);
		}

    }
}
