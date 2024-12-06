<?php

namespace davoodjavadi\ctaRecords;

use Illuminate\Support\Facades\Facade;

class CtaRecordsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ctaRecords';
    }
}
