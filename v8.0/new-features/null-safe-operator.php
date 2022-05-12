<?php

// 空安全运算符

class Country {

    public function __construct(private string $name = 'China') {}

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

class Person
{
    private Country|null $country;

    public function __construct(?Country $country)
    {
        $this->country = $country;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }
}

// 使用空安全运算符之后（可正常输出）
$user = new Person(new Country());
var_dump($user->getCountry()?->getName());
$user = new Person(null);
var_dump($user->getCountry()?->getName()); // NULL

// 未使用空安全运算符之前
$user = new Person(new Country());
var_dump($user->getCountry()->getName());
$user = new Person(null);
// echo $user->getCountry()->getName(); // PHP Fatal error
