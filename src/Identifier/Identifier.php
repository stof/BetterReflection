<?php

namespace BetterReflection\Identifier;

use PhpParser\Node;

class Identifier
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var IdentifierType
     */
    private $type;

    public function __construct($name, IdentifierType $type)
    {
        $this->type = $type;

        $name = ltrim($name, '\\');
        // @todo validate the name somehow (see issue #20)
        $this->name = (string)$name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return IdentifierType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @todo implement this
     * @return bool
     */
    public function isLoaded()
    {
        return false;
    }
}