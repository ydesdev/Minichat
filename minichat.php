<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$error = "";
if (!empty($_POST['PseudoName']) && !empty($_POST['MessageContent'])) {

	$NewMessage = $bdd->prepare('INSERT INTO minichat(Pseudo, Message) VALUES(:Pseudo, :Message)');
	$NewMessage->execute(array(
	'Pseudo'=> ($_POST['PseudoName']),
	'Message'=> ($_POST['MessageContent'])
	));
}	else {

	if(isset($_POST['PseudoName'])){
     $error =  "Veuillez entrer un message";
	}
}	

$ChatThread = $bdd->query('SELECT UPPER(Pseudo) AS Pseudo_maj, Message FROM minichat ORDER BY ID DESC LIMIT 10');



?>

<!DOCTYPE html>

<html>

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
  	<fieldset>
  		<legend> Participer au miaou </legend>
  			<form method="post" action="minichat.php">
  				<p style="color:red;"> <?= $error ?></p>
  				<label for="PseudoName">Pseudo: </label><br/>
  				<input type= "text" name="PseudoName" id="PseudoNameField" /><br/>
  				<label for="MessageContent"> dit: </label>
  				<input type="text" name="MessageContent" id="MessageContent" />
  				<input type="submit" value="Miaou"/> 
  			</form>
  	</fieldset>
  </section>

  <section class="Suivre">
  		<fieldset>
  			<legend> Suivre le miaou: </legend>


<?php while($LastTenMessages = $ChatThread->fetch()) : ?>
	<p>
	<strong><?= htmlspecialchars($LastTenMessages['Pseudo_maj']); ?></strong> :
	<?= htmlspecialchars($LastTenMessages['Message'])?>
	</p>
<?php endwhile; ?>
		</fieldset>
	</section>

</body>

</html>