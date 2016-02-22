<?php

class CalculatorService {

    // Lista de posibles operaciones
    const ADD = 'add';
    const SUBSTRACT = 'substract';
    const MULTIPLY = 'multiply';
    const DIVIDE = 'divide';

    /**
     * Realiza las operaciones entre first value y second value;
     *
     * @param integer   $firstValue
     * @param integer   $secondValue
     * @return integer
     */
    public function adding($firstValue, $secondValue) {

        // Si $firstValue y $secondValue estan definidos
        if (isset($firstValue, $secondValue)) {
            return $firstValue + $secondValue;
        }

        return null;
    }

    public function substracting($firstValue, $secondValue) {

        // Si $firstValue y $secondValue estan definidos
        if (isset($firstValue, $secondValue)) {
            return $firstValue - $secondValue;
        }

        return null;
    }

    public function multiplying($firstValue, $secondValue) {

        // Si $firstValue y $secondValue estan definidos
        if (isset($firstValue, $secondValue)) {
            return $firstValue * $secondValue;
        }

        return null;
    }

    public function spliting($firstValue, $secondValue) {

        // Si $firstValue y $secondValue estan definidos
        if (isset($firstValue, $secondValue)) {
            return $firstValue / $secondValue;
        }

        return null;
    }
}