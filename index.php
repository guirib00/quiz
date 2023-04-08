<meta charset="utf-8">
<form method="post">
	<label for="usuario">Nome:
		<input type="text" name="nome">
	</label>
	<br>
	<label for="senha">Email:
		<input type="email" name="email">
	</label>
	<br>
	<button>Entrar</button>
</form>
<?php
session_start();
$_SESSION ['x']= 1;
if ($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$_SESSION['nome'] = $nome;
	$_SESSION['email'] = $email;
	Header('location: p1.php');
} 
?>