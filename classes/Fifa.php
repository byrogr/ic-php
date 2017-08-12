<?php
namespace ci\classes;

class Fifa extends Juego
{
	public function __construct($nivel)
	{
		parent::__construct($nivel);
	}
	
	public function play()
	{
		return 'Juego Fifa en nivel: ' . parent::getNivel();
	}
}