<?php

namespace ci\classes;

//require 'Sonic.php';
//require 'Fifa.php';

class Consola
{
	public function jugar()
	{
		$juego = new Sonic('facil');
		return $juego->play();
	}
}
