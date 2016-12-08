<?php
session_start();
//require_once("util/fonctions.inc.php");
require_once("util/class.pdoChampionnatGym.php");
//include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoChampionnatGym::getPdoChampionnatGym();

switch($uc)
{
	case 'voirclubs':
		{include("controleurs/c_voirclubs.php");break;}

	case 'gererJuges':
		{include("controleurs/c_gererJuges.php");break;}

	case 'affecterJuges':
		{include("controleurs/c_affecterJuges.php");break;}
}



//include("vues/v_pied.php") ;
?>