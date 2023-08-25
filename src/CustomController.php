<?php

namespace Cirkle\Contact;

use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }
}
