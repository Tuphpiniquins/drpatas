<?php
declare(strict_types = 1);


namespace Tuphpiniquins\Drpatas\Model\ValueObjects;

interface ValueObject
{
	public function equals($other) : boolean;
}