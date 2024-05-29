<?php

namespace OrbtUI\Integrations;

use Illuminate\View\ComponentAttributeBag;
use Illuminate\View\ComponentSlot;

class Component
{

    private string    $name = '';
    private string    $view = '';
    private array     $attributes = [];
    private ?Component $child = null;

    public function __construct()
    {
    }

    public function handleBladeData(array $data = [])
    {

        if (array_key_exists('componentName', $data)) {
            $this->setName($data['componentName']);
        }

        if (array_key_exists('attributes', $data)) {

            if ($data['attributes'] instanceof ComponentAttributeBag) {

                $this->attributes = $data['attributes']->getAttributes();

            }

        }

        if (array_key_exists('slot', $data)) {

            $slot = $data['slot'];

            if ($slot instanceof ComponentSlot && !$slot->isEmpty()) {

                $this->child = new Component();

                $this->child()->handleSlotData($slot);

            }


            if (array_key_exists('componentName', $data)) {
                $this->setName($data['componentName']);
            }

            if (array_key_exists('attributes', $data)) {

                if ($data['attributes'] instanceof ComponentAttributeBag) {

                    $this->attributes = $data['attributes']->getAttributes();

                }

            }


        }

    }

    private function handleSlotData(ComponentSlot $slot)
    {

        if ($slot->attributes instanceof ComponentAttributeBag) {

            $this->attributes = $slot->attributes->getAttributes();

        }

        $this->content = $slot->toHtml();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
    public function view($view = null)
    {

        if ($view) {
            $this->view = $view;
        }

        return ($this->view ? 'ui::' . $this->view : $this->name);
    }

    public function attributes()
    {
        return $this->attributes;
    }

    public function child()
    {
        return $this->child;
    }

    public function build()
    {
        return implode(' ', $this->attributes) . '"';
    }

}
