<?
$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$NewMessage = $bdd->prepare('INSERT INTO minichat(Pseudo, Message) VALUES(:Pseudo, :Message)');
$NewMessage->execute(array(
	'Pseudo'=> ($_POST['PseudoName']),
	'Message'=> ($_POST['MessageContent'])
	));
	
if (!isset($_POST['PseudoNames'])) AND (!isset($_POST['MessageContent']))
	{
		echo "Veuillez remplir les deux champs pour rejoindre le miaou"
	}
else
{
	echo "Miaou! "
}

header('Location: minichat.php')
?>

							