<?

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Clazz;

trait UseClasses
{

    private Clazz $clazz;

    public function initializeUseClasses()
    {
        $this->clazz = new Clazz();
    }

    public function classes()
    {
        return $this->clazz;
    }

}
