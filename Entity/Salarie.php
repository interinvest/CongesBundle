<?php

namespace InterInvest\CongesBundle\Entity;

/**
 * Class Salarie
 * @package InterInvest\CongesBundle\Entity
 */
abstract class Salarie
{
    /**
     * @return boolean
     */
    abstract public function hasRtt();

    /**
     * @return float
     */
    abstract public function getAnciennete();

    /**
     * @return Convention
     */
    abstract public function getConvention();

    /**
     * @return [Salarie]
     */
    abstract public function getValidateurs();
}
