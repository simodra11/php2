<!DOCTYPE HTML>
<html>
<head>
<title>Registrazione utente</title>
</head>
<body>
<h2>Conferma registrazione</h2>
<hr />
<?php
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
echo "La richiesta di $nome $cognome è stata registrata. <br />";
echo "con l'indirizzo di posta elettronica $email. <br />";
echo "La richiesta di accesso al servizio è arrivata <br />";
echo "alle ore ", date("H:i:s"), " del giorno: ", date("d-m-Y");
?>
</body>
</html> 
