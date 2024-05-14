<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index(){
        // echo 'ремембер, ноу рашенс';
        $bbs = Bb::get();
        $s = "Объявления:\n\r";
        foreach ($bbs as $bb) {
            $s.=$bb->name . "\n";
            $s .=$bb->price . " деревянных\n\r";
        }

        return response($s)->header('Content-Type','text/plain');
    }
    public function details(Bb $bb){
        $s = 'название: ';
        $s.= $bb->name . "\n";
        $s .='описание: ' . $bb->content . "\n";
        $s .='цена: ' . $bb->price . " деревянных\n";

        return response($s)->header('Content-Type','text/plain');
    }
}
