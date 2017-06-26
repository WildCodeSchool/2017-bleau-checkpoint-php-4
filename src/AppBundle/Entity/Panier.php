<?php

namespace AppBundle\Entity;

class Panier
{
	/**
	 * @var string $name
	 */
	private $name;

	/**
	 * @var int $amount
	 */
	private $amount;

	/**
	 * @var int $prive
	 */
	private $price;

	/**
	 * @var int $tva
	 */
	private $tva;

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * @param mixed $amount
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
	}

	/**
	 * @return mixed
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getTva()
	{
		return $this->tva;
	}

	/**
	 * @param mixed $tva
	 */
	public function setTva($tva)
	{
		$this->tva = $tva;
	}
}