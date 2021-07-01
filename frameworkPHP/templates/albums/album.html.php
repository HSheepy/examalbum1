<div class="container text-center">

<h1>Vous êtes sur l'album : <?php echo $album->model?></h1>

<a href="index.php?controller=album&task=index" class="btn btn-success">Revenir à la liste des albums</a>


<div class="card text-center" style="width: 18rem;">
    <h2><?php echo $album->model?></h2>
  <img src="<?php echo $album->image?>" class="card-img-top" >
  <a href="index.php?controller=album&task=suppr&id=<?php echo $album->id?>" class="btn btn-danger">Supprimer cet album </a>
  <p> 
 


  </p>
</div>

<!-- Formulaire ajout album -->
<form action="index.php?controller=comments&task=create" method="POST">
<button type="submit" class="btn btn-primary" name="albumId" value="<?php echo $album->id?>">Nouvel album</button>
</form>

</div>



<?php if(!$comments) {?>

<h3>Pas encore de commentaire !</h3>

<?php }?>


<!-- Formulaire edition commentaire -->
<form action="index.php?controller=comments&task=create" method="POST">
    <input type="hidden" name="albumId" value="<?php echo $comment->album_id?>">
    <button type="submit" class="btn btn-warning" name="commentsId" value= "<?php echo $comment->id?>">Modifier le commentaire</button>
</form>

<!-- Form suppression commentaire -->
<form action="index.php?controller=comments&task=suppr" method="POST">
<button type="submit" class="btn btn-danger" name="commentIdASupprimer" value="<?php echo $comment->id?>">Supprimer ce commentaire </button>
</form>

<?php }?>