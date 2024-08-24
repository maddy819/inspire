<?php

namespace Maddy819\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');
        //dd($response);
        return $response;
    }
}
