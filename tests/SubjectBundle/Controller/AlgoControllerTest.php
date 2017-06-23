<?php

namespace tests\SubjectBundle\Controller;

use PHPUnit\Framework\TestCase;
use SubjectBundle\Controller\AlgoController;

class AlgoControllerTest extends TestCase
{
    /**
     * @var AlgoController
     */
    private $controller;

    public function setUp()
    {
        $this->controller = new AlgoController();
    }

    /**
     * @dataProvider dataToBeTrimed
     */
    public function testYourTrim(string $chaine) {

        $this->assertEquals (trim($chaine), $this->controller->trim($chaine));
    }

    public function dataToBeTrimed()
    {
        return [
            ['La premiere chaine'],
            [' La chaine 1'],
            ['La chaine 2 '],
            ['  La chaine 3'],
            ['La chaine 4  '],
            ['  La chaine 5  '],
            ['                        La derniere chaine.                      '],
        ];
    }
}
