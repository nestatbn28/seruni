<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function checkHelper()
    {
        $nilai="31991391719asas";
        $value=randomText($nilai);
        return $value;
    }
}
