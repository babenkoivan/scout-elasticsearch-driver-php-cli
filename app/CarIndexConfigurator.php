<?php

namespace App;

use ScoutElastic\Migratable;
use ScoutElastic\IndexConfigurator;

class CarIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    protected $settings = [
        //
    ];
}
