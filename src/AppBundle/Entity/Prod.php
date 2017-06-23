<?php
namespace AppBundle\Entity;

/**
 * Class Prod
 * @package AppBundle\Entity
 */
class Prod
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $quant;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * @param int $quant
     */
    public function setQuant(int $quant)
    {
        $this->quant = $quant;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix)
    {
        $this->prix = $prix;
    }


}