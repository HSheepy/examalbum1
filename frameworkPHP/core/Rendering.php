<?php


class Rendering

{


        /**
         * 
         * genere le rendu de données interpolées dans un template
         * 
         * @param string $template
         * @param array $donnees
         * 
         */
        public static function render(string $template, array $donnees):void
        {


            extract($donnees);
            // extract vérifie chaque clé pour contrôler si elle a un nom de variable, 
            //elle pense a check si y'a des collisions aussi
        
            ob_start();
                    // J'active la mémoire tampon

            require_once "templates/".$template.".html.php";
        
            
            $contenuDeLaPage = ob_get_clean();
                   //Et là je la désactive la merveilleuse mémoire tampon en gardant les données
            
            require_once "templates/layout.html.php";

        }


}