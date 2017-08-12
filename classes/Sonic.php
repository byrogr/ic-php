<?php 
namespace ci\classes;

class Sonic extends Juego
{
	public function __construct($nivel)
	{
		parent::__construct($nivel);
	}
	
	public function play()
	{
		return 'Juego Sonic en nivel: ' . parent::getNivel();
	}
}