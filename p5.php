<?php
session_start();
?>
<meta charset="utf-8">
<form method="post">
	<fieldset>
		<legend>Pergunta 5</legend>
		Em qual desses times o Neymar <b>NÃO</b> jogou? 
		<br>
		<br>
		Corinthians<input type="radio" name="p1" value="1"><br>
		Santos<input type="radio" name="p1" value="0"><br>
		Barcelona<input type="radio" name="p1" value="0"><br>
		<button>Responder</button>
	</fieldset>
</form>
<?php  
	switch($_SESSION['x']){
		case 1:
			header('location: p1.php');
			break;
		case 2:
			header('location: p2.php');
			break;
		case 3:
			header('location: p3.php');
			break;
		case 4:
			header('location: p4.php');
			break;
		case 6:
			header('location: p6.php');
			break;
		case 7:
			header('location: p7.php');
			break;
		case 8:
			header('location: p8.php');
			break;
		case 9:
			header('location: p9.php');
			break;
		case 10:
			header('location: p10.php');
			break;
	}
if ($_POST) {
	$resp=$_POST['p1'];
	if ($resp == "1") {
		$_SESSION['pontos']=$_SESSION['pontos']+1;
	}
	header('location: p6.php');
	$_SESSION['x']=$_SESSION['x']+1;
}
?>
