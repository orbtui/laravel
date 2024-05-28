<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Css
{

    use UseProtection;

    private $classes = [];
    private $css     = '';

    public function add(string $className, string $color)
    {
        $this->classes[$className] = $color;
        return $this;
    }

    public function build()
    {

        foreach ($this->classes as $className => $color) {

            // Text Classes

            $this->css .= '.text-' . $className . ' { ';
            $this->css .= 'color: ' . $color . ' !important; ';
            $this->css .= ' } ';

            $this->css .= '.text-hover-' . $className . ':hover { ';
            $this->css .= 'color: ' . $color . ' !important; ';
            $this->css .= '} ';

            $this->css .= '.text-active-' . $className . '.active { ';
            $this->css .= 'color: ' . $color . ' !important; ';
            $this->css .= ' } ';

            // Background Classes

            $this->css .= '.bg-' . $className . ' { ';
            $this->css .= 'color: ' . $color . ' !important; ';
            $this->css .= ' } ';

            if ($className == 'primary') {
                $this->setTabStyles($color);
            }

        }

        return $this->css;

    }

    private function setTabStyles($color)
    {
        $this->css .= '.nav-link.active { ';
        $this->css .= 'border-bottom: 1px solid ' . $color . ' !important; ';
        $this->css .= ' } ';
    }

    private function setMenuStyles($color)
    {

        $this->css .= '.menu-item.here>.menu-link .menu-title { ';
        $this->css .= 'color: ' . $color . ' !important; ';
        $this->css .= ' } ';

    }

}
