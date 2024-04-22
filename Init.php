<?php
namespace FacturaScripts\Plugins\OcultarLineasDocumentos;

use FacturaScripts\Core\Base\InitClass;

class Init extends InitClass
{
    public function init()
    {
        $this->loadExtension(new Extension\Controller\ListFacturaCliente());
    }

    public function update()
    {
        //
    }
}