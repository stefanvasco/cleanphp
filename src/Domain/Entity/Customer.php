<?php
/**
 * Created by PhpStorm.
 * User: Vanea
 * Date: 12/13/2015
 * Time: 4:43 PM
 */

namespace CleanPhp\Invoicer\Domain\Entity;


class Customer {
    protected $name;
    protected $email;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}