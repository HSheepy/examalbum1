<?php



class Database 
{


    public static function getPdo(){
//Instancie la connexion a la DB, faire attention a bien changer le user, mdp et la db
        $pdo = new PDO('mysql:host=localhost;dbname=examalbum','musique' ,'boomboom', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  ,
            PDO::ATTR_DEFAULT_FETCH_MODE  =>    PDO::FETCH_ASSOC          
          ]);

          return $pdo;

    }


}




