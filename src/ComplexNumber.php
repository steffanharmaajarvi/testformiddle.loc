<?php

namespace App;

class ComplexNumber
{

    /**
     * Первая часть числа
     */
    public float $a;

    /**
     * Вторая часть числа
     */
    public float $b;

    /**
     * Создаёт комплексное число
     * 
     * @param float первая часть числа
     * @param float вторая часть числа, количество i
     */
    function __construct( float $a, float $b )
    {
        
        $this->a = $a;
        $this->b = $b;

    }

    /**
     * Возвращает собранное число
     * 
     * @return string
     */
    public function getNumber (): string
    {

        if ( $this->b == 0 && $this->a == 0 ) {

            return "0";

        }

        if ( $this->b > 0  ) {

            $operator = ' + ';

        } else {

            $operator = ' - ';

        }
        return $this->a . $operator . $this->b . "i";

    }

    /**
     * Добавляет к этому числу другое комплексное число
     * 
     * @param float первая часть числа
     * @param float вторая комплекная часть числа, может опускаться, если необходимо вещественное число
     * @return string
     */
    public function add ( float $c, float $d = null )
    {

        $this->a = $this->a + $c;

        if ( !empty($d) ) {

            $this->b = $this->b + $d;

        }

        $result = $this->getNumber();

        return $result;


    }

    /**
     * Отнимает от числа другое комплексное число
     * 
     * @param float первая часть числа
     * @param float вторая комплекная часть числа, может опускаться, если необходимо вещественное число
     * @return string
     */
    public function substract ( float $c, float $d = null )
    {

        $this->a = $this->a - $c;

        if ( !empty($d) ) {

            $this->b = $this->b - $d;

        }

        $result = $this->getNumber();

        return $result;


    }

    /**
     * Умножает комплексное число на комплексное число
     * 
     * @param float первая часть числа
     * @param float вторая комплекная часть числа, может опускаться, если необходимо вещественное число
     * @return string
     */
    public function multiply ( float $c, float $d = null ): string
    {

        if ( $c == 0 ) {

            return "0";

        }

        $first = ($this->a * $c) - ($this->b * $d);

        $second = ($this->b * $c) + ($this->a * $d);

        $this->a = $first;
        $this->b = $second;

        $result = $this->getNumber();

        return $result;


    }

    /**
     * Делит комплексное число на комплексное число
     * 
     * @param float первая часть числа
     * @param float вторая комплекная часть числа, может опускаться, если необходимо вещественное число
     * @return string
     */
    public function devide ( float $c, float $d = null ): string
    {

        if ( $c == 0 ) {

            return "";

        }

        $first = ($this->a * $c) + ($this->b * $d);
        $second = pow($c, 2) + pow($d, 2);

        $first = $first / $second;

        $third = ($this->b * $c) - ($this->a * $d);
        $third = $third / $second;

        $this->a = $first;
        $this->b = $third;

        $result = $this->getNumber();

        return $result;


    }

}