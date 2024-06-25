<?php

namespace OrbtUI\Components\Modal;


use OrbtUI\OrbtUI as Component;

class Modal extends Component
{

    public function __construct(
        public ?string $name = null,
        public string $size = 'md',
        public ?string $label = null,
        public ?string $title = null
    ) {}

    protected function mount()
    {

        $this->tag('div');

        $this->properties()->push([
            'tabindex' => '-1',
            'id' => $this->name
        ]);

        $this->classes()->push([
            'modal',
            'fade'
        ]);

        $dialog = new Component('div');

        $dialog->classes()->push([
            'modal-dialog',
            'modal-dialog-centered',
            'modal-' . $this->size
        ]);

        $content = new Component('div');

        $content->classes()->push([
            'modal-content'
        ]);

        $header = $this->createHeader();

        $content->parentOf($header);

        $body = new Component('div');

        $body->classes()->push([
            'modal-body'
        ]);

        $body->parentOf(new Component());

        $content->parentOf($body);

        $dialog->parentOf($content);

        $this->parentOf($dialog);

    }

    private function createHeader()
    {

        $header = new Component('div');

        $header->classes()->push([
            'modal-header',
            'border-0',
            'd-block'
        ]);

        $label = new Component('h4');

        $label->classes()->push([
            'text-primary fw-normal fs-6 mb-1'
        ]);

        $label->content($this->label);

        $header->parentOf($label);

        $title = new Component('h3');

        $title->classes()->push([
            'modal-title fs-3'
        ]);

        $title->content($this->title);

        $header->parentOf($title);

        return $header;

    }

}
