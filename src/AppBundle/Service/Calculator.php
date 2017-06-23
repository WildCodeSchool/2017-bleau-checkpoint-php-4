<?php
namespace AppBundle\Service;

/**
 * Class Calculator
 * @package AppBundle\Service
 */
class Calculator
{
    /**
     * @param int $value
     * @param int $price
     * @return float|int
     */
    public function tva(int $value, int $price)
    {
        $tva =  $price * $value / 100;
        $ttc = $price + $tva;

        $result = array('tva' => $tva, 'ttc' => $ttc, 'ht'=>$price);

        return $result;
    }
}