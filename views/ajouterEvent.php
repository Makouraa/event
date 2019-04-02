<?php
include "../entities/event.php";
include "../core/eventCore.php";

 if (isset($_POST['id']) and isset($_POST['titre'])  and isset($_POST['adresse']) and isset($_POST['date']) and isset($_POST['heure']) and isset($_POST['type'])  ) 
 {
	// $eventt = new Event($_POST['id'],$_POST['titre'],$_POST['description'],$_POST['adresse'],$_POST['date'],$_POST['heure'],$_POST['type'] );
	 $produit1=new Event($_POST['id'],$_POST['titre'],$_POST['description'],$_POST['adresse'],$_POST['date'],$_POST['heure'],$_POST['type']);

	$eventcore=new EventCore();
	$eventcore->AjouterEvent($produit1);
	header('location: event.html');
	// echo "$_POST['id']";
 }
else
{
	echo "Vérifier les champs";
}

?>