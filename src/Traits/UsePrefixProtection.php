<?php

namespace OrbtUI\Traits;

/**
 * @props $alpine
 */
trait UsePrefixProtection
{

    private $skipped = [];

    public function protect(array $prefix)
    {
        $this->skipped = array_merge($this->skipped, $prefix);
    }

    public function isProtected($value) {

        foreach ($this->skipped as $prefix) {

            if (substr($value, 0, strlen($prefix)) === $prefix) {
                return true;
            }

        }

        return false;

    }

}
