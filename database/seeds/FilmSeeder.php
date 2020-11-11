<?php

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{

	/*#############################################################
	Fuente pelis: https://www.espinof.com/listas/peliculas-esperadas-2020
	##############################################################*/
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
     DB::table('films')->truncate();

       DB::table('films')->insert([
		'namefilm'=> 'Jojo Rabbit',
		'desfilm'=> 'Tras arrasar en taquilla con Thor: Ragnarok, Taiki Waititi vuelve con una película más pequeña que cuenta la improbable amistad entre un niño nazi y la adolescente judía que su padre ha refugiado en su casa. Una comedia diferente con el gancho de la presencia de Scarlett Johansson, aunque luego el verdadero peso recaiga en sus jóvenes protagonistas.',
		'fecEst'=> '2020-01-17',
		'maiuse'=> 'jronaldcll@gmail.com',
	]);

       DB::table('films')->insert([
		'namefilm'=> 'Bad Boys for Life',
		'desfilm'=> 'Muchos años han esperado los fans de la franquicia Dos policías rebeldes para ver juntos de nuevo a los personajes interpretados por Will Smith y Martin Lawrence. En su contra que Michael Bay no repite tras las cámaras, pero confiemos en que Adil El Arbi y Bilall Fallah sepan estar a la altura.',
		'fecEst'=> '2020-01-17',
		'maiuse'=> 'jronaldcll@gmail.com',
	]);

      DB::table('films')->insert([
		'namefilm'=> 'Aves de presa',
		'desfilm'=> 'Margot Robbie como Harley Quinn fue una de las cosas más aplaudidas de Escuadrón suicida y ahora tiene la oportunidad de volver a brillar sin contar a su lado con el decepcionante Joker interpretado por Jared Leto. En esta ocasión estará acompañada por Mary Elizabeth Winstead y Ewan McGregor.',
		'fecEst'=> '2020-02-07',
		'maiuse'=> 'jronaldcll@gmail.com',
	]);

      DB::table('films')->insert([
		'namefilm'=> 'Sonic, la película',
		'desfilm'=> 'Muy marcada por el polémico diseño del erizo protagonista que finalmente fue alterado. Eso no quita para que el contenido vaya a ser el mismo, pero la idea de volver a ver a un Jim Carrey desatado suena de lo más prometedor.',
		'fecEst'=> '2020-02-14',
		'maiuse'=> 'jronaldcll@hotmail.com',
	]);

      DB::table('films')->insert([
		'namefilm'=> 'Bloodshot',
		'desfilm'=> 'Vin Diesel no protagonizada una película alejada de una franquicia desde la horrible El último cazador de Brujas. Aquí apuesta por un cómic de superhéroes sobre un marine resucitado por unos científicos y mejorado a través de la nanotecnología para convertirse en un superso',
		'fecEst'=> '2020-01-17',
		'maiuse'=> 'jronaldcll@hotmail.com',
	]);

    DB::table('films')->insert([
		'namefilm'=> 'El hombre invisible',
		'desfilm'=> 'El Dark Universe nació ya muerto con The Mummy, pero ahora Blumhouse recupera uno de los personajes más míticos de los monstruos de Universal. Con Leigh Whannell tras las cámaras y Elizabeth Moss delante de ellas, se perfila como una de las grandes películas de terror comercial del año.',
		'fecEst'=> '2020-01-17',
		'maiuse'=> 'jronaldcll@hotmail.com',
	]);



    }
}
