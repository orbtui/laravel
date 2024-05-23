<?

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Style;

trait UseStyles
{

    private Style $style;

    public function initializeUseStyles()
    {
        $this->style = new Style();
    }

    public function styles()
    {
        return $this->style;
    }

}
