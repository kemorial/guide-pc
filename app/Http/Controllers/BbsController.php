<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index(){
        $context = ['bbs'=>Bb::get()];
        return view('index',$context);
    }

    public function list(){
        $bbs = Bb::get();
        $s = "Объявления:\n\r";
        foreach ($bbs as $bb) {
            $s.=$bb->name . "\n";
            $s .=$bb->price . " деревянных\n\r";
        }

        return response($s)->header('Content-Type','text/plain');
    }
    public function details(Bb $bb){
        $context = ['bb'=>$bb];
        return view('details',$context);
    }
}
