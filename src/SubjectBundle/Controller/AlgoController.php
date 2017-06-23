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
        // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)
        $divide = explode(' ',$chaine);

        foreach ($divide as $key => $value)
        {
            if (empty($value)){
                unset($divide[$key]);
            }
        }
        $fuuusion = implode(' ', $divide);
        return  $fuuusion;

    }

}
