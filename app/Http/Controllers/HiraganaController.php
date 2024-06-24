<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class HiraganaController extends Controller
{
    public function ShowHiragana(){
        $Hiragana_letter = Storage::get('hiragana.json');
        $Hiragana = json_decode($Hiragana_letter,true);
        return view('home',['hiragana'=>$Hiragana]);
    }
}
