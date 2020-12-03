<?php 

declare(strict_types=1);

namespace TddPhp\Arithmetic;

/**
 * Class Sum
 * @author Gustavo Alves da Silva <contato@gustavoalvesdev.com.br>
 */
class Sum 
{
    private float $firstNumber;
    private float $secondNumber;

    /**
     * @return float
     */
    public function getFirstNumber() : float 
    {
        return $this->firstNumber;
    }

    /**
     * @param float $firstNumber
     * @return void
     */
    public function setFirstNumber(float $firstNumber) : void 
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return float
     */
    public function getSecondNumber() : float 
    {
        return $this->secondNumber;
    }

    /**
     * @param float $secondNumber
     * @return void
     */
    public function setSecondNumber(float $secondNumber) : void 
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * sums two numbers
     *
     * @return float
     */
    public function sum() : float 
    {
        return $this->firstNumber + $this->secondNumber;
    }

}
