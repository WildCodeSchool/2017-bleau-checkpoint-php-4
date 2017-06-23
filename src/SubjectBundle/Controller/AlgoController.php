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
        $tab = str_split($chaine,1);

            while ($tab[0] == " " || end($tab) == " ") {
            if($tab[0] == " ")
            {
                unset($tab[0]);
            }
            elseif (end($tab) == " ")
            {
                array_pop($tab);
            }
            reset($tab);
        }

        return (implode($tab, ''));

    }
}
