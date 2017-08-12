<?php
namespace ci\classes;

abstract class Juego
{
	protected $nivel;
	
	public function __construct($nivel)
	{
		$this->nivel = $nivel;
	}
	
	public function getNivel()
	{
		return $this->nivel;
	}
	
	public function setNivel($nivel)
	{
		$this->nivel = $nivel;
	}
	
	abstract public function play();
}