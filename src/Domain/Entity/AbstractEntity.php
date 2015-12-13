<?php
/**
 * Created by PhpStorm.
 * User: Vanea
 * Date: 12/13/2015
 * Time: 4:39 PM
 */

namespace CleanPhp\Invoicer\Domain\Entity;


class AbstractEntity {
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}