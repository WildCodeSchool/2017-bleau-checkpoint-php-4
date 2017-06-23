<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{

    /**
     * Enleve les espaces au début et à la fin de la chaine $chaine.
     *
     * @param string $chaine
     * @return string
     */
    public function trim(string $chaine) : string
    {
        // On découpe notre chaine
        $str = str_split($chaine, 1);

        $chaine = "";

        /* Booléan pour savoir si on trouvé une lettre,
           soit en partant de la gauche, soit en partant de la droite */
        $checkRight = false;
        $checkLeft = false;

        /* On parcourt de gauche à droite jusqu'à tomber sur la première lettre
          dont on récupère l'index correspondant dans le tableau
           On met le booléan à true pour dire qu'on a trouvé la première lettre
           et ainsi arrêter la boucle.
        */
        for($i = 0; $i < count($str); ++$i) {
            if($str[$i] != " " && $checkRight == false){
                $firstLetterIndex = $i;
                $checkRight = true;
            }
        }

        /* On parcourt de droite à gauche jusqu'à tomber sur la dernière lettre
          dont on récupère l'index correspondant dans le tableau
           On met le booléan à true pour dire qu'on a trouvé la dernière lettre
           et ainsi arrêter la boucle.
        */
        for($i = count($str)-1; $i >= 0; --$i) {
            if($str[$i] != " " && $checkLeft == false){
                $lastLetterIndex = $i;
                $checkLeft = true;
            }
        }

        /* On constitue une nouvelle chaine en commençant par le premier index
            et en terminant par le dernier index
        */
        for($i = $firstLetterIndex; $i <= $lastLetterIndex; ++$i){
            $chaine .= $str[$i];
        }

        return $chaine;
        // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)
    }
}
