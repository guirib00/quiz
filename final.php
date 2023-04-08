<?php
session_start();
?>
<meta charset="utf-8">
<h1>Parabéns o questionario todo foi repondido</h1>
<h2 style="text-align: center;">Sua nota foi</h2> <fieldset style="text-align: center; font-weight: bold; font-size: 30px;"><?php echo $_SESSION['pontos']; ?></fieldset>
<br>
<br>
Se deseja voltar e responder o questionario novamente <a href="index.php">clique aqui</a>
<br>

