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
  			<form method="post" action="minichat_post.php">
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
<? 
include ("ChatThread.php");
?>
		</fieldset>
	</section>

</body>

</html>