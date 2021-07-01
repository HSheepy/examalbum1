<?php 

namespace Controllers;

class Comments extends Controller{

    protected $modelName = \Model\Comments::class;









/**
 * 
 * 
 * 
 * Permet d'ajouter un commentaire a l'album
 */


        public function create(){

            $formulaireAAfficher = true;

            if(!empty($_POST['description']) && !empty($_POST['image']) 
            && !empty($_POST['albumId']) && ctype_digit($_POST['albumId'])){

                $formulaireAAfficher = false;
            }


            if($formulaireAAfficher){

                $album_id = null;

                $comment_id = null;

                $modeEdition = null;

                $comment = null;


                if(!empty($_POST['albumId']) && ctype_digit($_POST['albumId'])){
                    $album_id = $_POST['albumId'];
                }

                if(!empty($_POST['commentId']) && ctype_digit($_POST['commentId'])){
                    $comment_id = $_POST['commentId'];
                    $modeEdition = true;

                }


                if($modeEdition){
                    $comment = $this->model->find($comment_id, $this->modelName);
                    $descriptionComment = $comment->description;
                    $titreDeLaPage = "Editer $descriptionComment";
                    \Rendering::render('comments/create',compact('comment','titreDeLaPage'));
                
                }else{

                    $titreDeLaPage = "Nouveau Commentaire";
                    \Rendering::render('comments/create',compact('comment', 'titreDeLaPage'));
                
                    }else{

                    $description = htmlspecialchars($_POST['description']);
                    $image = htmlspecialchars($_POST['image']);
                    $album_id = $_POST['albumId'];

                    $this->model->insert($description, $image, $album_id);
                    \Http::redirect("index.php?controller=album&task=show&id=$album_id");
                }
            
        }




            /**
             * 
             * 
             * Mettre a jour un commentaire
             */
        
        
        
            
        public function edit(){


            $description = null;

            $image = null;

            $album_id = null;

            $comment_id = null;


            if(!empty($_POST['description']) && !empty($_POST['image']) 
            && !empty($_POST['albumId']) && ctype_digit($_POST['albumId'])
            && !empty($_POST['commentId']) && ctype_digit($_POST['commentId'])){

                $comment_id = $_POST['commentId'];
                $description = $_POST['description'];
                $album_id = $_POST['albumId'];
                $image = $_POST['image'];

                if(!$description || !$image || !$comment_id || !$album_id){
                    die('Rempli correctement le formulaire !')
                }

                $this->model->update($description, $image, $comment_id);

                Http::redirect("index.php?controller=album&task=show&id=$album_id")
            }
        }



        /**
         * 
         * 
         * 
         * Supprimer un commentaire
         */
        
        public function suppr() : void {

            $comment_id = null;

            if(!empty($_POST['commentIdASupprimer']) && ctype_digit($_POST['commentIdASupprimer'])){

                $comment_id = $_POST['commentIdASupprimer'];
            }

        $comment = $this->model->find($comment_id, $this->modelName);

        if(!$comment){

            die("Ce commentaire n'existe pas");
        }

        $this->model->delete($comment_id);


        Http::redirect("index.php?controller=album&task=show&id=$comment->$album_id");
        }
        
        



}