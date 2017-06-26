<?php

namespace AppBundle\Services;

use AppBundle\Entity\Panier;

/**
 * Class CalculatorService
 * @package AppBundle\Services
 */
class CalculatorService
{
	/**
	 * @param Panier $panier
	 * @return array
	 */
	public function calculate(Panier $panier): array
	{
		$htTotal = $panier->getAmount() * $panier->getPrice();
		$ttcTotal = $htTotal + ($htTotal * ($panier->getTva() / 100));

		$result = array(
			'tva' => $ttcTotal,
			'ht' => $htTotal,
			'name' => $panier->getName()
		);
		return $result;
	}
}