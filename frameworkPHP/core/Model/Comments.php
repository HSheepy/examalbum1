<?php 

namespace Model;

class Comments extends Model {

    protected $table = "comments";

    public $id;

    public $description;

    public $image;

    public $album_id;


    /**
     * 
     * Ajouter un commentaire a un album
     * @param string $description
     * @param string $image 
     * @param int albumId
     */

     public function insert(string $description, string $image, int $albumId){

        $sql = $this->pdo->prepare("INSERT INTO comments (description, image, album_id, name) 
        VALUES (:description, :image, :albumId");

        $sql->execute([
            'description' => $description,
            'image' => $image,
            'albumId' => $albumId
        ]);


     }

}