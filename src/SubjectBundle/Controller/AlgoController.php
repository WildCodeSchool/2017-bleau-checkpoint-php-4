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
        $tab = str_split($chaine);
        $b = 0;
        $c = 0;
        $e = 0;
        $g = 0;
        $ba = 0;

        for ($i = 0; $i < count($tab); $i++) {

            if ($tab[$i] == " " && $i == 0)
            {
                $b += 1;
            }
            elseif ($c == 0 && $tab[$i] == " " && $tab[$i-1] == " ") {
                $b += 1;

            }
            else
            {
                $c += 1;
            }
        }
        for ($d = count($tab)-1; $d > 0; $d--) {

            if ($tab[$d] == " " && $d == count($tab)-1)
            {
                $g += 1;
            }
            elseif ($e == 0 && $tab[$d] == " " && $tab[$d+1] == " ") {
                $g += 1;
            }
            else
            {
                $e += 1;
            }
        }

        if($g == 0)
        {
            $result = substr($chaine, $b);
        }
        else{
            $result = substr($chaine, $b , -$g);

        }
        //, -$g

        return $result;
// Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)
 }
}
