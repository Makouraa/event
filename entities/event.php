<?php
class Event
{
	private $id;
	private $titre;
	private $description;
	private $adresse;
	private $date;
	private $heure;
	private $type;


	function __construct($id,$titre,$description,$adresse,$date,$heure,$type)
	{
		$this->id=$id;
		$this->titre=$titre;
		$this->description=$description;
		$this->adresse=$adresse;
		$this->date=$date;
		$this->heure=$heure;
		$this->type=$type;
	}

	function getId()
	{
		return $this->id;
	}
	function getTitre()
	{
		return $this->titre;
	}
	function getDescription()
	{
		return $this->description;
	}
	function getAdresse()
	{
		return $this->adresse;
	}
	function getDate()
	{
		return $this->date;
	}
	function getHeure()
	{
		return $this->heure;
	}
	function getType()
	{
		return $this->type;
	}
}


?>