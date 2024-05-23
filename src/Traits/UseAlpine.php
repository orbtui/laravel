<?

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Alpine;

trait UseAlpine
{

    private Alpine $alpine;

    public function initializeUseAlpine()
    {
        $this->alpine = new Alpine();
    }

    public function alpine()
    {
        return $this->alpine;
    }

}
