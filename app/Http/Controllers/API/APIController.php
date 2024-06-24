<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hiragana;
use Storage;

class APIController extends Controller
{
    public function CreateApi(){
        $hiragana = Hiragana::all();
        $json = $hiragana->toJson(JSON_PRETTY_PRINT);
        Storage::put('hiragana.json',$json);
        return view('home');
        }
}
