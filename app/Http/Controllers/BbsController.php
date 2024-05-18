<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $context = ['bbs' => Bb::get()];
        return view('index', $context);
    }

    public function details(Bb $bb)
    {
        $context = ['bb' => $bb];
        return view('details', $context);
    }
}
