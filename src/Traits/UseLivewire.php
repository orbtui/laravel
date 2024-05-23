<?

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Livewire;

trait UseLivewire
{

    private Livewire $livewire;

    public function initializeUseLivewire()
    {
        $this->livewire = new Livewire();
    }

    public function livewire()
    {
        return $this->livewire;
    }

}
