<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class ChangeLanguageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function changeLanguage($lang)
    {
        App::setlocale($lang);
        session()->put('lang_code', $lang);
        return redirect()->back();
    }
}
