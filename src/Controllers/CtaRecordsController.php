<?php

namespace davoodjavadi\ctaRecords\Controllers;

use davoodjavadi\ctaRecords\Models\CtaRecord;
use Illuminate\Http\Request;

class CtaRecordsController extends BaseController
{
    public function storeCtaRecords(Request $request)
    {
        $mobile = $request->input('mobile');
        $url = $request->input('url');
        CtaRecord::create([
            'mobile' => $mobile,
            'url' => $url,
        ]);
    }
}
