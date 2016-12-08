<h1>
	CLUBS
</h1>
<body>

<form method="post">
    <h2>consultation des clubs</h2>
	<table>
<form method="post" action="traitement.php">
   <p>
       <select name="club" id="club">
               <option value=""></option>

       </select>
   </p>
</form>
	</table>
    <p /><input type="submit" value = "valider" /> 
    <a href=index.php?uc=voirclubs&numclub=<?php echo $lenumclub ?>&produit=<?php echo $id ?>
 </form>

<?php
foreach( $lesLignes as $laLigne)
{
	$equipefa = $laLigne['NBEQUIPEFA'];
	$nbgymfa = $laLigne['NBGYMFA'];
	$equipefj =$laLigne['NBEQUIPEFJ'];
	$nbgymfj = $laLigne['NBGYMFJ'];
	$equipef1a =$laLigne['NBEQUIPEF1A'];
	$nbgymf1a = $laLigne['NBGYMF1A'];
	$equipef1j =$laLigne['NBEQUIPEF1J'];
	$nbgymf1j = $laLigne['NBGYMF1J'];
}
	?>	



</body>