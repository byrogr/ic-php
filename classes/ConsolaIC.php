<?php
namespace ci\classes;

class ConsolaIC
{
	private $juego;
	
	public function __construct(Juego $juego)
	{
		$this->juego = $juego;
		
	}
	
	public function jugar()
	{
		return $this->juego->play();
	}
}

