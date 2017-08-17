<?php
// usa modelo Tratamento.
use App\Tratamento;

// indicamos que utilice Faker.
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TratamentoSeeder extends Seeder
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
			// Cuando llamamos al método create del Modelo Tratamento
			// se está creando una nueva fila en la tabla.
			Tratamento::create(
				[
					'dateTimeIni'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
			        'dateTimeFin'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
			        'realizado'=>$faker->boolean($chanceOfGettingTrue = 50),
			        'causa'=>$faker->realText($maxNbChars = 150, $indexSize = 2),
        			'idUsu'=>$faker->numberBetween(1,8),
					'idServ'=>$faker->numberBetween(1,5),
					'idEmpo'=>$faker->numberBetween(1,5),
					'idEmpa'=>$faker->numberBetween(1,4)
				]
			);
		}
    }
}

