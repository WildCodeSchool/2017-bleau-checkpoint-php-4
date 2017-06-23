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
        $tab_1 = explode(" ", $chaine);

        for ($i = 0; $i <= count($tab_1) - 1; $i++)
        {
            $first = current($tab_1);
            $last = end($tab_1);
            if ($first == " " OR $last == " ")
            {
                return str_replace(" ", "", $tab_1);
            }
            else
            {
                return $tab_1;
            }
        }
        $tab_2 = implode($tab_1);
        return $tab_2;
    }
}
