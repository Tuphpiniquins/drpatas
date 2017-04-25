<?php
declare(strict_types = 1);


namespace Tuphpiniquins\Drpatas\Model\ValueObjects;

class Email implements ValueObject
{
    private $email;

    public function __construct(string $email)
    {
        $this->validate($email);
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->email;
    }
  
    public function username() : string
    {
        return $this->getEmailParts()[0];
    }

    public function domain() : string
    {
        return $this->getEmailParts()[1];
    }

    public function equals($other)
    {
        return ($other instanceof Email) && (strtolower((string) $this) === strtolower((string) $other));
    }

    /**
     * @param string $email
     * @throws \InvalidArgumentException
     */
    private function validate(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException(sprintf("'%s' is not a valid e-mail address.", $email));
        }
    }

    private function getEmailParts() : array
    {
        return explode("@", $this->email);
    }
}
