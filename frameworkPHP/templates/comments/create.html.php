<?php if(!$comment){?>

<div class="container">
    <form class="form" action="index.php?controller=comments&task=create" method="POST">
        <div class="form-group"><textarea name="description" placeholder="Ecrivez votre commentaire" cols="30" rows="10"></textarea>
    </div>
        <input type="hidden" name="albumId" value="<?php echo $album_id ?>">
        <div class="form-group"><textarea name="image" placeholder="URL de votre image"  cols="30" rows="10"></textarea>
    </div>
        <div class="form-group"><button type="submit" class="btn btn-success">Envoyer</button>
    </div>

    </form>

<?php } else { ?>

<form class="form" action="index.php?controller=comments&task=edit" method="POST">
        <input type="hidden" name="commentId" value="<?php echo $comment->id?>">
        <input type="hidden" name="albumId" value="<?php echo $comment->velo_id?>">
                <div class="form-group">
                <textarea name="description" cols="30" rows="10"><?php echo $comment->description?>
                </textarea>
                </div>
                <div class="form-group"><textarea name="image" cols="30" rows="10"><?php echo $comment->image?></textarea>
            </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            </div>

        </form>
<?php } ?>