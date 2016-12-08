<h1>
	REPAS
</h1>
<body>


    <h2>consultation des repas</h2>
	<table>
<form method="post" action="index.php?uc=voirRepas&action=voirRepas">
   <p>


       <select name="repas" id="repas">
<?php
   foreach( $lesLibelles as $leLibelle) 
{
	$nomrepas = $leLibelle['LIBELLEJR'];
	$IDJR = $leLibelle['IDJR'];


?>
       <option value="<?php echo $IDJR; ?>"><?php echo $nomrepas; ?></option>
<?php
}
?>
       </select>

   </p>

	</table>
    <p /><input type="submit" value = "valider" /> 
     </form>

<?php
	if (isset($_POST['repas'])) 
{
?>



<?php
foreach( $LesNombres as $LeNombre) 
{
	$idJour = $LeNombre['IDJR'];
	$libellejour = $LeNombre['LIBELLEJR'];
	$nbRepasJuges = $LeNombre['NOMBRE_J'];
	$nbRepasGym = $LeNombre['NOMBRE_G'];

}
?><h2><?php echo $libellejour;
	?>	
</P>
<?php
		$nbTotal=$nbRepasJuges+$nbRepasGym;
?>

<table border=3px>
	<tr>
		<th>
			Nombre de Juges
		</th>
		<th>
			Nombre de Gym
		</th>
		<th>
			Nombre Total de personnes
		</th>
	</tr>	
	<tr>
		<td>
			<?php echo $nbRepasJuges; ?>
		</td>
		<td>
			<?php echo $nbRepasGym; ?>
		</td>
		<td>
			<?php echo $nbTotal; ?>
		</td>
	</tr>


<?php
}
?>
</body>