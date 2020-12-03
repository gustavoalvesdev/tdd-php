<?php 

declare(strict_types=1);

namespace TddPhp\Arithmetic;

use InvalidArgumentException;

/**
 * Class Subtraction
 * @author Gustavo Alves da Silva <contato@gustavoalvesdev.com.br>
 */
class Subtraction
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
     * @param float $firstNumber
     * @return void
     */
    public function setSecondNumber(float $secondNumber) : void 
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * Subtracts two numbers
     *
     * @return float
     */
    public function subtract() : float
    {
        if ($this->firstNumber == 0.0 || $this->secondNumber == 0.0) {
            throw new InvalidArgumentException('Parâmetro não pode ser zero');
        }

        return $this->firstNumber - $this->secondNumber;
    }

}
