<?php foreach ($album as $album){?>

<div class="container">

<div class="card" style="width: 18rem;">
<h2><?php echo $album->model?></h2>
  <img src="<?php echo $album->image?>" class="card-img-top" >
  <a href="index.php?controller=album&task=show&id=<?php echo $album->id?>" class="btn btn-primary">Voir cet album</a>
    <a href="index.php?controller=album&task=suppr&id=<?php echo $album->id?>" class="btn btn-danger">Supprimer cet album </a>

</div>

</div>




<?php } ?>