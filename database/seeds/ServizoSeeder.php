<?php
// usa modelo Servizo.
use App\Servizo;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ServizoSeeder extends Seeder
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
			// Cuando llamamos al método create del Modelo Servizo
			// se está creando una nueva fila en la tabla.
			Servizo::create(
				[
					'nome'=>$faker->word,
					'descricion'=>$faker->word,
					'idTipo'=>$faker->numberBetween(1,3)
				]
			);
		}
    }
}