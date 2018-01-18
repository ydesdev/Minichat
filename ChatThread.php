
<?
$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$ChatThread = $bdd->query('SELECT UPPER(Pseudo) AS Pseudo_maj, Message FROM minichat ORDER BY ID DESC LIMIT 10');

while($LastTenMessages = $ChatThread->fetch())
	{
	echo '<p><strong>' . htmlspecialchars($LastTenMessages['Pseudo_maj']) . ' : " ' . htmlspecialchars($LastTenMessages['Message']) . ' "<br/>';  
	}

?>

