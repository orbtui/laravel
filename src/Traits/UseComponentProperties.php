<?

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Component;

trait UseComponentProperties
{

    protected Component $component;

    public function initializeUseComponentProperties()
    {

    }

    public function component()
    {
        return $this->component;
    }

}
