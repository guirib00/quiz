<meta charset="utf-8">
<form method="post">
	<fieldset>
		<legend>Pergunta 1</legend>
		Quem foi Pelé?
		<br>
		<br>
		Jogador de futebol<input type="radio" name="p1" value="1"><br>
		Jogador de Volei<input type="radio" name="p1" value="0"><br>
		Presidente do Brasil<input type="radio" name="p1" value="0"><br>
		<button>Responder</button>
	</fieldset>
</form>
<?php  
session_start();
if ($_POST) {
	$_SESSION['pontos']= 0;
	$resp=$_POST['p1'];
	if ($resp == "1") {
		$_SESSION['pontos']=$_SESSION['pontos']+1;
	}
	$_SESSION['x']=$_SESSION['x']+1;
	header('location: p2.php');
}