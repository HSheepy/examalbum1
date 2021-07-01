<?php 

namespace Controllers;

class Album extends Controller {

    protected $modelName = \Model\Album::class;

    /**
     * 
     * 
     * Affiche tous les albums
     */

        public function index(){

            $album = $this->model->findAll($this->modelName);

            $titreDeLaPage = "Les différents albums";

            $band = "Nom du groupe";

            $name = "Nom de l'album";


            \Rendering::render('albums/albums', compact('album','titreDeLaPage', 'band','name'));
        }

    

    /**
     * 
     *
     * Affiche un album
     */


        public function show(){

            $albumId=null;

            if(!empty($_GET['id']) && ctype_digit($_GET['id'])){

                $albumId = $_GET['id'];

            }
            if(!$albumId){
                die('Cet album est inexistant dans notre base de données');
            }

            $album = $this->model->find($albumId, $this->modelName);

            $titreDeLaPage = $album->model;

            $comments = $modelComments->findAllByAlbum($albumId, \Model\Comments::class);

            \Rendering::render('albums/album',compact('album', 'comments', 'titreDeLaPage','band','name'));
        }



        /**
         * 
         * 
         * Permet de supprimer un album
         */
    
        public function suppr(){

            $album_id = null;


            if(!empty($_GET['id']) && ctype_digit($_GET['id'])){

                $album_id = $_GET['id'];

            }



            if(!$album_id){
                die("Pas le bon ID pour l'album, désolé");
            }


            $this->model->delete($album_id);


            Http::redirect("index.php?controller=album&task=index");
        }
    
    
    
    
    
        }