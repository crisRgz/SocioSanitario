<?php
// usa modelo Tratamento.
use App\Tipo;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TipoSeeder extends Seeder
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
		for ($i=0; $i<3; $i++)
		{
			// Cuando llamamos al método create del Modelo Tipo
			// se está creando una nueva fila en la tabla.
			Tipo::create(
				[
					'tipo'=>$faker->word
				]
			);
		}
    }
}
