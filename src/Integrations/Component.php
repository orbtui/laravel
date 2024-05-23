<?php

namespace OrbtUI\Integrations;

class Component
{

    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

}
