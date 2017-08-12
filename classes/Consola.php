<?php

namespace ci\classes;

class Consola
{
	public function jugar()
	{
		$juego = new Sonic('facil');
		return $juego->play();
	}
}
