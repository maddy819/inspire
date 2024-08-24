<?php
namespace Maddy819\Inspire\Controllers;

use Illuminate\Http\Request;
use Maddy819\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
