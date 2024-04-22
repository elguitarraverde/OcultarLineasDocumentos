<?php

namespace FacturaScripts\Plugins\OcultarLineasDocumentos\Extension\Controller;

use Closure;

class ListFacturaCliente
{
    public function createViews(): Closure
    {
        return function() {
            unset($this->views['ListLineaFacturaCliente']);
        };
    }
}