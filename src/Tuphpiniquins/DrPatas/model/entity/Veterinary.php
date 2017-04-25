<?php
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

	public function getName()
	{
		return $this->name;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getServices()
	{
		return $this->services;
	}

	public function validate()
	{

	}
}