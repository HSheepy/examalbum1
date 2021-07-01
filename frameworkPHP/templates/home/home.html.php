<p>coucou je suis home</p>

<!-- Action dans le formulaire qui récupère la demande dans Model/App et l'instancie dans home -->
<form action="index.php?controller=home&task=index" method="post">

<div class="form-group"></div>                     
<textarea name="messageChangeable"></textarea>
<button type="submit">Envoyer</button>
</form>
<h3><?php echo $message ?></h3>
<h5><?php echo $messageChangeable ?></h5>

<a href="index.php?controller=album&task=index" class="btn btn-success">Accéder a l'examen</a>