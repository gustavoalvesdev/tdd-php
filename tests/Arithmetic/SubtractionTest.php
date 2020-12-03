<?php

declare(strict_types=1);

namespace TddPhp\Arithmetic;

use PHPUnit\Framework\TestCase;

/**
 * Class SubstractionTest
 * @author Gustavo Alves da Silva <contato@gustavoalvesdev.com.br>
 */
class SubtractionTest extends TestCase
{
    /**
     * Precondições para a execução dos testes
     *
     * @return void
     */
    public function assertPreConditions() : void
    {
        $this->assertTrue(class_exists('TddPhp\Arithmetic\Subtraction'));
    }

    /**
     * Testa o resultado da subtração de dois números
     *
     * @return void
     */
    public function testSubtractionOfTwoNumbers() : void
    {
        $subtraction = new Subtraction();
        $subtraction->setFirstNumber(10.0);
        $subtraction->setSecondNumber(2.0);

        $this->assertEquals(8.0, $subtraction->subtract());

        $subtraction = new Subtraction();
        $subtraction->setFirstNumber(25.0);
        $subtraction->setSecondNumber(4);

        $this->assertEquals(21.0, $subtraction->subtract());

        $subtraction = new Subtraction();
        $subtraction->setFirstNumber(25.0);
        $subtraction->setSecondNumber(3);

        $this->assertEquals(22, $subtraction->subtract());

    }

    /**
     * Valida o que acontece se a função subtract() 
     * recebe um zero em setFirstNumber() ou setSecondNumber()
     * @return void
     * 
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Parâmetro não pode ser zero
     */
    public function testValidatesIfZeroValueIsGiven() : void
    {
        $subtraction = new Subtraction();
        $subtraction->setFirstNumber(25.0);
        $subtraction->setSecondNumber(0.0);
        $subtraction->subtract();
    }
}
