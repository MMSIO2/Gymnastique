
<?php
$action = $_REQUEST['action'];

switch($action)
{
	case 'voirRepas':
	{

  		$lesLibelles = $pdo->getLesLibelleRepas();

  		if (isset($_POST['repas']))
			{
  		$repas = $_POST['repas'];
		$LesNombres= $pdo->getLesNBRepas($repas);
			}
  		include("vues/v_repas.php");


		break;
	}

}
?>