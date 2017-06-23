<?php

namespace AppBundle;

class Calculator{

    private $tva;

    private $pretaxAmount;

    private $posttaxAmount;


    public function calculate($tva, $quantity, $price)
    {
        $this->tva = $tva;
        $this->pretaxAmount = $quantity * $price;
        $this->posttaxAmount = $quantity * $price * (1+ ($this->tva / 100));

        return array(
            'Montant HT : ' . $this->pretaxAmount . ' €.',
            'Montant TTC (TVA à ' . $this->tva . ' %) : ' . $this->posttaxAmount . ' €.'
        );
    }


}