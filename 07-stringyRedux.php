<?php

declare(strict_types=1);

class StringyRedux 
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() : StringyRedux
    {
        $this->string = strtolower($this->string);

        return $this;
    }

    public function upper() : StringyRedux
    {
        $this->string = strtoupper($this->string);

        return $this;
    }

    public function append(string $str) : StringyRedux
    {
        $this->string .= $str;

        return $this;
    }

    public function repeat(int $num) : StringyRedux
    {
        $this->string = str_repeat($this->string, $num);

        return $this;
    }

    public function get()
    {
        return $this->string;
    }
}

$string1 = new StringyRedux("Oop");
var_dump($string1->lower()->repeat(2)->get()); // string(6) "oopoop"

$string2 = new StringyRedux("Spoon");
var_dump($string2->repeat(2)->upper()->append("!")->get()); // string(11) "SPOONSPOON!"

$string3 = new StringyRedux("Na");
var_dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // string(48) "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"

// Create a class that performs a series of transformations on a string. You can use the get() method to get the final result.