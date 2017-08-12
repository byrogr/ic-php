<?php
namespace ci\classes;

class ConsolaIC2
{	
	public function __construct()
	{
		echo 'Se enciende la consola';
	}
	
	public function jugar(Juego $juego)
	{
		return $juego->play();
	}
}
