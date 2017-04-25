<?php
declare(strict_types = 1);


namespace Tuphpiniquins\Drpatas\Model\Entity;

class Veterinary extends AbstractEntity
{
    
    private $name;
    private $phone;
    private $email;
    private $address;
    private $services;

    public function __construct(string $name, Phone $phone, string $email, Address $address, array $services)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->services = $services;

        $this->validate();
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getPhone() : Phone
    {
        return $this->phone;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function getServices() : array
    {
        return $this->services;
    }

    public function validate()
    {
    }
}
