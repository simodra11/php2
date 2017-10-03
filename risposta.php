<!DOCTYPE HTML>
<html>
<head>
<title>Ordina articolo</title>
</head>
<body>
<h2>Conferma ordine</h2>
<hr />
<?php
$articolo = $_GET["articolo"];
$qarticolo = $_GET["qarticolo"];
$prezzo = $_GET["prezzo"];
echo "La richiesta di $articolo $qarticolo è stata registrata. <br />";
echo "con il prezzo di $prezzo. <br />";
echo "La richiesta di ordine è arrivata <br />";
echo "alle ore ", date("H:i:s"), " del giorno: ", date("d-m-Y");
?>
</body>
</html> 
