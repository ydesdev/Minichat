<?
$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$NewMessage = $bdd->prepare('INSERT INTO minichat(Pseudo, Message) VALUES(:Pseudo, :Message)');
$NewMessage->execute(array(
	'Pseudo'=> ($_POST['PseudoName']),
	'Message'=> ($_POST['MessageContent'])
	));
	
if (!isset($_POST['PseudoNames']))
	{?>

		<head>

        <meta charset="utf-8" />

        <link rel="stylesheet" href="styleminichat.css" />

        <title>Minichat</title>

</head>
<body>
    <header>
		<img src="minicat.jpg" alt="Petit chat pas content" class="ImageChat"/>
    	<div class="titreprincipal"> 
    	<h1> Le chat <br/> Le Miaou </h1>
    	</div>	
    </header>
     <section class="Participer">
		<h1> Veuillez Ajouter Votre Pseudo</h1>
     </section>
	<?}
else
{
	echo "Miaou! ";
}

header('Location: minichat.php')
?>

							