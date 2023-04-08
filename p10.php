<?php
session_start();
?>
<meta charset="utf-8">
<form method="post">
	<fieldset>
		<legend>Pergunta 10</legend>
		Onde foi criado o futebol
		<br>
		<br>
		Brasil<input type="radio" name="p1" value="0"><br>
		Inglaterra<input type="radio" name="p1" value="1"><br>
		Argentina<input type="radio" name="p1" value="0"><br>
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
}
if ($_POST) {
	$resp=$_POST['p1'];
	if ($resp == "1") {
		$_SESSION['pontos']=$_SESSION['pontos']+1;
	}
	header('location: final.php');
	$_SESSION['x']=$_SESSION['x']+1;	
}
?>
