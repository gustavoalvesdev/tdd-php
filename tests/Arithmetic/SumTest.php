<?php 

declare(strict_types=1);

namespace TddPhp\Arithmetic;

use PHPUnit\Framework\TestCase;

/**
 * Class SumTest
 * @author Gustavo Alves da Silva <contato@gustavoalvesdev.com.br>
 */
class SumTest extends TestCase
{

    /**
     * Testa o resultado da soma de dois números
     *
     * @return void
     */
    public function testSumOfTwoNumbers() : void
    {
        $sum = new Sum();
        $sum->setFirstNumber(10.0);
        $sum->setSecondNumber(20.0);

        $this->assertEquals(30.0, $sum->sum());
    }

}
