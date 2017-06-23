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

        // je pence que l'idée est bonne mais j'arive pas éviter
        // la suppretion des espace entre les mots

        for ($i = 0; $i < count($chaine); ++$i) {

            // doit suppr les espace du début
            if ($i <= 1 ) {
                $test = str_replace(' ', '', $chaine);
            }

            //doit suppr les espace de fin
            elseif ($i == $chaine) {
                $test = str_replace(' ', '', $chaine);
            }
        }

        dump($test);






        ////////AUTRE TEST////////

        /*$test = str_replace(' ', '', $chaine);

        dump($test);*/

        //dump ('' .chop($chaine) . '');

        /*
        $chaine= str_replace(' ','',$string);
        dump($chaine);*/

    }
}
