<?php

namespace App;

use Micro\Base\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    public function getAppDir()
    {
        return __DIR__;
    }
}
