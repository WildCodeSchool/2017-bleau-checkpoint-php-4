<?php

namespace AppBundle\Entity;

/**
 * Panier
 */
class Panier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomProduit;

    /**
     * @var int
     */
    private $quantite;

    /**
     * @var int
     */
    private $prix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Panier
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Panier
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Panier
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

