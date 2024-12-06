<?php

namespace davoodjavadi\ctaRecords\Controllers;

use Illuminate\Http\Request;

class CtaRecordsController extends BaseController
{
    public function storeCtaRecords(Request $request)
    {dd('storeCtaRecords');
        $mobile = $request->input('mobile');
        $url = $request->input('url');
        CtaRecord::create([
            'mobile' => $mobile,
            'url' => $url,
        ]);
    }
}
