<?php
session_start();
?>
<meta charset="utf-8">
<form method="post">
	<fieldset>
		<legend>Pergunta 3</legend>
		Qual desses é um time da bundesliga? 
		<br>
		<br>
		Chelsea<input type="radio" name="p1" value="0"><br>
		Corinthians<input type="radio" name="p1" value="0"><br>
		Bayern de Munich<input type="radio" name="p1" value="1"><br>
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
		case 4:
			header('location: p4.php');
			break;
		case 5:
			header('location: p5.php');
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
	header('location: p4.php');
	$_SESSION['x']=$_SESSION['x']+1;
}

?>
