<?php namespace Vendaladev\MercadoLivre\Facades;

use Illuminate\Support\Facades\Facade;

class Meli extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'meli';
    }
}