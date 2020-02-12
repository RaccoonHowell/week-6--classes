<?php

declare(strict_types=1);

class Stringy
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() : string
    {
        return strtolower($this->string);
    }

    public function upper() : string
    {
        return strtoupper($this->string);
    }

    public function append(string $string2) : string
    {
        return $this->string . $string2;
    }

    public function repeat(int $num) : string
    {
        return str_repeat($this->string, $num);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"

// // Create a class that lets you do things with a string