<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function switchLang($code) 
    {
        session()->put('locale', $code);
        
        return redirect()->back()->with('message', 'Sucessfully switch language to '.$code);
    }
}
