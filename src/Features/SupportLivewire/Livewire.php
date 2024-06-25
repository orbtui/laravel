<?php

namespace OrbtUI\Features\SupportLivewire;

use OrbtUI\Features\SupportAttributes\SupportAttributes;
use OrbtUI\Features\SupportProtection\SupportProtection;

class Livewire implements LivewireDirectives
{

    use SupportAttributes, SupportProtection;

    public function add($directive, $value = null)
    {
        $this->attributes()->add($directive, $value);
        return $this;
    }

    public function empty()
    {
        return empty($this->attributes()->all());
    }

    public function all()
    {

        $directives = [];

        foreach ($this->attributes()->all() as $directive => $value) {
            array_push($directives, $value ? ($directive . '="' . $value . '"') : $directive);
        }

        return $directives;
    }

}
